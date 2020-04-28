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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php $data = get_data_id_data("jobs", "id", $_REQUEST['career_id']);   ?>
	<title> <?php echo $data['post']; ?> :  Kapadia & Associates</title>
	<meta name="description" content="<?php echo strip_tags(htmlspecialchars_decode($data['post'])); ?>">
	<meta name="keywords" content="Career, Jobs, Recent Openings">
	<meta name="author" content="www.catpops.in : Kishan Sharma">
	<meta http-equiv="cleartype" content="on">
	<link rel="shortcut icon" href="/favicon.ico">
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
        
        
       
        <div class="section group" style="width:80%;margin:0 auto">
          <div style="color:#666;font-size:34px;text-align:left"><?php echo $data['post']; ?></div>
            <div style="color:#e0e39b;font-size:14px;text-align:left">EXP : <?php echo $data['experience']; ?>, QUALIFICATION : <?php echo $data['qualification']; ?></div>
             <?php see_status($_REQUEST); ?>
        </div>
        <hr style="opacity:.1" /><br/>
        
        <div class="section group" style="margin:0 auto;width:80%">
           <div style="color:#888;font-size:12px;">
                <?php echo htmlspecialchars_decode($data['desc']); ?>
            </div>
        </div>
         <br/><br/>
          <hr style="opacity:.1" />
       
         <div class="section group" style="margin:0 auto;width:80%">
             <div style="color:#e0e39b;font-size:14px;text-align:left">SEEMS YOU'RE INTERESTED</div>
             <div style="color:#666;font-size:14px;text-align:left">Send Your Resume at curious@kapadiaassociates.in or Fill Below Details</div>
        </div>
        <form action="career_handle.php" method="POST" enctype="multipart/form-data">
            <div class="section group" style="margin:0 auto;width:80%">
                <div class="col span_1_of_5" style="text-align:left">
                    <div style="color:#777;font-size:14px;text-align:left">NAME</div>
                    <input name="name" required="" type="text" style="color:#fff;padding:7px;border:solid 1px #333;background-color:#000;width:90%" />
                </div>

                <div class="col span_1_of_5" style="text-align:left">
                    <div style="color:#777;font-size:14px;text-align:left">EMAIL</div>
                    <input name="email" required="" type="text" style="color:#fff;padding:7px;border:solid 1px #333;background-color:#000;width:90%" />
                </div>

                <div class="col span_1_of_5" style="text-align:left">
                    <div style="color:#777;font-size:14px;text-align:left">MOBILE</div>
                    <input name="phone" required="" type="text" style="color:#fff;padding:7px;border:solid 1px #333;background-color:#000;width:90%" />
                </div>

                <!-- <div class="col span_1_of_5" style="text-align:left">
                    <div style="color:#777;font-size:14px;text-align:left">RESUME</div>
                    <input name="file" type="file" style="color:#fff;padding:7px;border:solid 1px #333;background-color:#000;width:90%" />
                </div> -->

                <div class="col span_1_of_5" style="text-align:left">
                    <br/>
                    <input type="submit" value="SEND JOB CALLBACK" style="padding:7px;cursor:pointer;border:0;background-color:#8c782b">
                </div>
            </div>
        </form>
        <div style="padding:60px;"></div>
        
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