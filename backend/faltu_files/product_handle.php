<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
   include 'administrator/function.php';
   	$pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'resize_image.php';
   	
   	$target_dir = "../courses/";
    $mota =  date("U").basename($_FILES["file"]["name"]);
    $target_file = $target_dir .$mota;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        header('Location:add_course.php?choice=success&value=Sorry File Already Exist');
        exit();
    }
    // Check file size
    if ($_FILES["file"]["size"] > 500000000) {
        header('Location:add_course.php?choice=success&value=Sorry File too Large ');
        exit();
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"  && $imageFileType != "pdf") {
      header('Location:add_course.php?choice=success&value=Sorry, only JPG, JPEG, PNG & GIF files are allowed.');       
        exit();
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    //echo "mastar";
         header('Location:add_course.php?choice=success&value=Sorry, your File was Not Uploaded');
         exit();
    } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            	$dir = "../courses/";
            	$file = date("U").$_FILES['file']['name'];
            	$file_src = $dir."/".$file;       
            	$main_thumb_file = $dir."/opt/".$file;
            	smart_resize_image($file_src , null, 720, 450, false , $main_thumb_file , false , false ,80 ); 
            	$small_thumb_file = $dir."/thumb/".$file;
            	smart_resize_image($file_src , null, 450, 300, false, $small_thumb_file , false , false ,80 ); 
	          }
	      	  
              $table = "products";
              $key_list = "`product_title`,`sku`, `dimension_unit`, `category`, `description`,`status`, `file`, `product_images`, `price`";
              $value_list  = "'".$_REQUEST['product_title']."',";
              $value_list .= "'".$_REQUEST['product_sku']."',";
              $value_list .= "'".$_REQUEST['dimension_unit']."',";
              $value_list .= "'".$_REQUEST['product_category']."',";
              $value_list .= "'".$_REQUEST['product_desc']."',";
              $value_list .= "'".$_REQUEST['status']."',";
              $value_list .= "'".$mota."',";
              $value_list .= "'".$product_images."',";
              $value_list .= "'".$_REQUEST['product_price']."'";
              
              
              $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
            //  header('Location:view_courses.php?choice=success&value=Course Education Added Successfully');              
              exit();
        } else {
         // header('Location:view_courses.php?choice=success&value=Sorry, There Was an Error Uploading Your File');
           exit();
        }
    }
   
?>
