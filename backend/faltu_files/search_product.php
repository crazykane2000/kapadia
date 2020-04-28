<?php require 'includes/header_start.php'; ?>

    <!-- DataTables -->
    <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

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
                        <h4 class="page-title">View Products</h4>
                        <ol class="breadcrumb p-0">
                           
                            <li>
                                <a href="#">Swikriti</a>
                            </li>
                            <li class="active">
                               View Products
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

              

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Search Products</b></h4>
                            <p class="text-muted font-13 m-b-30">
                                You can also Export all the reports from here
                            </p>

                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0"  width="100%">
                               <thead>
                                 <tr>
                                   <th>SKU</th>
                                   <th>Thumb</th>
                                   <th>Category</th>
                                   <th>Price</th>
                                   <th>Products</th>
                                   <th>Status</th>
                                   <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                <?php 
                                try {
                                      $stmt = $pdo->prepare('SELECT * FROM `products`   ORDER BY date DESC');
                                  } catch(PDOException $ex) {
                                      echo "An Error occured!"; 
                                      print_r($ex->getMessage());
                                  }
                                  $stmt->execute();
                                  $user = $stmt->fetchAll();   
                                  $i=1; 
                                  foreach($user as $key=>$value){
                                      $statys = '<label class="label label-danger">In Stock</label>';
                                      if($value['status']!="Available"){
                                      $statys = '<label class="label label-success">out of Stock</label>';
                                    }

                                    echo '<tr>
                                        <td><label class="label label-primary">'.$value['sku'].'</label></td>
                                        <td><img src="../products/small_thumb/'.$value['thumbnail'].'" style="width:50px"/></td>
                                        <td><b>'.$value['product_title'].'</b><br/><span>'.substr($value['description'], 0,50).'</span> </td>
                                        <td><button class="btn btn-sm btn-success">'.$value['category'].'</button></td>
                                        <td><b> Rs.'.$value['price'].'</b></td>
                                        <td>'.$statys.'</td>      
                                        <th><a href="delete_product.php?id='.$value['id'].'"><button class="btn btn-danger btn-sm">Delete</button></a> <a href="update_product.php?id='.$value['id'].'"><button class="btn btn-info btn-sm">Update</button></a> </th>                        
                                      </tr>';
                                      $i++;
                                }           
                              ?>                    
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

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