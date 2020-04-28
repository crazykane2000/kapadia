<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'add_notification_user.php';
    include 'administrator/function.php';
   	$pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    
    $target_dir = "downloads/";
    $mota =  date("U").basename($_FILES["file"]["name"]);
    $target_file = $target_dir .$mota;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if (file_exists($target_file)) {
        header('Location:add_downloads.php?choice=success&value=Sorry File Already Exist');
        exit();
    }

    if ($_FILES["file"]["size"] > 500000000) {
        header('Location:add_downloads.php?choice=success&value=Sorry File too Large ');
        exit();
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"  && $imageFileType != "gif"  
      && $imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "DOCX" && $imageFileType != "PDF") {
      header('Location:add_downloads.php?choice=success&value=Sorry,These kind of files are Not allowed.');       
        exit();
    }
  
    if ($uploadOk == 0) {
         header('Location:add_downloads.php?choice=success&value=Sorry, your File was Not Uploaded');
         exit();    
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
              $file = date("U").$_FILES['file']['name'];
                $table = "downloads";
                $key_list = "`category`,`file`, `title`";      
                $value_list  = "'".$_REQUEST['download_category']."',";
                $value_list .= "'".$file."',";
                $value_list .= "'".$_REQUEST['download_title']."'";
                                  
                $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
                header('Location:view_downloads.php?choice=success&value=Download Added Successfully');              
                exit();
        } else {
          header('Location:add_downloads.php?choice=success&value=Sorry, There Was an Error Uploading Your File');
           exit();
        }
    }
   

   