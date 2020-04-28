<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'add_notification_user.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
   
    $table = "video";
    $key_list = "`title`, `link`";        
    $value_list  = "'".$_REQUEST['video_title']."', '".$_REQUEST['video']."'";
    
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_video.php?choice=success&value=Video Added Successfully');              
    exit();
?>
