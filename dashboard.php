<?php
include('includes/header.php');
include('includes/side-bar.php');

?>
<?php
	$server = "localhost";
    $username = "root";
    $pass = "";
    $db ="sbsrdb";

    $conn =mysqli_connect($server,$username,$pass,$db) or die("error in connecting");

     
	$sqlCount = "SELECT COUNT(*) As num FROM `voters` WHERE `PROVINCE` = 'sindh'";
    $resultCount = mysqli_query($conn,$sqlCount);
    $row = mysqli_fetch_assoc($resultCount);    
    $sindhVoterCount = $row['num'];
	
	$sqlCount = "SELECT COUNT(*) As num FROM `voters` WHERE `PROVINCE` = 'BALOCHISTAN'";
    $resultCount = mysqli_query($conn,$sqlCount);
    $row = mysqli_fetch_assoc($resultCount);    
    $balochistanVoterCount = $row['num'];
	
	$sqlCount = "SELECT COUNT(*) As num FROM `voters` WHERE `PROVINCE` = 'PUNJAB'";
    $resultCount = mysqli_query($conn,$sqlCount);
    $row = mysqli_fetch_assoc($resultCount);    
    $punjabVoterCount = $row['num'];
	
	$sqlCount = "SELECT COUNT(*) As num FROM `voters` WHERE `PROVINCE` = 'KPK'";
    $resultCount = mysqli_query($conn,$sqlCount);
    $row = mysqli_fetch_assoc($resultCount);    
    $kpkVoterCount = $row['num'];
	
	$sqlCount = "SELECT COUNT(*) As num FROM `voters` WHERE `PROVINCE` = 'ISLAMABAD'";
    $resultCount = mysqli_query($conn,$sqlCount);
    $row = mysqli_fetch_assoc($resultCount);    
    $islamabadVoterCount = $row['num'];
	
	$sqlCount = "SELECT COUNT(*) As num FROM `voters` WHERE `PROVINCE` = 'FATA'";
    $resultCount = mysqli_query($conn,$sqlCount);
    $row = mysqli_fetch_assoc($resultCount);    
    $fataVoterCount = $row['num'];
	
	$sqlCount = "SELECT COUNT(*) As num FROM `voters` WHERE `PROVINCE` = 'GILGIT BALTISTAN'";
    $resultCount = mysqli_query($conn,$sqlCount);
    $row = mysqli_fetch_assoc($resultCount);    
    $gilgitBaltistanVoterCount = $row['num'];
	

 ?>

<script type='text/javascript' src='http://www.google.com/jsapi'></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <!-- Page Content -->
<link rel="stylesheet" type="text/css" href="css/gauge.css">

   <div class="row">
          <div class="col-lg-12">
            <div class="card mb-3">
              <div class="card-header">
               <i class="fas fa-chart-pie"></i> Province Votes Result</div>
              <div class="card-body">
                  <div class="container table-responsive">
                     <div id='visualization'></div>
                  </div>
<br>
<div class="container row">
        
    <div class="">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header" style="text-align: center;">SINDH</div>
              <div class="card-body">
                <div id="gaugeSindh"><span class="count"><?php echo $sindhVoterCount ?></span></div>
              </div>
            </div>
          </div>
        </div>
             
     <div class="">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header" style="text-align: center;">BALOCHISTAN</div>
              <div class="card-body">
                <div id="gaugeBalochistan"><span class="count"><?php echo $balochistanVoterCount ?></span></div>
              </div>
            </div>
          </div>
        </div>

   <div class="">
          <div class="col-sm-12"> 
            <div class="card mb-3">
              <div class="card-header" style="text-align: center;">PUNJAB</div>
              <div class="card-body">
                <div id="gaugePunjab"><span class="count"><?php echo $punjabVoterCount ?></span></div>
              </div>
            </div>
          </div>
        </div>
           
     <div class="">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header" style="text-align: center;">KPK</div>
              <div class="card-body">
                <div id="gaugeKpk"><span class="count"><?php echo $kpkVoterCount ?></span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header" style="text-align: center;">ISLAMABAD</div>
              <div class="card-body">
                <div id="gaugeIsl"><span class="count"><?php echo $islamabadVoterCount ?></span></div>
              </div>
            </div>
          </div>
        </div>

     <div class="">
          <div class="col-sm-12">
            <div class="card mb-3">
              <div class="card-header" style="text-align: center;">FATA</div>
              <div class="card-body">
                <div id="gaugeFata"><span class="count"><?php echo $fataVoterCount ?></span></div>
              </div>
            </div>
          </div>
        </div>

   <div class="">
          <div class="col-sm-12"> 
            <div class="card mb-3">
              <div class="card-header" style="text-align: center;">GILGIT BALTISTAN</div>
              <div class="card-body">
                <div id="gaugeGilgit"><span class="count"><?php echo $gilgitBaltistanVoterCount ?></span></div>
              </div>
            </div>
          </div>
        </div>
     
</div>
  
</div>
</div>

</div>
</div>


   <div class="row">
          <div class="col-lg-12">
            <div class="card mb-3">
              <div class="card-header">
               <i class="fas fa-globe-asia"></i> Country Total Population</div>
              <div class="card-body">

              	<div class="container table-responsive">

              	<div id="regions_div"></div>
              </div>
              </div>
          </div>
      </div>
  </div>



<!-- /.container-fluid -->


	<!-- gauge Plugins JavaScript-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   	    <script src="js/gauge.js"></script>
   	    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
   	    <script src="js/geomap.js"></script>

      

<?php
include('includes/footer.php');
?>