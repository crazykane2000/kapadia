<?php require 'includes/header_start.php'; ?>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php require 'includes/header_end.php'; ?>
<?php $lata = get_data_id_data("career", "id", $_REQUEST['id']); //print_r($lata); ?>

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
                        <h4 class="page-title">Add Career </h4>
                        <ol class="breadcrumb p-0">                           
                            <li><a href="#">Swikriti</a></li>
                            <li class="active"> Add Career  </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">     
                <div class="col-xl-11 col-xs-12">
                    <form action="update_career_handle.php" method="POST" enctype="multipart/form-data" >
                      <div class="card-box items">
                        <div style="padding-bottom: 5px;"></div>
                        <h2 style="font-size: 16px;">Add Career </h2> <hr/>
                       

                        <div style="padding:10px">
                          <label>Enter Career  Title</label>
                          <input type="text" name="career_title" value="<?php echo $lata['title']; ?>" placeholder="Career Title" class="form-control">
                        </div>

                        <div style="padding:10px">
                          <label>Enter Description</label>
                          <textarea  id="editor1" name="career_desc" placeholder="Career Description Here" class="form-control"><?php echo $lata['desc']; ?></textarea>
                        </div>
                        <input type="hidden" name="id"  value="<?php echo $lata['id'];  ?>">

                        <div style="padding:10px">
                          <label>Enter Career  Tags</label>
                          <input type="text" name="career_tags" value="<?php echo $lata['tags']; ?>" placeholder="Career Tags" class="form-control">
                        </div>

                        <div style="padding:10px;"><input type="submit" value="Updare Career Post Here " class="btn btn-success" /></div>
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
