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
                        <h4 class="page-title">View Property Enquiry Data</h4>
                        <ol class="breadcrumb p-0">
                           
                            <li>
                              <a href="#"><?php echo $pdo_auth['name']; ?></a>
                            </li>
                            <li class="active">
                               View Enquiry
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
                       <h3 style="color: #333;text-align:left;font-size: 20px">Property Enquiry Data </h3>
                       <br/>
                         <table  style="color: #333;" class="table table-striped table-hover">
                          <thead>
                             <tr>
                               <th>S.No</th>
                               <th>Name</th>
                               <th>Funding</th>
                               <th>State / City </th>
                               <th>Remarks</th>
                               <th>Property </th>
                               <th>Date </th>
                               <th>Action</th>                              
                             </tr>
                          </thead>
                          <tbody>
                          <?php 
                          try {
                                $stmt = $pdo->prepare('SELECT * FROM `enquire` ORDER BY date DESC');
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
                                    <td>'.$value['fname']." ".$value['lname'].'<br/><label class="label label-success">'.$value['email'].'</label><br/><label class="label label-primary">'.$value['phone'].'</label> </td>                                    
                                    <td><label class="label label-warning">'.$value['funding'].' / '.$value['profession'].'</label> </td>
                                    <td style="font-weight:bold">'.$value['state'].'/'.$value['city'].'</td>
                                    <td title="'.$value['remarks'].'">'.substr(strip_tags(htmlspecialchars_decode($value['remarks'])), 0,20).'</td> 
                                     <td><a target="_blank" href="../property_desc.php?a1270eec738355a8a3d49af8265e492a='.base64_encode($value['property_id']).'"><label class="label label-primary">'.$value['property'].'</label></a> </td>
                                    <td>'.$value['date'].'</td>      
                                    <th><a href="delete_enquiry.php?id='.$value['id'].'" onclick="return confirm(\' Are You Sure You need to Delete this? \');"><button class="btn btn-danger btn-sm">Delete</button></a>  </th>                        
                                </tr>';
                                $i++;
                            }           
                          ?>                    
                        </tbody>
                      </table>
                    </div>
                </div><!-- end col-->

                
            </div>
           

        </div> 
    </div>
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
<!-- Page specific js -->
<script src="assets/pages/jquery.dashboard.js"></script>    
<?php require 'includes/footer_end.php' ?>
