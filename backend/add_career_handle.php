<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'add_notification_user.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);
   
    $table = "jobs";
    $key_list = "`post`, `desc`,`qualification`, `experience`";        
    $value_list  = "'".$_REQUEST['career_title']."', '".$_REQUEST['career_desc']."', '".$_REQUEST['qualification']."', '".$_REQUEST['experience']."'";
    
    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
    header('Location:view_career.php?choice=success&value=Career Added Successfully');              
    exit();
?>
