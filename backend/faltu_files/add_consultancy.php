<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<style type="text/css">
  .material-switch > input[type="checkbox"] {
    display: none;   
}

.material-switch > label {
    cursor: pointer;
    height: 0px;
    position: relative; 
    width: 40px;  
}

.material-switch > label::before {
    background: rgb(0, 0, 0);
    box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    content: '';
    height: 16px;
    margin-top: -8px;
    position:absolute;
    opacity: 0.3;
    transition: all 0.4s ease-in-out;
    width: 40px;
}
.material-switch > label::after {
    background: rgb(255, 255, 255);
    border-radius: 16px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    content: '';
    height: 24px;
    left: -4px;
    margin-top: -8px;
    position: absolute;
    top: -4px;
    transition: all 0.3s ease-in-out;
    width: 24px;
}
.material-switch > input[type="checkbox"]:checked + label::before {
    background: inherit;
    opacity: 0.5;
}
.material-switch > input[type="checkbox"]:checked + label::after {
    background: inherit;
    left: 20px;
}
</style>
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
                        <h4 class="page-title">Add Consultancy</h4>
                        <div class="clearfix" style="padding:10px;"></div>
                    </div>
                </div>
            </div>

            <?php  see_status2($_REQUEST); ?>
            <form action="consultancy_handle.php" method="POST" enctype="multipart/form-data">
              <div class="row">               

                <div class="col-xl-6 col-xs-12">
                    <div class="card-box items">
                        <div class="form-group">
                         <label>Menu Name</label>
                         <input type="text" class="form-control" required name="menu_name" placeholder="Please Enter Menu Name" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Please Enter Consultancy Title</label>
                         <input type="text" class="form-control" required name="sector_title" placeholder="Please Enter Consultancy Title Here" style="padding: 10px;">
                       </div>

                         <div class="form-group">
                         <label>Please Enter Summary</label>
                         <textarea class="form-control" required   name="summery" placeholder="Enter Short Desc Here" style="padding: 10px;"></textarea>
                       </div>

                       <div class="form-group">
                         <label>Please Enter Description</label>
                         <textarea class="form-control" required id="editor1"  name="property_desc" placeholder="Enter Description Here" style="padding: 10px;"></textarea>
                       </div>

                       
                       <div class="form-group">
                         <label>Please Enter Thumbnail Image</label>
                         <input type="file" required  class="form-control" name="thumbnail" placeholder="Please Enter Thumbnail" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Enter Consultancy Images <span style="color: orangered">(You can Attach Multiple Images)</span></label>
                         <input type="file" required  class="form-control" name="property_images[]" multiple="" placeholder="Please Enter Property Images" style="padding: 10px;">
                       </div>
                      
                         <div style="padding: 10px;"></div>
                       <button type="submit" id="oplo" class="btn btn-success btn-lg">Add Consultancy</button>


                   </div>
                </div>
            </form>
        </div> <!-- container -->
    </div> <!-- content -->
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
      CKEDITOR.replace( 'editor3' );
      CKEDITOR.replace( 'editor2' );
  </script>

<?php require 'includes/footer_end.php' ?>
