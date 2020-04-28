<?php session_start();
    ob_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'resize_image.php';

    $target_dir = "product/";
    $mota =  date("U").basename($_FILES["thumbnail"]["name"]);
    $mota1 =  date("U").basename($_FILES["table_img"]["name"]);
    $target_file = $target_dir .$mota;
    $target_file1 = $target_dir .$mota1;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    if (file_exists($target_file)) {
        header('Location:add_sectors.php?choice=success&value=Sorry File Already Exist');
        exit();
    }
    if (file_exists($target_file1)) {
        header('Location:add_sectors.php?choice=success&value=Sorry File Already Exist');
        exit();
    }
    
    if ($_FILES["thumbnail"]["size"] > 500000000) {
        header('Location:add_sectors.php?choice=success&value=Sorry File too Large ');
        exit();
    }
     if ($_FILES["table_img"]["size"] > 500000000) {
        header('Location:add_sectors.php?choice=success&value=Sorry File too Large ');
        exit();
    }
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"  && $imageFileType != "pdf") {
        header('Location:add_sectors.php?choice=success&value=Sorry, only JPG, JPEG, PNG and GIF files are allowed.');       
        exit();
    }
    if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
    && $imageFileType1 != "gif"  && $imageFileType1 != "pdf") {
        header('Location:add_sectors.php?choice=success&value=Sorry, only JPG, JPEG, PNG and GIF files are allowed.');       
        exit();
    }
    
    if ($uploadOk == 0) {
          header('Location:add_sectors.php?choice=success&value=Sorry, your File was Not Uploaded');
         exit();
    } else {
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            if (move_uploaded_file($_FILES["table_img"]["tmp_name"], $target_file1)){
          $dir = "product/";
          $file = date("U").$_FILES['thumbnail']['name'];
          $file1 = date("U").$_FILES['table_img']['name'];
          $file_src = $dir."/".$file;
          $file_src1 = $dir."/".$file1;
          $main_thumb_file = $dir."/main_thumb/".$file;
           smart_resize_image($file_src , null, 500 , 288 , false , $main_thumb_file , false , false ,80 ); 
          $main_thumb_file1 = $dir."/main_thumb/".$file1;
           smart_resize_image($file_src1 , null, 500 , 288 , false , $main_thumb_file1 , false , false ,80 ); 
          $small_thumb_file = $dir."/small_thumb/".$file;
          smart_resize_image($file_src , null, 87 , 91 , false , $small_thumb_file , false , false ,80 ); 
          $small_thumb_file1 = $dir."/small_thumb/".$file1;
          smart_resize_image($file_src1 , null, 87 , 91 , false , $small_thumb_file1 , false , false ,80 ); 




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
                  smart_resize_image($file_src , null, 500 , 500 , false , $resizedFile , false , false ,80 ); 
                  smart_resize_image($file_src , null, 800 , 461 , false , $resizedFile2 , false , false ,80 );   
              }
              else{
                continue;
              }
        }
         
          $table = "sector";
           $product_images = implode(",", $arryt);
             $key_list = "`menu_name`, `sector_title`, `summery`, `property_desc`,`table_img`,  `thumbnail`, `property_images`, `status`";
              $value_list  = "'".$_REQUEST['menu_name']."',";
              $value_list .= "'".$_REQUEST['sector_title']."',";
              $value_list .= "'".$_REQUEST['summery']."',";
              $value_list .= "'".$_REQUEST['property_desc']."',";
              $value_list .= "'".$mota1."',";
              $value_list .= "'".$mota."',";            
              $value_list .= "'".$product_images."',";            
              $value_list .= "'Online'";
              
              $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
                header('Location:view_sector.php?choice=success&value=Sector Added Successfully');              
              exit();
        } 
            
        }else {
            header('Location:view_sector.php?choice=success&value=Sorry, There Was an Error Uploading Your File');
           exit();
        }
    }
   
?>
