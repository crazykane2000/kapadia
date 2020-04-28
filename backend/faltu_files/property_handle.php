<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
   	$pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'resize_image.php';
   	//print_r($_FILES);

   	$target_dir = "property/";
    $mota =  date("U").basename($_FILES["thumbnail"]["name"]);
    $target_file = $target_dir .$mota;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        header('Location:add_property.php?choice=success&value=Sorry File Already Exist');
        exit();
    }
    // Check file size
    if ($_FILES["thumbnail"]["size"] > 500000000) {
        header('Location:add_property.php?choice=success&value=Sorry File too Large ');
        exit();
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"  && $imageFileType != "pdf") {
      //echo "yaha error";
        header('Location:add_property.php?choice=success&value=Sorry, only JPG, JPEG, PNG and GIF files are allowed.');       
        exit();
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    //echo "mastar";
          header('Location:add_property.php?choice=success&value=Sorry, your File was Not Uploaded');
         exit();
    } else {
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
        	$dir = "property/";
        	$file = date("U").$_FILES['thumbnail']['name'];
        	$file_src = $dir."/".$file;       
        	$main_thumb_file = $dir."/main_thumb/".$file;
        	 smart_resize_image($file_src , null, 500 , 288 , false , $main_thumb_file , false , false ,80 ); 
        	$small_thumb_file = $dir."/small_thumb/".$file;
        	smart_resize_image($file_src , null, 87 , 91 , false , $small_thumb_file , false , false ,80 ); 



        	$count = count($_FILES['property_images']['name']);
        	$arrayt = array();
	         for ($i=0; $i < $count; $i++) { 
	            $file = date("U").$_FILES['property_images']['name'][$i];
	            if($_FILES['property_images']['name'][$i]!=""){	    

	            	$arryt[] = $file;
	                move_uploaded_file($_FILES['property_images']['tmp_name'][$i], $dir."/".$file);            
	                $file_src = $dir."/".$file;             
	                $resizedFile = $dir."/thumb/".$file;
	                $resizedFile2 = $dir."/opt/".$file;
	                smart_resize_image($file_src , null, 500 , 288 , false , $resizedFile , false , false ,80 ); 
	                smart_resize_image($file_src , null, 800 , 461 , false , $resizedFile2 , false , false ,80 );   
	            }
	            else{
	              continue;
	            }
	      }
         
	      	$table = "property";
	      	 $product_images = implode(",", $arryt);
             $key_list = "`title`, `address`, `category`, `description`, `neighbourhood`, `status`, `property_price`, `bhk`, `balcony`, `kitchen`,  `thumbnail`, `property_images`, `aminities`, `booking_amount`, `nearest_road`, `facing`, `owner`, `total_area`, `location`, `carpet_area`,  `distances`, `video_link`, `for_type`";
              $value_list  = "'".$_REQUEST['property_title']."',";
              $value_list .= "'".str_replace("'", "", $_REQUEST['property_address'])."',";
              $value_list .= "'".$_REQUEST['property_category']."',";
              $value_list .= "'".$_REQUEST['property_desc']."',";
              $value_list .= "'".str_replace("'", "", $_REQUEST['neighbourhood'])."',";
              $value_list .= "'".$_REQUEST['status']."',";
              $value_list .= "'".$_REQUEST['property_price']."',";
              $value_list .= "'".$_REQUEST['bhks']."',";
              $value_list .= "'".$_REQUEST['balcony']."',";
              $value_list .= "'".$_REQUEST['kitchen']."',";
              $value_list .= "'".$mota."',";
              $value_list .= "'".$product_images."',";
              $value_list .= "'".implode(",", $_REQUEST['aminities'])."',";
              $value_list .= "'".$_REQUEST['booking_amount']."',";
              $value_list .= "'".str_replace("'", "", $_REQUEST['nearest_road'])."',";
              $value_list .= "'".$_REQUEST['facing']."',";
              $value_list .= "'".$_REQUEST['owner']."',";
              $value_list .= "'".$_REQUEST['total_area']."',";
              $value_list .= "'".str_replace("'", "", $_REQUEST['location'])."',";
              $value_list .= "'".$_REQUEST['carpet_area']."',";
              $value_list .= "'".str_replace("'", "", $_REQUEST['distances'])."',";
              $value_list .= "'".$_REQUEST['property_video']."',";
            
              $value_list .= "'".$_REQUEST['property_avilable_for']."'";
              
              
              $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
              //echo "INSERT INTO `$table` ($key_list) VALUES ($value_list)";
                header('Location:view_property.php?choice=success&value=Property Added Successfully');              
              exit();
        } else {
            header('Location:view_property.php?choice=success&value=Sorry, There Was an Error Uploading Your File');
           exit();
        }
    }
   
?>
