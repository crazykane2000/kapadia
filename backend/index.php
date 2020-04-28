<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php include 'connection.php'; include 'random_function.php';  include 'pdo_class_data.php'; ?>
    <title> <?php include 'title.php'; ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:400,600,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="tyle.css">
    <link rel="stylesheet" type="text/css" href="hover.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style type="text/css">
    
    
    body{
      overflow:hidden;
    }

    .modal-backdrop
    {
        opacity:.9 !important;
    }

    .poik{
      padding: 10px 20px;
      font-size: 14px;
      border-radius: 30px;
      margin:6px;
      background-color: #bdf548;
      z-index: 1000;
      border:solid 1px #600;
      transition: all .2s ease-in-out 0s;
      width: 200px;
      overflow: hidden;
    }

    .poik:hover{
      padding: 10px 30px;
      font-size: 14px;
      margin:6px;
      background-color: #bdf548;
      border:solid 1px #bdf548;
      transition: all .2s ease-in-out 0s;
      overflow: hidden;
    }

    </style>
    <!-- <link rel="stylesheet" type="text/css" href="counter1.css">
    <link rel="stylesheet" type="text/css" href="counter2.css"> -->
   <!--  <link rel="stylesheet" type="text/css" href="counter3.css"> -->
    <link rel="stylesheet" type="text/css" href="css/flipclock.css">
  </head>
  <?php $rand = mt_rand(1,4); ?>
  <body style="background-color:#07163e;background-size: cover; background-image: url(jabar.jpg);">
    
    <div style="height: 20vh"></div>
       
    <div class="container" >
     <div style="">

        <div style="padding: 20px;text-align: center;position: relative;z-index: 10">
         
           <div style="padding:10px"></div> 
           <img src="" style="width: 250px;">
          <div style="padding:0px"></div>
           <?php see_status2($_REQUEST); ?>
          
          <center>
            <div style="width: 350px">

            <form method="POST" action="login_redirect.php"  novalidate onsubmit="return validate();">
             <div style="padding: 40px;background-color: #fff">
              <b>Kapadia And Associates</b>
                  <a href="index.php"><img src="" style="width: 250px"></a>      
                <div style="padding: 5px;"></div>
                <div style="padding: 10px;"></div>

                <div class="row">
                  <div class="col-sm-12">
                    <input type="text" class="form-control inputs" name="user" placeholder="Enter Email Address">
                    <input type="hidden" name="role" value="User-Agent-x">
                    <div id="email_error" style="color: red;font-size: 12px;display: none;">Enter Correct Email Address</div>
                    
                  </div>
                </div>
                  <div style="padding: 5px;"></div>

                <div class="row">

                   <div class="col-sm-12">
                     <input type="password" class="form-control inputs" name="pass" placeholder="Enter Password">
                     <div id="password_error" style="color: red;font-size: 12px;display: none;">Enter Password</div>
                     
                  </div>
                </div>
                <div style="padding: 5px;"></div>

               <input type="hidden" name="tx_address" >
              <!-- <div style="padding: 10px;"></div>-->
               
               
               

                <div class="row">
                  <div class="col-sm-12">
                   <button class="inputss " name="login" style="width: 100%;background-color: #d2aa6e">LogIn</button>
                  </div>
                </div>
                <br/>                
            </div>

            </form>
          </div>
        
          </center>
          <div style="padding:20px"></div>

         
        </div>

        
     
      </div>
      <div style="padding: 1px;"></div>


     <div id="myModal2" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="margin-top: 20vh">
        <div class="modal-dialog modal-sm" style="width:400px">
          <div class="modal-content">
            
          </div>
        </div>
      </div>


    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
    <script type="text/javascript" src="js/flipclock.js"></script>
   <script type="text/javascript">
      var clock;
      
      $(document).ready(function() {
        // Set dates.
        var futureDate  = new Date("April 30, 2018 12:59 PM EDT");
        var currentDate = new Date();

        // Calculate the difference in seconds between the future and current date
        var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

        // Calculate day difference and apply class to .clock for extra digit styling.
        function dayDiff(first, second) {
          return (second-first)/(1000*60*60*24);
        }

        if (dayDiff(currentDate, futureDate) < 100) {
          $('.clock').addClass('twoDayDigits');
        } else {
          $('.clock').addClass('threeDayDigits');
        }

        if(diff < 0) {
          diff = 0;
        }

        // Instantiate a coutdown FlipClock
        clock = $('.clock').FlipClock(diff, {
          clockFace: 'DailyCounter',
          countdown: true
        });
      });
    </script>
    
  </body>
</html>