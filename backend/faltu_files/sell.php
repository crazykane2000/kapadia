<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php require 'includes/header_end.php'; ?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Sell SX Tokens</h4>
                        <ol class="breadcrumb p-0">
                           
                            <li>
                                <a href="#">SolarXell</a>
                            </li>
                            <li class="active">
                                Sell Tokens
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">               

                <div class="col-xl-6 col-xs-12">
                    <div class="card-box items">
                       <div class="century" style="font-size: 24px;color: #333">Send SX Token to another SX Token address</div>
                          <div class="century" style="font-size: 15px;color: #666">You can now Send  <b style="color: #ddd">SX Token</b> From Below.</div>
                          <hr style="opacity: 1" />
                          <div style="padding: 10px;"></div>
                          
                          
                       
                           <form method="POST" action="send_handle.php">
                              <div class="form-group" >
                                <label>Enter SX Token Address</label>
                                <input type="text" class="form-control" name="to_address"  placeholder="Enter SX Token Address address">
                             </div>
                            
                             <div class="form-group" >
                                <label>Your SX Token Address</label>
                                <input type="text" class="form-control" name="tx_addresss"  readonly="" value="<?php echo $pdo_auth['tx_address']; ?>" placeholder="Your SX Token Address">
                             </div>
                            
                             <div class="form-group" >
                                <label>No. of SX Token To Send <span  style="color: cream;">(You have : <?php echo $pdo_auth['balance']; ?> SX Token)</span></label><br/>
                                <input type="number" min="0" class="form-control"  step=".0001" name="token_no" max="<?php echo $maya['balance']; ?>"  placeholder="Enter No. of SX Token to Send">
                             </div>
                             <div style="padding:5px;"></div>

                             <input type="hidden" name="balance" value="<?php echo $pdo_auth['balance']; ?>">
                             
                            <div style="padding:5px;"></div>

                             <button class="btn btn-primary btn-lg" style="width: 100%" >SEND SX Token</button>
                           </form>
                           <!-- <div style="color: #999;">SX Token Fee : Fee: 0.5% of the total amount or 0.5 SX Token </div> -->
                        

                         <div style="padding:20px;"></div>                     
                   </div>
                </div><!-- end col-->


                <div class="col-xl-6 col-xs-12">
                    <div class="card-box items">
                        <h4 class="header-title m-t-0 m-b-20">Things to be kept in mind before sending SX Tokens to someone</h4>
                         <h3  style="font-family: 'Didact Gothic', sans-serif;font-weight:bold;color:#3445bf;font-size: 20px;">Caution! </h3>
                         <h4  style="font-family: 'Didact Gothic', sans-serif;color: #777;font-size: 16px;">Please use the following while logging in to SX Token account:</h4>
                         <hr/>
                         <ul style="font-family: 'Didact Gothic', sans-serif;color: #444;font-size: 16px;">
                            <li style="padding: 4px;"> Ensure that your SX Token Address ID and the associated Sender ID are correct.</li>
                            <li style="padding: 4px;"> Ensure that there are no white spaces in the SX Token ID and the Sender ID.</li>
                            <li style="padding: 4px;">Ensure that there are no white spaces while you enter the dynamic access code.</li>
                            <li style="padding: 4px;">In case of any other difficulty, contact SX Token Support</li>                            
                         </ul>
                    </div>
                </div><!-- end col-->


            </div>
           

        </div> <!-- container -->

    </div> <!-- content -->


</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<?php require 'includes/footer_start.php' ?>

  <script type="text/javascript" src="match.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
       $(function() {
        $('.items').matchHeight({
          byRow: true,
          property: 'height',
          target: null,
          remove: false
      });
      });
     });
    </script>
<!-- Page specific js -->
<script src="assets/pages/jquery.dashboard.js"></script>    
<?php require 'includes/footer_end.php' ?>
