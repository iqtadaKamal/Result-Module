<?php
include('includes/header.php');
include('includes/side-bar.php');

?>
<?php
   
    $dbhandle = new mysqli('localhost','root','','sbsrdb');
    echo $dbhandle->connect_error;

    $query = "SELECT PARTY_NAME,PARTY_VOTES FROM `parties` ";
    $resultpie = $dbhandle -> query($query);
?>


  <?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $db ="sbsrdb";
    $conn =mysqli_connect($server,$username,$pass,$db) or die("error in connecting");
    $sql = "SELECT * FROM `parties`";
    $resultbar = mysqli_query($conn,$sql);
    $i = 0;
    $parties = array();
  $partyArrName = array();
  $partyArrVotes = array();

    while($row = mysqli_fetch_array($resultbar)) {
        $parties[$i]['PARTY_ID'] = $row['PARTY_ID'];
        $parties[$i]['PARTY_NAME'] = $row['PARTY_NAME'];
        $parties[$i]['PARTY_ELECTORIAL_SIGN'] = $row['PARTY_ELECTORIAL_SIGN'];
        $parties[$i]['PARTY_FLAG'] = $row['PARTY_FLAG'];
        $parties[$i++]['PARTY_VOTES'] = $row['PARTY_VOTES'];
    }
        
  foreach($parties as $party) {
    //$partyArrName = $partyArrName.'"'.$party['PARTY_NAME'].'",';
    //$partyArrVotes = $partyArrVotes.'",'.$party['PARTY_VOTES'].'",';
    array_push($partyArrName,$party['PARTY_NAME']);
    array_push($partyArrVotes,intval($party['PARTY_VOTES']));
  } 
?>


 <!-- Page Content -->

     <!--Bar chart and pie chart-->
    <div class="column">
          <div class="col-lg-12">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Bar Chart Result</div>
              <div class="card-body">
                <canvas id="myBarChart" width="600" height="400"></canvas>
              </div>
              
            </div>
          </div>
          
    </div>
    <div class="col-lg-12">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Pie Chart Result</div>
              <div class="card-body">
                <div id="donutchart" style="width: 900px; height: 500px; margin-left: 100px"></div>
              </div>
              
            </div>
          </div>

<!--END Bar chart and pie chart-->    
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
</div>
<!-- /.container-fluid -->


		
<script type="text/javascript">

var partynames = <?php echo json_encode($partyArrName);  ?>;
var partyvotes = <?php echo json_encode($partyArrVotes);  ?> ;

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'horizontalBar',
  data: {
    labels: partynames,
    datasets: [{
      label: "Votes",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: partyvotes,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: true
        },
        ticks: {
          maxTicksLimit: 9
        }
      }],
      yAxes: [{
        ticks: {
          min: 5,
          max: 20000000,
          maxTicksLimit: 15
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: true
    }
  }
});



//end of bar chart


//PIE CHART

 google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['PARTY NAME', 'PARTY VOTES'],
        <?php

        while($row = $resultpie->fetch_assoc())
        {

          echo "['".$row['PARTY_NAME']."',".$row['PARTY_VOTES']."],";

        }

        ?>

        ]);


        var options = {
          title: 'ELECTION RESULTS',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }



//END OF PIE CHART




</script>



<?php
include('includes/footer.php');
?>