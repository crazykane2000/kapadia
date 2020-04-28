<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);  
   //print_r($_REQUEST);

   $table = "blog";
   $id= $_REQUEST['id'];
   
   try {
    $stmt = $pdo->prepare('UPDATE '.$table.' SET `title`=:title, `desc`=:desc, `tags`=:tags, `category`=:category WHERE `id` = :id');
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
   
   $stmt->execute(['id' => $id, 'category' => $_REQUEST['blog_category'], 'title'=> $_REQUEST['blog_title'], 'desc'=>$_REQUEST['blog_desc'], 'tags'=>$_REQUEST['blog_tags']]);
   header('Location:view_blog.php?choice=success&value=Selected Blog has been Updated Successfully');     
   exit();
?>
