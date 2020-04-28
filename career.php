<?php session_start();
    include 'backend/pdo_class_data.php';
    include 'backend/connection.php';    
    include 'backend/administrator/function.php';    
    $pdo = new PDO($dsn, $user, $pass, $opt);
?><!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81865872-1', 'auto');
  ga('send', 'pageview');

</script>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Career With  Us :  Kapadia & Associates</title>
	<meta name="description" content="This is the Responsive Grid System, a quick, easy and flexible way to create a responsive web site.">
	<meta name="keywords" content="responsive, grid, system, web design">

	<meta name="author" content="www.grahamrobertsonmiller.co.uk">

	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="/favicon.ico">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link rel="stylesheet" href="css/col.css" media="all">
	<link rel="stylesheet" href="css/2cols.css" media="all">
	<link rel="stylesheet" href="css/3cols.css" media="all">
	<link rel="stylesheet" href="css/4cols.css" media="all">
	<link rel="stylesheet" href="css/5cols.css" media="all">
	<link rel="stylesheet" href="css/6cols.css" media="all">
	<link rel="stylesheet" href="css/7cols.css" media="all">
	<link rel="stylesheet" href="css/8cols.css" media="all">
	<link rel="stylesheet" href="css/9cols.css" media="all">
	<link rel="stylesheet" href="css/10cols.css" media="all">
	<link rel="stylesheet" href="css/11cols.css" media="all">
	<link rel="stylesheet" href="css/12cols.css" media="all">
    <link rel="stylesheet" href="gend.css" media="all">
	<style type="text/css">

	body { background-color:#000;padding:2em; font : 100%/1.4 'Open Sans', calibri,  sans-serif;  }
	h1 { font-size:2.2em; padding:0 0 .5em 0; }
	h2 { font-size:1.5em; }
	.header { padding:1em 0; }
	.col { padding:1em 0; text-align:center;}

	</style>
</head>

    <body>
         <?php include 'menu.php'; ?>
        <div style="padding:90px;"></div>
       
        <div class="section group" style="width:90%;margin:0 auto">
          <div style="color:#666;font-size:34px;text-align:left">LOVE DESCIPLINED ARTS?</div>
            <div style="color:#e0e39b;font-size:14px;text-align:left">SO DO WE. JOIN US.</div>
             <?php see_status($_REQUEST);   ?>
        </div>
        <hr style="opacity:.1" />
        <br/>
        <div class="section group" style="width:80%;margin:0 auto">
          <?php
                $data = fetch_all_popo("jobs"); $i=0;
                foreach ($data as $key => $value) {
                  if($i%3==0)
                    { echo '</div><div class="group section" style="width:90%;margin:0 auto">'; }
                    echo '<div class="col span_1_of_3 gamp">
                      <a href="career_inner.php?career_id='.$value['id'].'" style="text-decoration:none;">
                        <div style="padding:10px;">
                             <div style="color:#eee;font-size:14px;text-align:left">'.$value['post'].'</div>
                               <p style="color:#666;font-size:12px;text-align:left"> Quali : '.$value['qualification'].', Exp : '.$value['experience'].'<br/>
                       </div>
                      </a></div>';
                    $i++;
                }
            ?>
        </div>
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81865872-1', 'auto');
  ga('send', 'pageview');

</script>
        
        
        
    </body>
</html>