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

	<title>Gallery :  Kapadia & Associates</title>
	<meta name="description" content="Kapadia Assciates">
	<meta name="keywords" content="The Best Archietect in Raipur Chhattisgarh">

	<meta name="author" content="Kishan Sharma">

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
    <link href="css/lightbox.min.css" rel="stylesheet">
	<style type="text/css">

	body { background-color:#000;padding:2em; font : 100%/1.4 'Open Sans', calibri,  sans-serif;  }
	h1 { font-size:2.2em; padding:0 0 .5em 0; }
	h2 { font-size:1.5em; }
	.header { padding:1em 0; }
	.col { padding:1em 0; text-align:center;}
        /* clearfix */
        .grid:after {
          content: '';
          display: block;
          clear: both;
        }
        /* ---- grid-item ---- */
        * { box-sizing: border-box; }
        .grid-item {
          width: 100px;
          height: 100px;
          margin-bottom: 10px;
          float: left;
          background: #222;
          opacity: .4;
          border: 2px solid #333;
          border-color: hsla(0, 0%, 0%, 0.5);
          transition: all .9s ease-in-out 0s;
            overflow: hidden;
            -webkit-filter: grayscale(100%); /* Chrome, Safari, Opera */
    filter: grayscale(100%);
        }
        
        .grid-item:hover
        {
            opacity: 1;
            transition: all .2s ease-in-out 0s;
            -webkit-filter: grayscale(0%); /* Chrome, Safari, Opera */
            filter: grayscale(0%);
        }        
	</style>
   
</head>

    <body>
  
        
         <?php include 'menu.php'; ?>
        <div style="padding:90px;"></div>
        
        
       
        <div class="section group" style="width:80%;margin:0 auto">
          <div style="color:#666;font-size:24px;text-align:left">MEMORABLE MOMENTS</div>
            <div style="color:#e0e39b;font-size:14px;text-align:left">RECENT EVENTS &AMP; GALLERY</div>
        </div>
        <hr style="opacity:.1" />
        
        <br/>
        
        <div class="section group" style="margin:0 auto;width:80%">
            <div class="grid">
              <?php
                $data = fetch_all_popo("gallery"); $i=0;
                foreach ($data as $key => $value) {
                  echo '<div class="grid-item">
                            <a href="backend/gallery/thumb/'.$value['file'].'" data-lightbox="roadtrip" data-title="'.$value['title'].'">
                                <img src="backend/gallery/opt/'.$value['file'].'" style="width:100%;" />
                            </a>
                        </div>';
                }
            ?>
            
              
              
            </div>

        </div>
         <br/><br/>
          <hr style="opacity:.1" />
            
        <div style="padding:30px;"></div>
        <div class="section group" style="width:80%;margin:0 auto">
            <div style="color:#444;font-size:12px;">Copyright&copy; 2011-<?php echo date("Y"); ?>, All Rights Reserved. </div>
        </div>
         <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
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