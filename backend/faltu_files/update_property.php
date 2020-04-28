<?php require 'includes/header_start.php'; ?>
<?php $lata = get_data_id_data("property", "id", $_REQUEST['id']);// print_r($lata); ?>

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
                        <h4 class="page-title">Update Property</h4>
                        <div class="clearfix" style="padding:10px;"></div>
                    </div>
                </div>
            </div>

            <?php  see_status2($_REQUEST); ?>
            <form action="update_property_handle.php" method="POST" enctype="multipart/form-data">
              <div class="row">               

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">
                       
                       <div class="form-group">
                         <label>Please Enter Property Title</label>
                         <input type="text" class="form-control" required name="property_title" value="<?php echo $lata['title']; ?>" placeholder="Please Enter Title Here" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Property Address</label>
                         <input type="text" class="form-control"  required name="property_address" value="<?php echo $lata['address']; ?>" placeholder="Please Enter Property SKU Here" style="padding: 10px;">
                       </div>


                       <div class="form-group">
                         <label>Property Available for</label>
                         <select class="form-control" style="padding: 10px;" name="property_avilable_for">
                          <option><?php echo $lata['for_type']; ?></option>
                           <option>Buy</option>
                           <option value="Sell">Sale</option>
                           <option>Rent</option>
                           <option>Lease</option>
                         </select>
                       </div>

                       <input type="hidden" name="id" value="<?php echo $lata['id']; ?>">
                       <div class="form-group">
                         <label>Please Select Category</label>
                         <select class="form-control" style="padding: 10px;" name="property_category">
                          <option><?php echo $lata['category']; ?></option>
                          <?php $cata = fetch_all_popo("property_category");// print_r($cata);
                              foreach ($cata as $key => $value) {
                                echo '<option>'.$value['category'].'</option>';
                              }
                           ?>
                         </select>
                       </div>

                       <div class="form-group">
                         <label>Please Enter Description</label>
                         <textarea class="form-control" required id="editor1"  name="property_desc" placeholder="Enter Description Here" style="padding: 10px;"><?php echo $lata['description']; ?></textarea>
                       </div>

                        <div class="form-group">
                         <label>Neighbourhood</label>
                         <input type="text" class="form-control" value="<?php echo $lata['neighbourhood']; ?>" required name="neighbourhood" placeholder="Please Enter about Neighbourhood" style="padding: 10px;">
                          <div style="padding: 30px;"></div>
                       </div>


                   </div>
                </div><!-- end col-->  

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">

                       <div class="form-group">
                         <label>Property Video (If any)</label>
                         <input type="text" class="form-control" required name="property_video" value="<?php echo $lata['property_video'];  ?>" placeholder="Please Enter Youtube id Here" style="padding: 10px;">
                       </div>


                      <div class="form-group">
                         <label>Select Status</label>
                         <select class="form-control" style="padding: 10px;" name="status">
                          <option><?php echo $lata['status']; ?></option>
                           <option value="">Select Availability Status</option>
                           <option>Available</option>
                           <option>Sold</option>  
                           <option>Under Offer</option>                         
                         </select>
                       </div>

                      <div class="form-group">
                         <label>Property Price</label>
                         <input type="text" class="form-control" value="<?php echo $lata['property_price']; ?>" required name="property_price" placeholder="Please Enter Property Price Here, 12.00" style="padding: 10px;">
                       </div>

                        <div class="form-group">
                         <label>Total BHK</label>
                         <select class="form-control" style="padding: 10px;" name="bhks">
                          <option><?php echo $lata['bhk']; ?></option>
                           <option value="">Select BHKS </option>
                           <option>1 BHK</option>
                           <option>2 BHK</option>                           
                           <option>3 BHK</option>                           
                           <option>4 BHK</option>                           
                           <option>5 BHK</option>                           
                           <option>6 BHK</option>                           
                           <option>7 BHK</option>                           
                           <option>8 BHK</option>                           
                           <option>9 BHK</option>                           
                           <option>10 BHK</option>                           
                           <option>11 BHK</option>                           
                         </select>
                       </div>

                       <div class="form-group">
                         <label>No. of Balcony</label>
                         <input type="text" class="form-control" value="<?php echo $lata['balcony']; ?>"  required name="balcony" placeholder="Please Enter No of Balcony" style="padding: 10px;">
                       </div>

                        <div class="form-group">
                         <label>kitchen Available?</label> <select class="form-control" style="padding: 10px;" name="kitchen">
                            <option><?php echo $lata['kitchen']; ?></option>
                             <option>Yes</option>                           
                             <option>No</option>    
                         </select>
                       </div>

                         <div class="form-group">
                         <label>Property Location</label> 
                             <select class="form-control" name="location">
                              <option><?php echo $lata['location']; ?></option>
                              <option>Abbotsbury</option>
                              <option>Acacia Gardens</option>
                              <option>Agnes Banks</option>
                              <option>Airds</option>
                              <option>Ambarvale</option>
                              <option>Annangrove</option>
                              <option>Appin</option>
                              <option>Arndell Park</option>
                              <option>Ashbury</option>
                              <option>Ashcroft</option>
                              <option>Auburn</option>
                              <option>Austral</option>
                              <option>Badgerys Creek</option>
                              <option>Bankstown</option>
                              <option>Bardia</option>
                              <option>Bargo</option>
                              <option>Bass Hill</option>
                              <option>Baulkham Hills</option>
                              <option>Beaumont Hills</option>
                              <option>Beecroft</option>
                              <option>Belfield</option>
                              <option>Belimbla Park</option>
                              <option>Bell</option>
                              <option>Bella Vista</option>
                              <option>Belmore</option>
                              <option>Berala</option>
                              <option>Berambing</option>
                              <option>Berkshire Park</option>
                              <option>Beverly Hills</option>
                              <option>Bickley Vale</option>
                              <option>Bidwill</option>
                              <option>Bilpin</option>
                              <option>Bingara Gorge</option>
                              <option>Birrong</option>
                              <option>Blackett</option>
                              <option>Blackheath</option>
                              <option>Blacktown</option>
                              <option>Blair Athol</option>
                              <option>Blairmount</option>
                              <option>Blaxland</option>
                              <option>Blaxlands Ridge</option>
                              <option>Bligh Park</option>
                              <option>Blue Mountains</option>
                              <option>Bonnyrigg</option>
                              <option>Bonnyrigg Heights</option>
                              <option>Bossley Park</option>
                              <option>Bow Bowing</option>
                              <option>Bowen Mountain</option>
                              <option>Box Hill</option>
                              <option>Bradbury</option>
                              <option>Bringelly</option>
                              <option>Brownlow Hill</option>
                              <option>Bucketty</option>
                              <option>Bullaburra</option>
                              <option>Bungarribee</option>
                              <option>Busby</option>
                              <option>Buxton</option>
                              <option>Cabramatta</option>
                              <option>Cabramatta West</option>
                              <option>Caddens</option>
                              <option>Cambridge Gardens</option>
                              <option>Cambridge Park</option>
                              <option>Camden</option>
                              <option>Camden Park</option>
                              <option>Camden South</option>
                              <option>Camellia</option>
                              <option>Campbelltown</option>
                              <option>Campsie</option>
                              <option>Canley Heights</option>
                              <option>Canley Vale</option>
                              <option>Canterbury</option>
                              <option>Canterbury-Bankstown</option>
                              <option>Carlingford</option>
                              <option>Carnes Hill</option>
                              <option>Carramar</option>
                              <option>Cartwright</option>
                              <option>Castle Hill</option>
                              <option>Castlereagh</option>
                              <option>Casula</option>
                              <option>Catherine Field</option>
                              <option>Cattai</option>
                              <option>Cawdor</option>
                              <option>Cecil Hills</option>
                              <option>Cecil Park</option>
                              <option>Central Colo</option>
                              <option>Central Macdonald</option>
                              <option>Cherrybrook</option>
                              <option>Chester Hill</option>
                              <option>Chipping Norton</option>
                              <option>Chullora</option>
                              <option>Claremont Meadows</option>
                              <option>Clarendon</option>
                              <option>Claymore</option>
                              <option>Clemton Park</option>
                              <option>Clyde</option>
                              <option>Cobbitty</option>
                              <option>Colebee</option>
                              <option>Colo</option>
                              <option>Colo Heights</option>
                              <option>Colyton</option>
                              <option>Condell Park</option>
                              <option>Constitution Hill</option>
                              <option>Cornwallis</option>
                              <option>Couridjah</option>
                              <option>Cranebrook</option>
                              <option>Croydon Park</option>
                              <option>Cumberland</option>
                              <option>Cumberland Reach</option>
                              <option>Currans Hill</option>
                              <option>Dean Park</option>
                              <option>Denham Court</option>
                              <option>Dharruk</option>
                              <option>Doonside</option>
                              <option>Douglas Park</option>
                              <option>Dundas</option>
                              <option>Dundas Valley</option>
                              <option>Dural</option>
                              <option>Eagle Vale</option>
                              <option>Earlwood</option>
                              <option>East Hills</option>
                              <option>East Kurrajong</option>
                              <option>Eastern Creek</option>
                              <option>Eastwood</option>
                              <option>Ebenezer</option>
                              <option>Edensor Park</option>
                              <option>Edmondson Park</option>
                              <option>Edmondson Park (South)</option>
                              <option>Edmonson Park</option>
                              <option>Elderslie</option>
                              <option>Ellis Lane</option>
                              <option>Emerton</option>
                              <option>Emu Heights</option>
                              <option>Emu Plains</option>
                              <option>Englorie Park</option>
                              <option>Epping</option>
                              <option>Ermington</option>
                              <option>Erskine Park</option>
                              <option>Eschol Park</option>
                              <option>Fairfield</option>
                              <option>Fairfield East</option>
                              <option>Fairfield Heights</option>
                              <option>Fairfield West</option>
                              <option>Faulconbridge</option>
                              <option>Fernances</option>
                              <option>Freemans Reach</option>
                              <option>Galston</option>
                              <option>Georges Hall</option>
                              <option>Gilead</option>
                              <option>Girraween</option>
                              <option>Gledswood Hills</option>
                              <option>Glen Alpine</option>
                              <option>Glenbrook</option>
                              <option>Glendenning</option>
                              <option>Glenfield</option>
                              <option>Glenhaven</option>
                              <option>Glenmore</option>
                              <option>Glenmore Park</option>
                              <option>Glenorie</option>
                              <option>Glenwood</option>
                              <option>Glossodia</option>
                              <option>Granville</option>
                              <option>Grasmere</option>
                              <option>Green Valley</option>
                              <option>Greenacre</option>
                              <option>Greendale</option>
                              <option>Greenfield Park</option>
                              <option>Gregory Hills</option>
                              <option>Greystanes</option>
                              <option>Grose Vale</option>
                              <option>Grose Wold</option>
                              <option>Guildford</option>
                              <option>Guildford West</option>
                              <option>Hammondville</option>
                              <option>Harrington Park</option>
                              <option>Harris Park</option>
                              <option>Hassall Grove</option>
                              <option>Hawkesbury</option>
                              <option>Hawkesbury Heights</option>
                              <option>Hazelbrook</option>
                              <option>Hebersham</option>
                              <option>Heckenberg</option>
                              <option>Higher Macdonald</option>
                              <option>Hinchinbrook</option>
                              <option>Hobartville</option>
                              <option>Holroyd</option>
                              <option>Holsworthy</option>
                              <option>Homebush West</option>
                              <option>Horningsea Park</option>
                              <option>Horsley Park</option>
                              <option>Hoxton Park</option>
                              <option>Huntingwood</option>
                              <option>Hurlstone Park</option>
                              <option>Ingleburn</option>
                              <option>Jamisontown</option>
                              <option>Jordan Springs</option>
                              <option>Katoomba</option>
                              <option>Kearns</option>
                              <option>Kellyville</option>
                              <option>Kellyville Ridge</option>
                              <option>Kemps Creek</option>
                              <option>Kenthurst</option>
                              <option>Kentlyn</option>
                              <option>Kings Langley</option>
                              <option>Kings Park</option>
                              <option>Kingsgrove</option>
                              <option>Kingswood</option>
                              <option>Kingswood Park</option>
                              <option>Kirkham</option>
                              <option>Kurmond</option>
                              <option>Kurrajong</option>
                              <option>Kurrajong Heights</option>
                              <option>Kurrajong Hills</option>
                              <option>Lakemba</option>
                              <option>Lakesland</option>
                              <option>Lalor Park</option>
                              <option>Lansdowne</option>
                              <option>Lansvale</option>
                              <option>Lapstone</option>
                              <option>Lawson</option>
                              <option>Leets Vale</option>
                              <option>Leightonfield</option>
                              <option>Leonay</option>
                              <option>Leppington</option>
                              <option>Lethbridge Park</option>
                              <option>Leumeah</option>
                              <option>Leura</option>
                              <option>Lidcombe</option>
                              <option>Linden</option>
                              <option>Liverpool</option>
                              <option>Llandilo</option>
                              <option>Londonderry</option>
                              <option>Long Point</option>
                              <option>Lower Macdonald</option>
                              <option>Lower Portland</option>
                              <option>Luddenham</option>
                              <option>Lurnea</option>
                              <option>Macarthur Heights</option>
                              <option>Macquarie Fields</option>
                              <option>Macquarie Links</option>
                              <option>Maldon</option>
                              <option>Maraylya</option>
                              <option>Marayong</option>
                              <option>Maroota</option>
                              <option>Marsden Park</option>
                              <option>Mays Hill</option>
                              <option>Mcgraths Hill</option>
                              <option>Medlow Bath</option>
                              <option>Mellong</option>
                              <option>Menangle</option>
                              <option>Menangle Park</option>
                              <option>Merrylands</option>
                              <option>Merrylands West</option>
                              <option>Middle Dural</option>
                              <option>Middleton Grange</option>
                              <option>Miller</option>
                              <option>Milperra</option>
                              <option>Minchinbury</option>
                              <option>Minto</option>
                              <option>Minto Heights</option>
                              <option>Mogo Creek</option>
                              <option>Moorebank</option>
                              <option>Mount Annan</option>
                              <option>Mount Druitt</option>
                              <option>Mount Hunter</option>
                              <option>Mount Irvine</option>
                              <option>Mount Lewis</option>
                              <option>Mount Pritchard</option>
                              <option>Mount Riverview</option>
                              <option>Mount Vernon</option>
                              <option>Mount Victoria</option>
                              <option>Mount Wilson</option>
                              <option>Mountain Lagoon</option>
                              <option>Mowbray Park</option>
                              <option>Mulgoa</option>
                              <option>Mulgrave</option>
                              <option>Narellan</option>
                              <option>Narellan Vale</option>
                              <option>Narwee</option>
                              <option>Nelson</option>
                              <option>Newington</option>
                              <option>North Kellyville</option>
                              <option>North Parramatta</option>
                              <option>North Richmond</option>
                              <option>North Rocks</option>
                              <option>North St Marys</option>
                              <option>Northmead</option>
                              <option>Norwest</option>
                              <option>Oakdale</option>
                              <option>Oakhurst</option>
                              <option>Oakville</option>
                              <option>Oatlands</option>
                              <option>Old Guildford</option>
                              <option>Old Toongabbie</option>
                              <option>Oran Park</option>
                              <option>Orangeville</option>
                              <option>Orchard Hills</option>
                              <option>Oxley Park</option>
                              <option>Padstow</option>
                              <option>Padstow Heights</option>
                              <option>Panania</option>
                              <option>Parklea</option>
                              <option>Parramatta</option>
                              <option>Pemulwuy</option>
                              <option>Pendle Hill</option>
                              <option>Penrith</option>
                              <option>Perrys Crossing</option>
                              <option>Pheasants Nest</option>
                              <option>Picnic Point</option>
                              <option>Picton</option>
                              <option>Pitt Town</option>
                              <option>Pitt Town Bottoms</option>
                              <option>Pleasure Point</option>
                              <option>Plumpton</option>
                              <option>Potts Hill</option>
                              <option>Prairiewood</option>
                              <option>Prestons</option>
                              <option>Prospect</option>
                              <option>Punchbowl</option>
                              <option>Putty</option>
                              <option>Quakers Hill</option>
                              <option>Raby</option>
                              <option>Razorback</option>
                              <option>Regents Park</option>
                              <option>Regentville</option>
                              <option>Revesby</option>
                              <option>Revesby Heights</option>
                              <option>Richmond</option>
                              <option>Richmond Lowlands</option>
                              <option>Riverstone</option>
                              <option>Riverwood</option>
                              <option>Rookwood</option>
                              <option>Rooty Hill</option>
                              <option>Ropes Crossing</option>
                              <option>Rosehill</option>
                              <option>Roselands</option>
                              <option>Rosemeadow</option>
                              <option>Rossmore</option>
                              <option>Rouse Hill</option>
                              <option>Ruse</option>
                              <option>Rydalmere</option>
                              <option>Sackville</option>
                              <option>Sackville North</option>
                              <option>Sadleir</option>
                              <option>Scheyville</option>
                              <option>Schofields</option>
                              <option>Sefton</option>
                              <option>Seven Hills</option>
                              <option>Shalvey</option>
                              <option>Shanes Park</option>
                              <option>Silverdale</option>
                              <option>Silverwater</option>
                              <option>Smeaton Grange</option>
                              <option>Smithfield</option>
                              <option>South Granville</option>
                              <option>South Maroota</option>
                              <option>South Penrith</option>
                              <option>South Wentworthville</option>
                              <option>South Windsor</option>
                              <option>Spring Farm</option>
                              <option>Springwood</option>
                              <option>St Albans</option>
                              <option>St Andrews</option>
                              <option>St Clair</option>
                              <option>St Helens Park</option>
                              <option>St Johns Park</option>
                              <option>St Marys</option>
                              <option>Stanhope Gardens</option>
                              <option>Sun Valley</option>
                              <option>Sydney Olympic Park</option>
                              <option>Tahmoor</option>
                              <option>Telopea</option>
                              <option>Ten Mile Hollow</option>
                              <option>Tennyson</option>
                              <option>The Devils Wilderness</option>
                              <option>The Oaks</option>
                              <option>The Ponds</option>
                              <option>The Slopes</option>
                              <option>Theresa Park</option>
                              <option>Thirlmere</option>
                              <option>Toongabbie</option>
                              <option>Tregear</option>
                              <option>Upper Colo</option>
                              <option>Upper Macdonald</option>
                              <option>Valley Heights</option>
                              <option>Varroville</option>
                              <option>Villawood</option>
                              <option>Vineyard</option>
                              <option>Voyager Point</option>
                              <option>Wakeley</option>
                              <option>Wallacia</option>
                              <option>Warragamba</option>
                              <option>Warrimoo</option>
                              <option>Warwick Farm</option>
                              <option>Wattle Grove</option>
                              <option>Webbs Creek</option>
                              <option>Wedderburn</option>
                              <option>Wentworth Falls</option>
                              <option>Wentworth Point</option>
                              <option>Wentworthville</option>
                              <option>Werombi</option>
                              <option>Werrington</option>
                              <option>Werrington County</option>
                              <option>Werrington Downs</option>
                              <option>West Hoxton</option>
                              <option>West Pennant Hills</option>
                              <option>Westmead</option>
                              <option>Wetherill Park</option>
                              <option>Whalan</option>
                              <option>Wheeny Creek</option>
                              <option>Wilberforce</option>
                              <option>Wiley Park</option>
                              <option>Willmot</option>
                              <option>Wilton</option>
                              <option>Windsor</option>
                              <option>Windsor Downs</option>
                              <option>Winmalee</option>
                              <option>Winston Hills</option>
                              <option>Wisemans Ferry</option>
                              <option>Wollondilly</option>
                              <option>Womerah</option>
                              <option>Woodbine</option>
                              <option>Woodcroft</option>
                              <option>Woodford</option>
                              <option>Woodpark</option>
                              <option>Wrights Creek</option>
                              <option>Yagoona</option>
                              <option>Yanderra</option>
                              <option>Yarramundi</option>
                              <option>Yellow Rock</option>
                              <option>Yennora</option>
                              <option>Yerranderie</option>

                              <option>Blacktown</option>
                              <option>Botany Bay</option>
                              <option>Burwood</option>
                              <option>Camden</option>
                              <option>Campbelltown</option>
                              <option>Canada Bay</option>
                              <option>Canterbury - Bankstown</option>
                              <option>Cumberland</option>
                              <option>Fairfield</option>
                              <option>Hornsby</option>
                              <option>Hunters Hill</option>
                              <option>Ku-ring-gai</option>
                              <option>Lane Cove</option>
                              <option>Liverpool</option>
                              <option>Marrickville</option>
                              <option>Mosman</option>
                              <option>North Sydney</option>
                              <option>Northern Beaches</option>
                              <option>Parramatta</option>
                              <option>Penrith</option>
                              <option>Randwick</option>
                              <option>Rockdale</option>
                              <option>Ryde</option>
                              <option>Strathfield</option>
                              <option>Sutherland</option>
                              <option>Sydney</option>
                              <option>Waverley</option>
                              <option>Willoughby</option>
                              <option>Wollondilly</option>
                              <option>Woollahra</option>
                          </select>
                       </div>


                       <div class="form-group">
                         <label>Available in Which Floor?</label> <select class="form-control" style="padding: 10px;" name="floor">
                          <option><?php echo $lata['floor']; ?></option>
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
                       </div>

                       <div class="form-group">
                         <label>Bathrooms</label>
                         <input type="text" class="form-control" value="<?php echo $lata['kids_play_area']; ?>"  required name="kids_play_area" placeholder="Please Enter No of Bathrooms" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Please Enter Thumbnail Image</label>
                         <input type="file"   class="form-control" name="thumbnail" placeholder="Please Enter Thumbnail" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Enter Property Images <span style="color: orangered">(You can Attach Multiple Images)</span></label>
                         <input type="file"   class="form-control" name="property_images[]" multiple="" placeholder="Please Enter Property Images" style="padding: 10px;">
                       </div>
                      
                       
                   </div>
                </div>

                <?php  $raty = $lata['aminities'];
                        $data = explode(",", $raty);
                        //print_r($data);
                  ?>

                <div class="col-xl-3 col-xs-12">
                    <div class="card-box items">
                       <div class="form-group">
                         <label>Please Enter Floor Plan Image</label>
                         <input type="file"  class="form-control" name="floor_plan" placeholder="Please Enter Floor Plan" style="padding: 10px;">
                       </div>


                      <div class="form-group">
                          <ul class="list-group">
                            <li class="list-group-item">
                                Parking Space
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDefault" name="aminities[]" <?php if(in_array("Parking Space", $data)){echo 'checked';} ?> value="Parking Space" type="checkbox"/>
                                    <label for="someSwitchOptionDefault" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                24x7 Security
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionPrimary" name="aminities[]" value="24x7 Security"  <?php if(in_array("24x7 Security", $data)){echo 'checked';} ?> type="checkbox"/>
                                    <label for="someSwitchOptionPrimary" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Kids Play Area
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionSuccess" name="aminities[]" value="Kids Play Area"  <?php if(in_array("Kids Play Area", $data)){echo 'checked';} ?> type="checkbox"/>
                                    <label for="someSwitchOptionSuccess" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                               Club House
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionInfo" name="aminities[]" value="Club House"  <?php if(in_array("Club House", $data)){echo 'checked';} ?> type="checkbox"/>
                                    <label for="someSwitchOptionInfo" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                               Gymnesium
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionWarning" name="aminities[]" value="Gymnesium"  <?php if(in_array("Gymnesium", $data)){echo 'checked';} ?> type="checkbox"/>
                                    <label for="someSwitchOptionWarning" class="label-success"></label>
                                </div>
                            </li>
                            <li class="list-group-item">
                                Sports Facility
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionDanger" name="aminities[]" value="Sports Facility"  <?php if(in_array("Sports Facility", $data)){echo 'checked';} ?> type="checkbox"/>
                                    <label for="someSwitchOptionDanger" class="label-success"></label>
                                </div>
                            </li>
                        </ul>
                        <br/>

                      <div class="form-group">
                         <label>Booking Amount</label>
                         <input type="text" class="form-control" value="<?php echo $lata['booking_amount']; ?>"  required name="booking_amount" placeholder="Please Enter Property Booking Amount" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Nearest Road</label>
                         <input type="text" class="form-control" value="<?php echo $lata['nearest_road']; ?>" required name="nearest_road" placeholder="Please Enter Nearest Road to Property" style="padding: 10px;">
                       </div>

                       <div class="form-group">
                         <label>Property Facing</label>
                         <input type="text" class="form-control"  required name="facing" value="<?php echo $lata['facing']; ?>" placeholder="Please Enter Direction of Property" style="padding: 10px;">
                       </div>

                        <div class="form-group">
                         <label>Owner</label> <select class="form-control" style="padding: 10px;" name="owner">
                          <option><?php echo $lata['owner']; ?></option>
                           <option>First</option>                           
                           <option>Second</option>                             
                           <option>Third</option>                             
                           <option>Fourth</option>                             
                           <option>Fifth</option>                             
                         </select>
                       </div>

                        <div class="form-group">
                         <label>Total Area</label>
                         <input type="text" class="form-control"  value="<?php echo $lata['total_area']; ?>" required name="total_area" placeholder="Please Enter Total Area" style="padding: 10px;">
                       </div>

                        <div class="form-group">
                         <label>Total Carpet Area</label>
                         <input type="text" class="form-control" value="<?php echo $lata['carpet_area']; ?>"  required name="carpet_area" placeholder="Please Enter Carpet Area" style="padding: 10px;">
                       </div>


                       
                   </div>
                </div><!-- end col-->              
            </div>

             <div class="col-xl-3 col-xs-12" style="height: 1000px">
                    <div class="card-box items">
                        
                        <div class="form-group">
                         <label>Enter Facilities</label>
                         <textarea class="form-control" required id="editor2"  name="facilities" placeholder="Enter Other Facilities" style="padding: 10px;"><?php echo $lata['facilities']; ?></textarea>
                       </div>


                       <div class="form-group">
                         <label>Distances</label>
                         <textarea class="form-control" required id="editor3"  name="distances" placeholder="Enter Distances" style="padding: 10px;"><?php echo $lata['distances']; ?></textarea>
                       </div>

                      
                       <div style="padding: 10px;"></div>
                       <button type="submit" id="oplo" name="update_user" class="btn btn-success btn-lg">Update Property to Listing</button>
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
