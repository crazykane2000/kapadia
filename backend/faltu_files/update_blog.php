<?php require 'includes/header_start.php'; ?>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<?php require 'includes/header_end.php'; ?>
<?php $lata = get_data_id_data("blog", "id", $_REQUEST['id']); //print_r($lata); ?>

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
                        <h4 class="page-title">Update Blog </h4>
                        <ol class="breadcrumb p-0">                           
                            <li><a href="#"><?php echo $pdo_auth['name'];?></a></li>
                            <li class="active"> Update Blog  </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">     
                <div class="col-xl-11 col-xs-12">
                    <form action="update_blog_handle.php" method="POST" enctype="multipart/form-data" >
                      <div class="card-box items">
                        <div style="padding-bottom: 5px;"></div>
                        <h2 style="font-size: 16px;">Update Blog </h2> <hr/>
                        <div style="padding:10px">
                          <label>Select Blog Category</label>
                          <select name="blog_category" class="form-control" required="">
                            <option ><?php echo $lata['category']; ?></option>
                            <option value="">Select Blog Category</option>
                            <?php 
                            try {
                                  $stmt = $pdo->prepare('SELECT * FROM `blog_category` ORDER BY date DESC');
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll(); 
                              foreach($user as $key=>$value){                                 
                                echo '<option>'.$value['category'].'</option>';                                 
                            }           
                          ?>         
                          </select>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">

                        <div style="padding:10px">
                          <label>Enter Blog  Title</label>
                          <input type="text" name="blog_title" value="<?php echo $lata['title']; ?>" placeholder="Blog Title" class="form-control">
                        </div>

                        <div style="padding:10px">
                          <label>Enter Description</label>
                          <textarea  id="editor1" name="blog_desc" placeholder="Blog Description Here" class="form-control"><?php echo $lata['desc']; ?></textarea>
                        </div>

                        <div style="padding:10px">
                          <label>Enter Blog  Tags</label>
                          <input type="text" name="blog_tags" value="<?php echo $lata['tags']; ?>" placeholder="Blog Tags" class="form-control">
                        </div>

                        

                        <div style="padding:10px;"><input type="submit" value="Update Blog Here " class="btn btn-success" /></div>
                     </div>
                    </form>
                </div><!-- end col-->
            </div>
           

        </div> 
    </div>
</div>
<?php require 'includes/footer_start.php' ?>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
