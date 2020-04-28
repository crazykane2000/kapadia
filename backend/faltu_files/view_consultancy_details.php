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
<?php $lata = get_data_id_data("consultancy", "id", $_REQUEST['id']); //print_r($lata);?>

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
                        <h4 class="page-title">View Consultancy</h4>
                        <ol class="breadcrumb p-0">
                           
                            <li>
                                <a href="#"><?php echo $pdo_auth['name']; ?></a>
                            </li>
                            <li class="active">
                               View Consultancy
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row"> 
                <div class="col-xl-9 col-xs-12">
                    <div class="card-box items">
                      <div style="padding: 10px;"></div>
                       <h3 style="color: #333;text-align:left;font-size: 20px">Consultancy </h3>
                         <div class="table-responsive">
                           <table  style="color: #333;" class="table table-striped table-hover">
                          <thead>
                             <tr>
                                <th>Sector</th>
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
                                        <td>menu_name</td>
                                        <td>'.$lata['menu_name'].'</td>
                                </tr>
                                <tr>
                                        <td>sector_title</td>
                                        <td>'.$lata['sector_title'].'</td>
                                </tr>
                                <tr>
                                        <td>summery</td>
                                        <td>'.$lata['summery'].'</td>
                                </tr>
                                <tr>
                                        <td>property_desc</td>
                                        <td>'.$lata['property_desc'].'</td>
                                </tr>
                                <tr>
                                        <td>Date</td>
                                        <td>'.$lata['date'].'</td>
                                </tr>
                                 <tr>
                                        <td>Thumbnail</td>
                                        <td><img src="consultancy/main_thumb/'.$lata['thumbnail'].'" /></td>
                                </tr>';
                                $images = explode(",", $lata['property_images']);
                             ?>
                           <tr>
                              <td>Consultancy Images</td>        
                              <td>
                                <?php 
                                  foreach ($images as $key => $value) {
                                    echo '<img src="consultancy/opt/'.$value.'" style="width:200px;padding:10px;" />';
                                  }
                                 ?>
                              </td>     
                           </tr>   
                        </tbody>
                      </table>
                         </div>
                    </div>
                </div><!-- end col-->

                
            </div>
        </div>
    </div> 
</div>

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
