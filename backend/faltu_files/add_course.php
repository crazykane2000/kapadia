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
                        <h4 class="page-title">Add Courses</h4>
                        <div class="clearfix" style="padding:10px;"></div>
                    </div>
                </div>
            </div>

            <?php  see_status2($_REQUEST); ?>
            <form action="course_handle.php" method="POST" enctype="multipart/form-data">
              <div class="row">               

                <div class="col-xl-8 col-xs-12">
                    <div class="card-box items">
                       <h2 style="font-size: 26px;">Add/Edit New Course Here</h2><hr/>
                       <div style="padding: 10px;"></div>
                       <div class="form-group">
                         <label>Please Enter Course Title</label>
                         <input type="text" class="form-control" required name="course_title" placeholder="Please Enter Corse Title Here" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Please Enter Description</label>
                         <textarea class="form-control" required id="editor1" rows="6" name="description" placeholder="Enter Description Here" style="padding: 10px;"></textarea>
                       </div>

                        
                   </div>
                </div><!-- end col-->  

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">
                      <div class="form-group">
                       <label>Please Select Category</label>
                       <select class="form-control" style="padding: 10px;" name="course_category">
                         <option>Select Course Category</option>
                         <option>Under Graduate</option>
                         <option>Graduate</option>
                         <option>Post Graduate</option>
                         <option>Diploma</option>
                         <option>Distance Learning</option>
                         <option>Certificate Program</option>
                         <option>Seminar/Training</option>
                         <option>Workshops</option>
                         <option>Others</option>
                        </select>
                      </div>

                      <div class="form-group">
                       <label>Please Select Sub Category</label>
                       <select class="form-control" style="padding: 10px;" name="course_sub_category">
                         <option>Select Sub Category</option>
                         <option>Engineering</option>
                         <option>Business (MBA)</option>
                         <option>Commerce</option>
                         <option>Arts</option>
                         <option>Nursing</option>
                         <option>Medical</option>
                         <option>Others</option>
                        </select>
                      </div>

                      <div class="form-group">
                         <label>Upload Image File</label>
                         <input type="file" name="file" class="form-control" placeholder="Upload Image">
                       </div>

                       <div class="form-group">
                         <label>Select Status</label>
                         <select class="form-control" style="padding: 10px;" name="status">
                           <option>Select Availability Status</option>
                           <option>Available</option>
                           <option>Unavailable</option>                           
                         </select>
                       </div>

                       <div style="padding: 5px;"></div><hr/><div style="padding: 5px;"></div>
                       <button type="submit" id="oplo" class="btn btn-success btn-lg">Add Courses</button>
                       
                   </div>
                </div><!-- end col-->              
            </div>
            </form>
        </div> <!-- container -->
    </div> <!-- content -->
</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<?php require 'includes/footer_start.php' ?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script> 
     CKEDITOR.replace( 'editor1', {
       format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',
        height: '190',
    });
  </script>
<?php require 'includes/footer_end.php' ?>

