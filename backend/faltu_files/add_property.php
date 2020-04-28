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
                        <h4 class="page-title">Add Property</h4>
                        <div class="clearfix" style="padding:10px;"></div>
                    </div>
                </div>
            </div>

            <?php  see_status2($_REQUEST); ?>
            <form action="property_handle.php" method="POST" enctype="multipart/form-data">
              <div class="row">               

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">
                       
                       <div class="form-group">
                         <label>Please Enter Property Title</label>
                         <input type="text" class="form-control" required name="property_title" placeholder="Please Enter Title Here" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Property Address</label>
                         <input type="text" class="form-control"  required name="property_address" placeholder="Please Enter Property SKU Here" style="padding: 10px;">
                       </div>


                       <div class="form-group">
                         <label>Property Available for</label>
                         <select class="form-control" style="padding: 10px;" name="property_avilable_for">
                           <option>Buy</option>
                           <option>Sell</option>
                           <option>Rent</option>
                           <option>Lease</option>
                         </select>
                       </div>


                       <div class="form-group">
                         <label>Please Select Category</label>
                         <select class="form-control" style="padding: 10px;" name="property_category">
                          <?php $cata = fetch_all_popo("property_category");// print_r($cata);
                              foreach ($cata as $key => $value) {
                                echo '<option>'.$value['category'].'</option>';
                              }
                           ?>
                         </select>
                       </div>

                       <div class="form-group">
                         <label>Please Enter Description</label>
                         <textarea class="form-control" required id="editor1"  name="property_desc" placeholder="Enter Description Here" style="padding: 10px;"></textarea>
                       </div>

                        <div class="form-group">
                         <label>Neighbourhood</label>
                         <input type="text" class="form-control"  required name="neighbourhood" placeholder="Please Enter about Neighbourhood" style="padding: 10px;">
                          <div style="padding: 30px;"></div>
                       </div>


                   </div>
                </div><!-- end col-->  

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">

                       <div class="form-group">
                         <label>Property Video (If any)</label>
                         <input type="text" class="form-control"  name="property_video" placeholder="Please Enter Youtube id Here" style="padding: 10px;">
                       </div>


                      <div class="form-group">
                         <label>Select Status</label>
                         <select class="form-control" style="padding: 10px;" name="status">
                           <option value="">Select Availability Status</option>
                           <option>Available</option>
                           <option>Sold</option>  
                           <option>Under Offer</option>                         
                         </select>
                       </div>

                      <div class="form-group">
                         <label>Property Price</label>
                         <input type="text" class="form-control"  required name="property_price" placeholder="Please Enter Property Price Here, 12.00" style="padding: 10px;">
                       </div>

                        <div class="form-group">
                         <label>Rera Registered?</label>
                         <select class="form-control" style="padding: 10px;" name="bhks">
                           <option>Yes</option>
                           <option>No</option>
                           <option>Not Available</option>                    
                         </select>
                       </div>

                       <div class="form-group">
                         <label>Rera Registration Number</label>
                         <input type="text" class="form-control"  required name="balcony" placeholder="Please Enter Rera Registration Number" style="padding: 10px;">
                       </div>

                        <div class="form-group">
                         <label>Plot Sizes (Separate with Commas "," )</label>
                          <input type="text" name="kitchen" class="form-control" placeholder="Enter Plot Sizes">
                       </div>

                        <div class="form-group">
                         <label>Property Location</label> 
                         <input  type="text" placeholder="Enter location" class="form-control" name="location">
                       </div>

                      <!--  <div class="form-group">
                         <label>Available in Which Floor?</label> <select class="form-control" style="padding: 10px;" name="floor">
                           <option>Ground</option>                           
                           <option>2</option>                             
                           <option>3</option>                             
                           <option>4</option>                             
                           <option>5</option>                             
                           <option>6</option>                             
                           <option>7</option>                             
                           <option>8</option>                             
                           <option>9</option>                             
                           <option>10</option>                             
                           <option>11</option>                             
                           <option>12</option>                             
                           <option>13</option>                             
                           <option>14</option>                             
                           <option>15</option>                             
                           <option>16</option>
                           <option>Above 16th Floor</option>                             
                         </select>
                       </div> -->

                      <!--  <div class="form-group">
                         <label>Bathrooms</label>
                         <input type="text" class="form-control"  required name="kids_play_area" placeholder="Please Enter No of Bathrooms" style="padding: 10px;">
                       </div> -->

                       <div class="form-group">
                         <label>Please Enter Thumbnail Image</label>
                         <input type="file" required  class="form-control" name="thumbnail" placeholder="Please Enter Thumbnail" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Enter Property Images <span style="color: orangered">(You can Attach Multiple Images)</span></label>
                         <input type="file" required  class="form-control" name="property_images[]" multiple="" placeholder="Please Enter Property Images" style="padding: 10px;">
                       </div>
                      


                       
                   </div>
                </div>

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">


                      <div class="form-group">
                          <ul class="list-group">
                            <li class="list-group-item">
                                Parking Space
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDefault" name="aminities[]" value="Parking Space" type="checkbox"/>
                                    <label for="someSwitchOptionDefault" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                24x7 Security
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionPrimary" name="aminities[]" value="24x7 Security" type="checkbox"/>
                                    <label for="someSwitchOptionPrimary" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Children Play Area
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionSuccess" name="aminities[]" value="Kids Play Area" type="checkbox"/>
                                    <label for="someSwitchOptionSuccess" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                               Club House
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionInfo" name="aminities[]" value="Club House" type="checkbox"/>
                                    <label for="someSwitchOptionInfo" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                               Gymnesium
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionWarning" name="aminities[]" value="Gymnesium" type="checkbox"/>
                                    <label for="someSwitchOptionWarning" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Sports Facility
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDanger" name="aminities[]" value="Sports Facility" type="checkbox"/>
                                    <label for="someSwitchOptionDanger" class="label-success"></label>
                                </div>
                            </li>
                             <li class="list-group-item">
                                Divine Temple
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDanger32" name="aminities[]" value="Divine Temple" type="checkbox"/>
                                    <label for="someSwitchOptionDanger32" class="label-success"></label>
                                </div>
                            </li>

                             <li class="list-group-item">
                                Street Light
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDanger321" name="aminities[]" value="Street Light" type="checkbox"/>
                                    <label for="someSwitchOptionDanger321" class="label-success"></label>
                                </div>
                            </li>

                             <li class="list-group-item">
                                Gardens
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDanger321s" name="aminities[]" value="Gardens" type="checkbox"/>
                                    <label for="someSwitchOptionDanger321s" class="label-success"></label>
                                </div>
                            </li>



                             <li class="list-group-item">
                                Campus Boundry Wall
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDanger32a" name="aminities[]" value="Campus Boundry Wall" type="checkbox"/>
                                    <label for="someSwitchOptionDanger32a" class="label-success"></label>
                                </div>
                            </li>

                             <li class="list-group-item">
                                Campus Entrance Gate
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDanger32z" name="aminities[]" value="Campus Entrance Gate" type="checkbox"/>
                                    <label for="someSwitchOptionDanger32z" class="label-success"></label>
                                </div>
                            </li>

                        </ul>
                        <br/>

                      <div class="form-group">
                         <label>Booking Amount</label>
                         <input type="text" class="form-control"  required name="booking_amount" placeholder="Please Enter Property Booking Amount" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Nearest Road</label>
                         <input type="text" class="form-control"  required name="nearest_road" placeholder="Please Enter Nearest Road to Property" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Property Facing</label>
                         <input type="text" class="form-control"  required name="facing" placeholder="Please Enter Direction of Property" style="padding: 10px;">
                       </div>

                        <div class="form-group">
                         <label>Owner</label> <select class="form-control" style="padding: 10px;" name="owner">
                           <option>First</option>                           
                           <option>Second</option>                             
                           <option>Third</option>                             
                           <option>Fourth</option>                             
                           <option>Fifth</option>                             
                         </select>
                       </div>

                        <div class="form-group">
                         <label>Total Area</label>
                         <input type="text" class="form-control"  required name="total_area" placeholder="Please Enter Total Area" style="padding: 10px;">
                       </div>

                        <div class="form-group">
                         <label>Total Carpet Area</label>
                         <input type="text" class="form-control"  required name="carpet_area" placeholder="Please Enter Carpet Area" style="padding: 10px;">
                       </div>


                       
                   </div>
                </div><!-- end col-->              
            </div>

             <div class="col-xl-3 col-xs-12" style="height: 1000px">
                    <div class="card-box items">
                        
                     

                       <div class="form-group">
                         <label>Land Marks</label>
                         <textarea class="form-control" required id="editor3"  name="distances" placeholder="Enter Distances" style="padding: 10px;"></textarea>
                       </div>

                      
                       <div style="padding: 10px;"></div>
                       <button type="submit" id="oplo" class="btn btn-success btn-lg">Add Property to Listing</button>
                   </div>
                </div

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
