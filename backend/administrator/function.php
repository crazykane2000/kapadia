<?php 
  function add_notification($notification, $for){
    include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        $table = "notification";
        $key_list = "`notification`, `for`";
        $value_list = "'".$notification."', '".$for."'";
        $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");
  }


    function get_data_col($table, $col, $value){
       include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$col.'`="'.$value.'"  ORDER BY date DESC');
          //echo 'SELECT * FROM `'.$table.'` WHERE `'.$col.'`="'.$value.'"  ORDER BY date DESC';
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetchAll();
      return $user;
    }

     function get_count_items($table, $col, $value){
       include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$col.'`="'.$value.'"  ORDER BY date DESC ');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->rowCount();
      return $user;
    }

function get_data_id($table){
        include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `'.$table.'`  ORDER BY date DESC ');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetch();
      return $user;
    }

     function fetch_all_popo($table){
         include 'connection.php';
        // echo 'SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date DESC';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` ORDER BY date DESC');

            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return $user;
    }



     function fetch_all_popo_col($table, $col){
         include 'connection.php';
        // echo 'SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date DESC';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` ORDER BY '.$col);

            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return $user;
    }


    function fetch_all_popo_alpha($table){
         include 'connection.php';
        // echo 'SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date DESC';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` ORDER BY  `category`');

            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return $user;
    }


      function get_data_id2($table){
        include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `'.$table.'`  ORDER BY date DESC ');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetch();
      return $user;
    }


    function fetch_last($table){
        include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `'.$table.'`  ORDER BY date DESC LIMIT 1');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetch();
      return $user;
    }


     function get_data_id_data($table, $col, $id){
        include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$col.'`="'.$id.'" ORDER BY date DESC ');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetch();
      return $user;
    }




 function get_data_id_data_alll($table, $limits){
        include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` ORDER BY date DESC LIMIT '.$limits);
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetchAll();
      return $user;
    }
    
    
    function get_data_id_data_alll_mata($table, $tx_address){
        include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE tx_address LIKE "'.$tx_address.'" ORDER BY date DESC');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->fetch();
      return $user;
    }

    function count_notification($table, $id){
        include 'connection.php';
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
        $pdo = new PDO($dsn, $user, $pass, $opt);        
                         
      try {
          $stmt = $pdo->prepare('SELECT * FROM `notification` WHERE `user_id`='.$id.' AND `status`="Unread" ORDER BY date DESC');
      } catch(PDOException $ex) {
          echo "An Error occured!"; 
          print_r($ex->getMessage());
      }
      $stmt->execute();
      $user = $stmt->rowCount();
      return $user;
    }

      function count_tem_in_table($table){
        include 'connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'`');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }


    function count_up($table, $id, $col){
      include 'connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('UPDATE `'.$table.'` SET '.$col.' = '.$col.' + 1 WHERE id='.$id);
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            
    }


 ?>