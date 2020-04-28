<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php require 'includes/header_end.php'; ?>
<?php $lata = get_data_id_data("service_category", "id", $_REQUEST['id']); print_r($lata); ?>

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
                        <h4 class="page-title">Update Service Category</h4>
                        <ol class="breadcrumb p-0">                           
                            <li><a href="#">Siddhi</a></li>
                            <li class="active"> Update Service Category </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">     
                <div class="col-xl-6 col-xs-3">
                    <form action="update_service_category_handle.php" method="POST" >
                      <div class="card-box items">
                        <div style="padding-bottom: 5px;"></div>
                        <h2 style="font-size: 16px;">Update Service Category</h2> <hr/>
                        <div style="padding:10px">
                          <label>Enter Updated Service Category Name</label>
                          <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
                          <input type="text" name="category_name" value="<?php echo $lata['service_category'];  ?>" placeholder="Category Name" class="form-control">
                        </div>
                        <div style="padding:10px;"><input type="submit" value="Update Service Category" class="btn btn-success" /></div>
                     </div>
                      <br/><br/>
                    </form>
                    <br/><br/>
                </div><!-- end col-->
            </div>
           

        </div> 
    </div>
</div>
<?php require 'includes/footer_start.php' ?>
<script src="assets/pages/jquery.dashboard.js"></script>
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

<?php require 'includes/footer_end.php' ?>
