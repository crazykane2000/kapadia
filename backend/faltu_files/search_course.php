<?php require 'includes/header_start.php'; ?>
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<?php require 'includes/header_end.php'; ?>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Search Courses Educational</h4>
                        <ol class="breadcrumb p-0">
                           
                            <li>
                                <a href="#">Swikriti</a>
                            </li>
                            <li class="active">
                               Search Courses Educational
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row"> 
                <div class="col-xl-12 col-xs-12">
                    <div class="card-box items">
                      <div style="padding: 10px;"></div>
                       <h3 style="color: #333;text-align:left;font-size: 20px">Search Courses Educational </h3>
                       <div style="padding: 10px"></div>
                         <table id="datatable-buttons"  style="color: #333;" class="table table-striped table-hover">
                          <thead>
                             <tr>
                               <th>S.No.</th>
                               <th>Thumbnail</th>
                               <th>Product Description</th>
                               <th>Categories</th>
                               <th>Date</th>
                               <th>Status</th>
                               <th>Actions</th>
                             </tr>
                          </thead>
                          <tbody>
                            <?php 
                            try {
                                  $stmt = $pdo->prepare('SELECT * FROM `courses` ORDER BY date DESC');
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();   
                              $i=1; 
                              foreach($user as $key=>$value){
                                  $statys = '<label class="label label-danger">Unavailable</label>';
                                  if($value['status']!="Available"){
                                  $statys = '<label class="label label-success">Available</label>';
                                }
                                echo '<tr>
                                        <td>'.$i.'</td>
                                        <td><img src="../courses/thumb/'.$value['file'].'" style="width:50px"/></td>
                                        <td><b>'.$value['course_title'].'</b><br/><span>'.substr($value['description'], 0,50).'</span> </td>
                                        <td><a href="" style="color:#333">'.$value['category'].'</a> > <a href="">'.$value['sub_category'].'</a></td>
                                        <td><b> '.$value['date'].'</b></td>
                                        <td>'.$statys.'</td>      
                                        <th>
                                          <a href="delete_product.php?id='.$value['id'].'"><button class="btn btn-danger btn-sm">Delete</button></a> 
                                          <a href="update_course.php?id='.$value['id'].'"><button class="btn btn-info btn-sm">Update</button></a> 
                                        </th>                        
                                      </tr>';
                                  $i++;
                            }           
                          ?>                    
                        </tbody>
                      </table>
                    </div>
                </div><!-- end col-->

                
            </div>
           

        </div> <!-- container -->

    </div> <!-- content -->


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

<!-- Required datatable js -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });

    </script>

<?php require 'includes/footer_end.php' ?>
