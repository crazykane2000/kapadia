<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);  
   //print_r($_REQUEST);

   $table = "consultancy";
   $id= $_REQUEST['id'];
   
   try {
    $stmt = $pdo->prepare('UPDATE '.$table.' SET `menu_name`=:menu_name, `sector_title`=:sector_title, `summery`=:summery, `property_desc`=:property_desc WHERE `id` = :id');
    } catch(PDOException $ex) {
        echo "An Error occured!"; 
        return ($ex->getMessage());
    }

   $stmt->execute(['id' => $id, 'menu_name'=> $_REQUEST['menu_name'], 'sector_title'=>$_REQUEST['sector_title'], 'summery'=>$_REQUEST['summery'], 'property_desc'=>$_REQUEST['property_desc']]);
   header('Location:view_consultancy.php?choice=success&value=Selected consultancy has been Updated Successfully');     
   exit();
?>
