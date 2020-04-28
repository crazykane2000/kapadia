<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<!-- Responsive Table css -->
        <link href="assets\plugins\RWD-Table-Patterns/css/rwd-table.min.css" rel="stylesheet" type="text/css" />
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
                        <h4 class="page-title">View Contact Data</h4>
                        <ol class="breadcrumb p-0">
                           
                            <li>
                                <a href="#"><?php echo $pdo_auth['name']; ?></a>
                            </li>
                            <li class="active">
                               View Contact Data
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
                       <h3 style="color: #333;text-align:left;font-size: 20px">Contact Data </h3>
                       <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                         <table  style="color: #333;" class="table table-striped table-hover" id="datatable-buttons">
                          <thead>
                             <tr>
                               <th>S.No</th>
                               <th>Name</th>                               
                                <th>Email</th>
                                <th>Phone</th>
                               <th>Remark </th>
                               <th>Date </th>
                               <th>Action</th>                              
                             </tr>
                          </thead>
                          <tbody>
                          <?php 
                          try {
                                $stmt = $pdo->prepare('SELECT * FROM `contact_data`   ORDER BY date DESC');
                            } catch(PDOException $ex) {
                                echo "An Error occured!"; 
                                print_r($ex->getMessage());
                            }
                            $stmt->execute();
                            $user = $stmt->fetchAll();   
                            $i=1; 
                            foreach($user as $key=>$value){                                 
                              echo '<tr>
                                    <td>'.$i.'</td>
                                    <td><b>'.ucfirst($value['name']).'</b></td>
                                    <td><label class="label label-success">'.$value['email'].'</label></td>
                                    <td><label class="label label-primary">'.$value['mobile'].'</label><br/>  </td>
                                    <td>'.substr(strip_tags(htmlspecialchars_decode($value['query'])), 0,100).'</td> 
                                    <td>'.$value['date'].'</td>      
                                    <th><a href="delete_contact.php?id='.$value['id'].'" onclick="return confirm(\' Are You Sure You need to Delete this? \');"><button class="btn btn-danger btn-sm">Delete</button></a>  </th>                        
                                </tr>';
                                $i++;
                            }           
                          ?>                    
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>`
                    </div>
                </div><!-- end col-->

                
            </div>
           

        </div> 
    </div>
</div>
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
<!-- Page specific js -->
<script src="assets/pages/jquery.dashboard.js"></script>    
 <!-- Responsive Table js -->
        <script src="assets\plugins\RWD-Table-Patterns\js/rwd-table.min.js"></script>

       <script type="text/javascript">
         $(function(){$(".table-responsive").responsiveTable({addDisplayAllBtn:"btn btn-primary"})});
       </script>
<?php require 'includes/footer_end.php' ?>
