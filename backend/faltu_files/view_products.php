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
           

            <?php  see_status2($_REQUEST); ?>
            <div class="row">               

              


                <div class="col-xl-12 col-xs-12">
                    <div class="card-box items">
                      <div style="padding: 10px;"></div>
                       <h3 style="color: #333;text-align:left;font-size: 20px">Products </h3>
                         <table  style="color: #333;" class="table table-striped table-hover">
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
<?php require 'includes/footer_end.php' ?>
