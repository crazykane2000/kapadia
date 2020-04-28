<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);  
   //print_r($_REQUEST);

   $table = "career";
   $id= $_REQUEST['id'];
   
   try {
    $stmt = $pdo->prepare('UPDATE '.$table.' SET `title`=:title, `desc`=:desc, `tags`=:tags WHERE `id` = :id');
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
   
   $stmt->execute(['id' => $id, 'title'=> $_REQUEST['career_title'], 'desc'=>$_REQUEST['career_desc'], 'tags'=>$_REQUEST['career_tags']]);
   header('Location:view_career.php?choice=success&value=Selected Career has been Updated Successfully');     
   exit();
?>
