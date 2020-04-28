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
                        <h4 class="page-title">Add downloads </h4>
                        <ol class="breadcrumb p-0">                           
                            <li><a href="#"><?php echo $pdo_auth['name']; ?></a></li>
                            <li class="active"> Add downloads  </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">     
                <div class="col-xl-11 col-xs-12">
                    <form action="add_downloads_handle.php" method="POST" enctype="multipart/form-data" >
                      <div class="card-box items">
                        <div style="padding-bottom: 5px;"></div>
                        <h2 style="font-size: 16px;">Add downloads </h2> <hr/>
                        <div style="padding:10px">
                          <label>Select downloads Category</label>
                          <select name="download_category" class="form-control" required="">
                            <option value="">Select Download Category</option>
                            <option>Notice Circulars</option>
                            <option>Brochures</option>
                            <option>Others</option>
                            <option>Downloadable Materials</option>
                          </select>
                        </div>

                        <div style="padding:10px">
                          <label>Download Title</label>
                          <input type="text" name="download_title" placeholder="Title of Downloads" class="form-control">
                        </div>

                         <div style="padding:10px">
                          <label>Attach File</label>
                          <input type="file" name="file" placeholder="Attach Image" class="form-control">
                        </div>

                        <div style="padding:10px;"><input type="submit" value="Add downloads Here " class="btn btn-success" /></div>
                        <div style="padding: 30px;"></div>
                     </div>
                    </form>
                </div><!-- end col-->
            </div>
           

        </div> 
    </div>
</div>
<?php require 'includes/footer_start.php' ?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
 <script>
      CKEDITOR.replace( 'editor1' );
  </script>

<?php require 'includes/footer_end.php' ?>
