<?php require 'includes/header_start.php'; ?>
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php require 'includes/header_end.php'; ?>
<div class="content-page">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb p-0">                           
                            <li> <a href="#"><?php echo $pdo_auth['name']; ?></a> </li>
                            <li class="active">  Dashboard  </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           
            <?php  see_status2($_REQUEST); ?>            
              <div class="col-sm-12">
                    <div class="card-box">
                      <div id="morris-bar-stacked" style="height: 390px;"></div>
                    </div>
              </div>
             <div class="row">
                  <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3">
                     <a href="view_property_category.php">
                        <div class="card-box tilebox-one">
                          <i class="icon-layers pull-xs-right text-muted"></i>
                          <h6 class="text-muted text-uppercase m-b-20">Total Projects </h6>
                          <h2 class="m-b-20" data-plugin="counterup"><?php  echo $count = count_tem_in_table("project"); ?></h2>
                          <span class="label label-success"> <?php echo $pdo_auth['name']; ?> </span> <span class="text-muted">Click to View</span>
                      </div>
                     </a>
                  </div>                 

                  <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3">
                      <a href="view_contact_data.php">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Total Contacts</h6>
                            <h2 class="m-b-20" data-plugin="counterup"><?php  echo $count = count_tem_in_table("contact_data"); ?></h2>                                     
                            <span class="label label-warning"> All Time </span> <span class="text-muted">From Begining of time</span>
                        </div>
                      </a>
                  </div>
                   <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3">
                     <a href="view_property.php">
                        <div class="card-box tilebox-one">
                          <i class="icon-layers pull-xs-right text-muted"></i>
                          <h6 class="text-muted text-uppercase m-b-20">Resume</h6>
                          <h2 class="m-b-20" data-plugin="counterup"><?php  echo $count = count_tem_in_table("career"); ?></h2>
                          <span class="label label-success"> <?php echo $pdo_auth['name']; ?> </span> <span class="text-muted">Click to View</span>
                      </div>
                     </a>
                  </div>                 

                  <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3">
                      <a href="view_testimonials.php">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket pull-xs-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Gallery</h6>
                            <h2 class="m-b-20" data-plugin="counterup"><?php  echo $count = count_tem_in_table("gallery"); ?></h2>                                     
                            <span class="label label-warning"> All Time </span> <span class="text-muted">From Begining of time</span>
                        </div>
                      </a>
                  </div>
 
              </div>
            
           


        </div> 
    </div> 

</div>

<?php require 'includes/footer_start.php' ?>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>


<!-- Page specific js -->
<script type="text/javascript">
  !function($) {
    "use strict";

    var Dashboard = function() {};
    Dashboard.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            barSizeRatio: 0.5,
            resize: true, //defaulted to true
            gridLineColor: '#ccc',
            barColors: lineColors
        });
    },

    Dashboard.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true, 
            colors: colors
        });
    },

    Dashboard.prototype.init = function() {
        var $stckedData  = [
            <?php 
               $dater =  get_data_id_data_alll("counter", 30);
               foreach($dater as $value){
                echo "{ y: '".$value['date']."', a: ".$value['count']." },";
               }
             ?>
        ]; this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a'], ['Total Visitors'], ['#b39a4f']);       
    },
    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),
function($) {
    "use strict";
    $.Dashboard.init();
}(window.jQuery);

</script>
<?php require 'includes/footer_end.php' ?>
