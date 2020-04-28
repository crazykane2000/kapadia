<!DOCTYPE html>
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

	
<meta name="keywords" content="Architects in Raipur | Interior Designer in Raipur| Landscape Architects in Raipur| Urban Planners & Designers in Raipur | Valuer in Raipur"/>

<meta name="description" content="Architects in Raipur, Interior Designer in Raipur, Landscape Architects in Raipur, Urban Planners & Designers in Raipur, Valuer in Raipur"/>

    <meta name="author" content="Kishan Sharma : Catpops">

    <meta http-equiv="cleartype" content="on">

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
        .man
        {
            display: block;
            float: left;
            width: 100px;
            height: 100px;
            border:solid 2px #111;
            margin:3px;
            overflow: hidden;
            opacity: .5;
            transition: all .3s ease-in-out 0s;
        }
        
        .man:hover
        {
            opacity: 1;
            border:solid 2px #444;
            transition: all .3s ease-in-out 0s;  
        }
        
        #Container .mix{
            display: none;
        }
        
        .filter{cursor: pointer}
	</style>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="easing.js"></script>
   <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
    <script>
        $(function(){
           $('#Container').mixItUp();
        });
    </script>
</head>

    <body style="color:#999">
            
        
         <?php include 'menu.php'; ?>
        <div style="padding:90px;"></div>
        
       
       
        <div class="section group" style="width:80%;margin:0 auto">
          <div style="color:#666;font-size:24px;text-align:left">PROJECTS</div>
            <div style="color:#e0e39b;font-size:14px;text-align:left">
                <span class="filter" id="recent" data-filter="all">ALL</span>  
                <span style="color:#555">&nbsp;/&nbsp;</span>
                <span class="filter" data-filter=".Current"  id="Current">CURRENT</span>  
                <span style="color:#555">&nbsp;/&nbsp;</span>
                <span class="filter" data-filter=".Up_Coming"  id="Up_Coming"> UPCOMING</span>  
                <span style="color:#555">&nbsp;/&nbsp;</span> 
                <span class="filter" data-filter=".Completed" id="completed">COMPLETED</span>
            </div>
        </div>
        <hr style="opacity:.1" />
        
        <br/>
        
        <div class="section group" id="Container" style="margin:0 auto;width:80%;min-height:400px;overflow: hidden;">
            <?php include 'admin/connection.php'; 
                    $sql = "SELECT * FROM project ORDER BY date DESC";
                    $result = mysql_query($sql) or die(mysql_error());
                    while($row = mysql_fetch_array($result))
                    {
                        echo '<div class="man mix '.$row['status'].'" data-value="12" >
                                <a href="project_image/opt/'.$row['images'].'"  data-lightbox="roadtrip" data-title="'.$row['title'].'">
                                    <img src="project_image/thumb/'.$row['images'].'" style="width:100%" />
                                </a>
                            </div>';
                    }
                ?>
            
           
           
        </div>
         <br/><br/>
          <hr style="opacity:.1" />
       
         <div class="section group" style="margin:0 auto;width:80%">
             <div style="color:#e0e39b;font-size:14px;text-align:left">SEEMS YOU'RE INTERESTED</div>
             <div style="color:#666;font-size:14px;text-align:left">Send Your enquiry at curious@kapadiaassociates.in or Fill Below Details</div>
        </div>
        <form action="contact_handle.php" method="POST">
            <div class="section group" style="margin:0 auto;width:80%">
                <div class="col span_1_of_5" style="text-align:left">
                    <div style="color:#777;font-size:14px;text-align:left">NAME</div>
                    <input name="name" type="text" style="color:#fff;padding:7px;border:solid 1px #333;background-color:#000;width:90%" />
                </div>

                <div class="col span_1_of_5" style="text-align:left">
                    <div style="color:#777;font-size:14px;text-align:left">EMAIL</div>
                    <input name="email" type="text" style="color:#fff;padding:7px;border:solid 1px #333;background-color:#000;width:90%" />
                </div>

                <div class="col span_1_of_5" style="text-align:left">
                    <div style="color:#777;font-size:14px;text-align:left">MOBILE</div>
                    <input name="phone" type="text" style="color:#fff;padding:7px;border:solid 1px #333;background-color:#000;width:90%" />
                </div>

                <div class="col span_1_of_5" style="text-align:left">
                    <div style="color:#777;font-size:14px;text-align:left">Query</div>
                    <textarea name="query" style="color:#fff;padding:7px;border:solid 1px #333;background-color:#000;width:90%" ></textarea>
                </div>

                <div class="col span_1_of_5" style="text-align:left">
                    <br/>
                    <input type="submit" value="SEND ENQUIRY" style="padding:7px;cursor:pointer;border:0;background-color:#333">
                </div>
            </div>
        </form>
        <div style="padding:60px;"></div>
        
          
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