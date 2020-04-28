<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);  
   //print_r($_REQUEST);

   $table = "service";
   $id= $_REQUEST['id'];
   
   try {
    $stmt = $pdo->prepare('UPDATE '.$table.' SET `title`=:title, `service_category`=:service_category, `desc`=:desc, `tag`=:tags WHERE `id` = :id');
    } catch(PDOException $ex) {
        echo "An Error occured!".$ex->getMessage(); 
        return ($ex->getMessage());
    }

   
   $stmt->execute(['id' => $id, 'title'=> $_REQUEST['service_title'], 'service_category'=> $_REQUEST['service_category'], 'desc'=>$_REQUEST['service_desc'], 'tags'=>$_REQUEST['service_tags']]);
   header('Location:view_service.php?choice=success&value=Selected service has been Updated Successfully');     
   exit();
?>
