<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<style type="text/css">
  td:nth-child(1) {  
  font-weight: bold;
  width: 150px;
}
</style>
<?php require 'includes/header_end.php'; ?>
<?php $lata = get_data_id_data("property", "id", $_REQUEST['id']); //print_r($lata);?>

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
                        <h4 class="page-title">View Property</h4>
                        <ol class="breadcrumb p-0">
                           
                            <li>
                                <a href="#"><?php echo $pdo_auth['name']; ?></a>
                            </li>
                            <li class="active">
                               View Property
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
                      <div style="padding: 10px;"></div>
                       <h3 style="color: #333;text-align:left;font-size: 20px">Property </h3>
                         <div class="table-responsive">
                           <table  style="color: #333;" class="table table-striped table-hover">
                          <thead>
                             <tr>
                                <th>Property</th>
                               <th>Description</th>
                             </tr>
                          </thead>
                          <tbody>
                            <?php 
                            //echo $lata['address'];
                              $data = "`title`, `address`, `category`, `description`, `neighbourhood`, `status`, `property_price`, `bhk`, `balcony`, `kitchen`, `floor`, `kids_play_area`, `thumbnail`, `property_images`, `aminities`, `booking_amount`, `nearest_road`, `facing`, `owner`, `total_area`, `carpet_area`, `facilities`, `distances`";
                              $data = str_replace("`", "", $data);
                              $data = explode(",", $data);
                              echo '<tr>
                                        <td>title</td>
                                        <td>'.$lata['title'].'</td>
                                </tr>
                                <tr>
                                        <td>address</td>
                                        <td>'.$lata['address'].'</td>
                                </tr>
                                <tr>
                                        <td>category</td>
                                        <td>'.$lata['category'].'</td>
                                </tr>
                                <tr>
                                        <td>description</td>
                                        <td>'.$lata['description'].'</td>
                                </tr>
                                <tr>
                                        <td>neighbourhood</td>
                                        <td>'.$lata['neighbourhood'].'</td>
                                </tr>
                                <tr>
                                        <td>property_price</td>
                                        <td>'.$lata['property_price'].'</td>
                                </tr>
                                <tr>
                                        <td>bhk</td>
                                        <td>'.$lata['bhk'].'</td>
                                </tr>
                                <tr>
                                        <td>balcony</td>
                                        <td>'.$lata['balcony'].'</td>
                                </tr>
                                <tr>
                                        <td>kitchen</td>
                                        <td>'.$lata['kitchen'].'</td>
                                </tr>
                                <tr>
                                        <td>floor</td>
                                        <td>'.$lata['floor'].'</td>
                                </tr>

                                <tr>
                                        <td>kids_play_area</td>
                                        <td>'.$lata['kids_play_area'].'</td>
                                </tr>
                                <tr>
                                        <td>thumbnail</td>
                                        <td><img src="property/small_thumb/'.$lata['thumbnail'].'" /></td>
                                </tr>
                                <tr>
                                        <td>property_images</td>
                                        <td>'.$lata['property_images'].'</td>
                                </tr>
                                <tr>
                                        <td>aminities</td>
                                        <td>'.$lata['aminities'].'</td>
                                </tr>
                                <tr>
                                        <td>booking_amount</td>
                                        <td>'.$lata['booking_amount'].'</td>
                                </tr>
                                <tr>
                                        <td>nearest_road</td>
                                        <td>'.$lata['nearest_road'].'</td>
                                </tr>
                                <tr>
                                        <td>facing</td>
                                        <td>'.$lata['facing'].'</td>
                                </tr>

                                <tr>
                                        <td>owner</td>
                                        <td>'.$lata['owner'].'</td>
                                </tr>

                                <tr>
                                        <td>total_area</td>
                                        <td>'.$lata['total_area'].'</td>
                                </tr>

                                <tr>
                                        <td>carpet_area</td>
                                        <td>'.$lata['carpet_area'].'</td>
                                </tr>

                                <tr>
                                        <td>facilities</td>
                                        <td>'.$lata['facilities'].'</td>
                                </tr>

                                <tr>
                                        <td>distances</td>
                                        <td>'.$lata['distances'].'</td>
                                </tr>

                                <tr>
                                        <td>Date</td>
                                        <td>'.$lata['date'].'</td>
                                </tr>
                                ';
                             ?>
                           <tr>
                              <td></td>        
                              <td></td>     
                           </tr>   
                        </tbody>
                      </table>
                         </div>
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
