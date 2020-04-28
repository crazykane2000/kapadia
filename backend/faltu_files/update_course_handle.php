<?php session_start();
  include 'pdo_class_data.php';
  include 'connection.php';
  include 'administrator/function.php';
  $pdo_auth = authenticate(); $pdo = new PDO($dsn, $user, $pass, $opt);  
  $table = "courses";
  $id= $_REQUEST['id'];
  //print_r($_REQUEST);
  try {
  
  $stmt = $pdo->prepare('UPDATE '.$table.' SET `course_title`= :course_title, `description`=:description, `status`=:status, `category`=:category, `sub_category`=:sub_category WHERE id = :id');
    } catch(PDOException $ex) {
        echo "An Error occured!"; 
        return ($ex->getMessage());
    }
   $stmt->execute(['id' => $id, 'course_title' => $_REQUEST['course_title'],  'category' => $_REQUEST['course_category'], 'description' => $_REQUEST['description'], 'status' => $_REQUEST['status'], 'sub_category' => $_REQUEST['course_sub_category']]);   
   add_notification("A courses  has been Updated", "admin");
   header('Location:view_courses.php?choice=success&value= A Course has been Updated Successfully');     
?>
  