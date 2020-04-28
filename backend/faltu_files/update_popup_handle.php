<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);  
   //print_r($_REQUEST);

   $table = "popups";
   $id= $_REQUEST['id'];
   
   try {
    $stmt = $pdo->prepare('UPDATE '.$table.' SET `title`=:title, `description`=:desc, `time`=:time, `date`=:date WHERE `id` = :id');
    } catch(PDOException $ex) {
        echo "An Error occured!"; 
        return ($ex->getMessage());
    }

    // try {
    // $stmt = $pdo->prepare('UPDATE '.$table.' SET title="'.$_REQUEST['blog_title'].'", desc="'.$_REQUEST['blog_desc'].'", tags="'.$_REQUEST['tags'].'", category:category WHERE id = :id');
    // } catch(PDOException $ex) {
    //     echo "An Error occured!"; 
    //     return ($ex->getMessage());
    // }
   
   $stmt->execute(['id' => $id, 'date' => $_REQUEST['date_of_meetup'], 'title'=> $_REQUEST['popup_title'], 'desc'=>$_REQUEST['popup_desc'], 'time'=>$_REQUEST['time_of_meetup']]);
   header('Location:view_popups.php?choice=success&value=Selected Popup has been Updated Successfully');     
   exit();
?>
