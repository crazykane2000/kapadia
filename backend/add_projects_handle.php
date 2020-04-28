<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
   	$pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
    include 'resize_image.php';

    $count = count($_FILES['file']['name']);
    $arrayt = array();

    $dir = "../project_image/";

    for ($i=0; $i < $count; $i++) { 
          $file = date("U").$_FILES['file']['name'][$i];
          $arryt[] = $file;
          $arrayt[] = $file;
          if($_FILES['file']['name'][$i]!=""){ 
              
              move_uploaded_file($_FILES['file']['tmp_name'][$i], $dir."/".$file);            
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
    $files = implode(",", $arrayt);
    $table = "project";
    $key_list = "`shortname`, `title`,`location`, `images`, `status`";        
    $value_list  = "'".$_REQUEST['short_name']."', '".$_REQUEST['title']."', '".$_REQUEST['location']."', '".$files."', '".$_REQUEST['status']."'";
    
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_projects.php?choice=success&value=Project Added Successfully');              
    exit();

   

?>
