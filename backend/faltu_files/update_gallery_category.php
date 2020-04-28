<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php require 'includes/header_end.php'; ?>
<?php $lata = get_data_id_data("category", "id", $_REQUEST['id']); //print_r($lata); ?>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Update Gallery Category</h4>
                        <ol class="breadcrumb p-0">                           
                            <li><a href="#">Swikriti</a></li>
                            <li class="active"> Update Gallery Category </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">     
                <div class="col-xl-6 col-xs-3">
                    <form action="update_gallery_category_handle.php" method="POST" >
                      <div class="card-box items">
                        <div style="padding-bottom: 5px;"></div>
                        <h2 style="font-size: 16px;">Update Gallery Category</h2> <hr/>
                        <div style="padding:10px">
                          <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
                          <label>Enter Gallery Category Name</label>
                          <input type="text" name="category_name" value="<?php echo $lata['category'];  ?>" placeholder="Category Name" class="form-control">
                        </div>
                        <div style="padding:10px;"><input type="submit" value="Update Category" class="btn btn-success" /></div>
                     </div>
                    </form>
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
