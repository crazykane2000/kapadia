<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
   <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<?php require 'includes/header_end.php'; ?>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">View Property</h4>
                        <ol class="breadcrumb p-0">
                           
                            <li>
                                <a href="#"><?php echo $pdo_auth['name']; ?></a>
                            </li>
                            <li class="active">
                               View Property
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
                       <h3 style="color: #333;text-align:left;font-size: 20px">Property </h3>
                         <div class="table-responsive">
                           <table  style="color: #333;"  id="datatable-buttons" class="table table-striped table-hover">
                          <thead>
                             <tr>
                                <th>Thumb</th>
                               <th>Property</th>
                               <th>For</th>
                               <th>Area</th>
                               <th>Price</th>
                               <th>BHK</th>
                               <th>Status</th>
                               <th>Date</th>
                               <th>Actions</th>
                             </tr>
                          </thead>
                          <tbody>
                            <?php 
                            try {
                                  $stmt = $pdo->prepare('SELECT * FROM `property`   ORDER BY date DESC');
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();   
                              $i=1; 
                              foreach($user as $key=>$value){
                                  $statys = '<label class="label label-danger">Sold</label>';
                                  if($value['status']=="Available"){
                                  $statys = '<label class="label label-success">Active</label>';
                                  }elseif($value['status']=="Under Offer"){
                                    $statys = '<label class="label label-warning">Under Offer</label>';
                                  }


                                   $polo = '<label class="label label-danger">Apartment</label>';
                                  if($value['category']=="Commercial"){
                                  $polo = '<label class="label label-success">Commercial</label>';
                                  }elseif($value['category']=="Individual"){
                                    $polo = '<label class="label label-warning">Individual</label>';
                                  }

                                  $logos = '<label class="label label-danger">Rent</label>';
                                  if($value['for_type']=="Buy"){
                                  $logos = '<label class="label label-success">Buy</label>';
                                  }elseif($value['for_type']=="Sell"){
                                    $logos = '<label class="label label-warning">Sell</label>';
                                  }
                                  elseif($value['for_type']=="Lease"){
                                    $logos = '<label class="label label-primary">Lease</label>';
                                  }
                                 
                                echo '<tr>
                                    <td><img src="property/small_thumb/'.$value['thumbnail'].'" style="width:50px"/></td>
                                    <td><b>'.$value['title'].'</b><br/><span>'.substr(strip_tags($value['description']), 0,50).'</span><br/>'.$polo.' <label class="label label-warning">'.$value['location'].'</label></td>
                                    <td>'.$logos.'</td>
                                    <td><button class="btn btn-sm btn-success">'.$value['carpet_area'].' / '.$value['total_area'].' Sq Unit</button></td>
                                    <td><b> AUD.'.$value['property_price'].'</b></td>
                                    <td>'.$value['bhk'].'</td>
                                    <td>'.$statys.'</td>      
                                    <td>'.$value['date'].'</td>      
                                    <th>
                                    <a href="delete_property.php?id='.$value['id'].'" onclick="return confirm(\' Are You Sure You need to Delete this?\');"><button class="btn btn-danger btn-sm">Delete</button></a> 
                                    <a href="update_property.php?id='.$value['id'].'"><button class="btn btn-info btn-sm">Update</button></a> 
                                    <a href="view_property_detail.php?id='.$value['id'].'"><button class="btn btn-warning btn-sm">View</button></a> </th>                        
                                  </tr>';
                                  $i++;
                            }           
                          ?>                    
                        </tbody>
                      </table>
                         </div>
                    </div>
                </div><!-- end col-->

                
            </div>
           

        </div> <!-- container -->

    </div> <!-- content -->


</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<?php require 'includes/footer_start.php' ?>

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