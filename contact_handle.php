<?php session_start();
    include 'backend/pdo_class_data.php';
    include 'backend/connection.php';    
    include 'backend/function.php';    

    $pdo = new PDO($dsn, $user, $pass, $opt); 
    $table = "contact_data";
    $key_list = "`name`, `email`, `mobile`, `query`";  

    $value_list  = "'".$_REQUEST['name']."',";
    $value_list .= "'".$_REQUEST['email']."',";
    $value_list .= "'".$_REQUEST['phone']."',";
    $value_list .= "'".$_REQUEST['query']."'";

    $result = $pdo->exec("INSERT INTO `$table` ($key_list) VALUES ($value_list)");

    $to = "crazykane2000@gmail.com";
    $to1 = "curious@kapadiandassociates.in";
    $subject = "Contact Enquiry From Service Request";
    $headers= "From: Contact Service Enquiry<noreply@mashu.in>\r\n";
    $headers.= "Reply-To: Contact Department <info@kapadiandassociates.in>\r\n";
    $headers.= "X-Mailer: PHP/" . phpversion()."\r\n";
    $headers.= "MIME-Version: 1.0" . "\r\n";
    $headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
    
    
    $data = "The Details are : <br/>";
    $data.="<b>Name : </b>".$_REQUEST['name']."<br/>";
    $data.="<b>Email : </b>".$_REQUEST['email']."<br/>";
    $data.="<b>Phone : </b>".$_REQUEST['phone']."<br/>";
    $data.="<b>Query : </b>".$_REQUEST['query']."<br/>";
    
    mail($to, $subject, $data, $headers);
    mail($to1, $subject, $data, $headers);
    header('Location:contact.php?choice=success&value=Thanks for Contacting Us, We will Get Back to You Soon.#about'); 
?>