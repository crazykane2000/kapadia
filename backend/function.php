<?php 
    function count_data_id($table, $column, $id){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT '.$column.' FROM `'.$table.'` WHERE `'.$column.'`="'.$id.'" ORDER BY date DESC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }

     function count_statistics_id($table,  $status){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `status`="'.$status.'" ORDER BY date DESC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }
    
    function count_statistics_id_po_all($table,  $id){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `seller_id`='.$id.' ORDER BY date DESC');
            //echo 'SELECT * FROM `'.$table.'` WHERE `seller_id`='.$id.' ORDER BY date DESC';
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }


     function count_statistics_id_po($table,  $status, $id){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `status`="'.$status.'" AND `seller_id`='.$id.' ORDER BY date DESC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }

    function count_tem_in_table($table){
        include '../connection.php';
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



     function count_statistics_id_po_buyer($table,  $status, $id){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `status`="'.$status.'" AND `user_tx_address`="'.$id.'" ORDER BY date DESC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }

    function count_statistics_id_po_buyer_all($table, $id){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `user_tx_address`="'.$id.'" ORDER BY date DESC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }


     function count_data($table, $column){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT '.$column.' FROM `'.$table.'` ');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }

     function count_table_data_value($table, $column, $value){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$column.'`="'.$value.'" ');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return str_pad(count($user), 3, '0', STR_PAD_LEFT);
    }

    function fetch_metadata_id($table, $column, $id){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date DESC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetch();
            return $user;
    }

  function fetch_metadata_id1($table, $column, $id){
         include 'connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date DESC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetch();
            return $user;
    }

     function fetch_metadata_allpopo($table){
         include 'connection.php';
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

     function fetch_metadata_allpopo_col($table, $col, $col_data){
         include 'connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$col.'`="'.$col_data.'" ORDER BY date DESC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return $user;
    }



     function fetch_metadata_id_notif($table, $column, $id){
         include '../connection.php';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' AND `status` LIKE "unread" ');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetch();
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


    function get_data_id_data($table, $column, $id){
         include '../connection.php';
        // echo 'SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date DESC';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date ASC');
            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());  }
            $stmt->execute();
            $user = $stmt->fetch();
            return $user;
    }


     function fetch_pooradata_id($table, $column, $id){
         include '../connection.php';
        // echo 'SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date DESC';
         $pdo = new PDO($dsn, $user, $pass, $opt);
         try {
            $stmt = $pdo->prepare('SELECT * FROM `'.$table.'` WHERE `'.$column.'`='.$id.' ORDER BY date ASC');

            } catch(PDOException $ex) {
                echo "An Error occured!"; 
                print_r($ex->getMessage());
            }
            $stmt->execute();
            $user = $stmt->fetchAll();
            return $user;

    }

    function fetch_all_popo($table){
         include '../connection.php';
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



    function bulk_upload_csv_degree_grant($table, $file,$pdo_auth){
     include '../connection.php';
      $pdo_auth = authenticate();
      $pdo = new PDO($dsn, $user, $pass, $opt);

      $csv = array_map('str_getcsv', file($file));
       $cols= ($csv[0]);
       
       $column = array();
       foreach ($cols as $key => $value) {
        $column[] = "`".$value."`";
       }
      $cols = implode(",", $column);   
      $student_ids = array();   
     
      $mota = array();
      $o = 0;
      foreach ($csv as $key => $value) {
        if($key==0){continue; }           
        $data = array();
        $count = count($value);
        $student_ids[] = $value[0];
        
        for ($i=0; $i < $count-2; $i++) { 
          $data[] = "'".$value[$i]."'";
        }
        $uniq = uniqid();
        $data[]="'0x".md5($pdo_auth['name']."-".$uniq).md5($pdo_auth['university_id']."-".$uniq)."'";
        $data[]="'".uniqid()."'"; //Authentication Key
       

        $data = "(".implode(",", $data).")";
        $mota[] = $data;
        $o++;
      }
      //print_r($mota);
      $mota = implode(",", $mota);

      $query = "INSERT INTO $table ($cols) VALUES $mota";

      //echo $query;

      $data_array = array($query, $student_ids);
      return $data_array;
    }



    function bulk_upload_csv_degree_grant_admin($table, $file,$pdo_auth){
     include '../connection.php';
      $pdo_auth = authenticate_administrator();
      $pdo = new PDO($dsn, $user, $pass, $opt);

      $csv = array_map('str_getcsv', file($file));
       $cols= ($csv[0]);
       
       $column = array();
       foreach ($cols as $key => $value) {
        $column[] = "`".$value."`";
       }
      $cols = implode(",", $column);   
      $student_ids = array();   
     
      $mota = array();
      $o = 0;
      foreach ($csv as $key => $value) {
        if($key==0){continue; }           
        $data = array();
        $count = count($value);
        $student_ids[] = $value[0];
        
        for ($i=0; $i < $count-2; $i++) { 
          $data[] = "'".$value[$i]."'";
        }
        $uniq = uniqid();
        $data[]="'0x".md5($pdo_auth['name']."-".$uniq).md5($pdo_auth['university_id']."-".$uniq)."'";
        $data[]="'".uniqid()."'"; //Authentication Key
       

        $data = "(".implode(",", $data).")";
        $mota[] = $data;
        $o++;
      }
      //print_r($mota);
      $mota = implode(",", $mota);

      $query = "INSERT INTO $table ($cols) VALUES $mota";

      //echo $query;

      $data_array = array($query, $student_ids);
      return $data_array;
    }



  function crypto_rand_secure($min, $max)
  {
      $range = $max - $min;
      if ($range < 1) return $min; // not so random...
      $log = ceil(log($range, 2));
      $bytes = (int) ($log / 8) + 1; // length in bytes
      $bits = (int) $log + 1; // length in bits
      $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
      do {
          $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
          $rnd = $rnd & $filter; // discard irrelevant bits
      } while ($rnd > $range);
      return $min + $rnd;
  }

  function getToken($length)
  {
      $token = "";
     $codeAlphabet = "abcdef";
      $codeAlphabet.= "0123456789";
      $max = strlen($codeAlphabet); // edited

      for ($i=0; $i < $length; $i++) {
          $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
      }

      return $token;
  }

   ?>