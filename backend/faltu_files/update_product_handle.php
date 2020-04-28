<?php session_start();
    include 'pdo_class_data.php';
    include 'connection.php';
    include 'administrator/function.php';
    $pdo_auth = authenticate();
    $pdo = new PDO($dsn, $user, $pass, $opt);  
   // print_r($_REQUEST);
   $table = "products";
   $id= $_REQUEST['id'];
   try {
    $stmt = $pdo->prepare('UPDATE '.$table.' SET `product_title`= :product_title, `sku`=:sku, `dimension_unit`=:dimension_unit, `category`=:category, `description`=:description, `status`=:status, `price`=:price WHERE id = :id');
    } catch(PDOException $ex) {
        echo "An Error occured!"; 
        return ($ex->getMessage());
    }
   $stmt->execute(['id' => $id, 'product_title' => $_REQUEST['product_title'], 'sku' => $_REQUEST['product_sku'], 'dimension_unit' => $_REQUEST['dimension_unit'], 'category' => $_REQUEST['product_category'], 'description' => $_REQUEST['product_desc'], 'status' => $_REQUEST['status'], 'price' => $_REQUEST['product_price'] ]);
   
   add_notification("A Products  has been Updated", "admin");
   header('Location:view_products.php?choice=success&value=Products has been Updated Successfully');     
?>
