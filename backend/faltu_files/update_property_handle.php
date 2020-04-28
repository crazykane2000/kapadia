<?php   session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'resize_image.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    // print_r($_FILES['thumbnail']['name']);
    $thumb = "";
    $product_images = "";
    $dir = "property/";
    if ($_FILES['thumbnail']['name']!="") {
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
          header('Location:add_property.php?choice=success&value=Sorry, only JPG, JPEG, PNG & GIF files are allowed.');       
            exit();
        }

        if ($uploadOk == 0) {
             header('Location:add_property.php?choice=success&value=Sorry, your File was Not Uploaded');
             exit();
        } else {
                  move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
                  $dir = "property/";
                  $file = date("U").$_FILES['thumbnail']['name'];
                  $file_src = $dir."/".$file;       
                  $main_thumb_file = $dir."/main_thumb/".$file;
                  smart_resize_image($file_src , null, 500 , 288 , false , $main_thumb_file , false , false ,80 ); 
                  $small_thumb_file = $dir."/small_thumb/".$file;
                  smart_resize_image($file_src , null, 87 , 91 , false , $small_thumb_file , false , false ,80 );
                  $thumb = "`thumbnail`='".$file."',";
                }
      }
      $property_images = "";
      if($_FILES['property_images']['name'][0]!=""){
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
        $product_images = implode(",", $arryt);
        $product_images = "`property_images`='".$product_images."',";
      }

      $file_floor = "";
        if($_FILES['floor_plan']['name']!=""){
           $file_floor = date("U").$_FILES['floor_plan']['name'];
           move_uploaded_file($_FILES['floor_plan']['tmp_name'], "floor_plan/".$file_floor);
        }


    if(isset($_REQUEST['update_user'])){
      $table = "property";
      $aminities = implode(",", $_REQUEST['aminities']);
      $result = $pdo->exec("UPDATE `property` SET `title`='".$_REQUEST['property_title']."', ".$thumb." ".$product_images." `address`='".$_REQUEST['property_address']."',`category`='".$_REQUEST['property_category']."',`description`='".$_REQUEST['property_desc']."',`neighbourhood`='".$_REQUEST['neighbourhood']."',`status`='".$_REQUEST['status']."',`property_price`='".$_REQUEST['property_price']."',`bhk`='".$_REQUEST['bhks']."',`balcony`='".$_REQUEST['balcony']."',`kitchen`='".$_REQUEST['kitchen']."',`floor`='".$_REQUEST['floor']."',`kids_play_area`='".$_REQUEST['kids_play_area']."',`aminities`='".$aminities."',`booking_amount`='".$_REQUEST['booking_amount']."',`nearest_road`='".$_REQUEST['nearest_road']."',`facing`='".$_REQUEST['facing']."',`owner`='".$_REQUEST['owner']."',`total_area`='".$_REQUEST['total_area']."',`carpet_area`='".$_REQUEST['carpet_area']."',`facilities`='".$_REQUEST['facilities']."',`distances`='".$_REQUEST['distances']."',`for_type`='".$_REQUEST['property_avilable_for']."', `property_video`='".$_REQUEST['property_video']."' ,`floor_plan`='".$file_floor."'  ,`location`='".$_REQUEST['location']."'  WHERE id=".$_REQUEST['id']);

     // echo "UPDATE `property` SET `title`='".$_REQUEST['property_title']."', ".$thumb." `address`='".$_REQUEST['property_address']."',`category`='".$_REQUEST['property_category']."',`description`='".$_REQUEST['property_desc']."',`neighbourhood`='".$_REQUEST['neighbourhood']."',`status`='".$_REQUEST['status']."',`property_price`='".$_REQUEST['property_price']."',`bhk`='".$_REQUEST['bhks']."',`balcony`='".$_REQUEST['balcony']."',`kitchen`='".$_REQUEST['kitchen']."',`floor`='".$_REQUEST['floor']."',`kids_play_area`='".$_REQUEST['kids_play_area']."',`aminities`='".$aminities."',`booking_amount`='".$_REQUEST['booking_amount']."',`nearest_road`='".$_REQUEST['nearest_road']."',`facing`='".$_REQUEST['facing']."',`owner`='".$_REQUEST['owner']."',`total_area`='".$_REQUEST['total_area']."',`carpet_area`='".$_REQUEST['carpet_area']."',`facilities`='".$_REQUEST['facilities']."',`distances`='".$_REQUEST['distances']."',`for_type`='".$_REQUEST['property_avilable_for']."'   WHERE id=".$_REQUEST['id'];

     
     header('Location:view_property.php?choice=success&value=Your Property has been Updated');
    }
?>