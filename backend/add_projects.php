<?php require 'includes/header_start.php'; ?>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
  <!-- Plugins css -->
    <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                        <h4 class="page-title">Add Projects </h4>
                        <ol class="breadcrumb p-0">                           
                            <li><a href="#"><?php echo $pdo_auth['name']; ?></a></li>
                            <li class="active"> Add Projects  </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">     
                <div class="col-xl-8 col-xs-12">
                    <form action="add_projects_handle.php" method="POST" enctype="multipart/form-data" >
                      <div class="card-box items">
                        <div style="padding-bottom: 5px;"></div>
                        <h2 style="font-size: 16px;">Add Projects </h2> <hr/>
                        

                        <div style="padding:10px">
                          <label>Enter Short Name</label>
                          <input type="text" name="short_name"  placeholder="Enter Short Name" class="form-control">
                        </div>

                         <div style="padding:10px">
                          <label>Title</label>
                          <input type="text" name="title" placeholder="Title" class="form-control ">
                        </div>

                        <div style="padding:10px">
                          <label>Location</label>
                          <input type="text" name="location" placeholder="Location" class="form-control">
                        </div>  

                        <div style="padding:10px">
                          <label>Enter Status</label>
                          <select name="status" class="form-control" required="">
                            <option>Completed</option>
                            <option>Upm Coming</option>
                            <option>Current</option>
                          </select>
                        </div>

                         <div style="padding:10px">
                          <label>Attach Images</label>
                          <input type="file" name="file[]" multiple="" placeholder="Attach Image" class="form-control">
                        </div>

                        <div style="padding:10px;"><input type="submit" value="Add Projects Here " class="btn btn-success" /></div>
                     </div>
                    </form>
                </div><!-- end col-->
            </div>
           

        </div> 
    </div>
</div>
<?php require 'includes/footer_start.php' ?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
 <script>
      CKEDITOR.replace( 'editor1' );
  </script>
  <script src="assets/js/jquery.core.js"></script>
  <script src="assets/js/jquery.app.js"></script>
    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/plugins/mjolnic-bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugins/clockpicker/bootstrap-clockpicker.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script type="text/javascript">
      $("#datepicker").datepicker({format: 'dd/mm/yyyy'});
      $('.clockpicker').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
    </script>

  
  

<?php require 'includes/footer_end.php' ?>
