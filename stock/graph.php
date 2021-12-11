<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>

 <div id="red" style="float: right;  color: white;">
  <?php 
  require 'dbconfig.php';
  $query = "SELECT id FROM new ORDER BY id";
  $query_run = mysqli_query($connection, $query);
  $row = mysqli_num_rows($query_run);
  echo $row;
  ?>
  </div>

 <div id="green" style="float: right;  color: white;">
  <?php 
  require 'dbconfig.php';
  $query = "SELECT id FROM reused ORDER BY id";
  $query_run = mysqli_query($connection, $query);
  $row = mysqli_num_rows($query_run);
  echo $row;
  ?>
  </div>

  <div id="blue" style="float: right;  color: white;">
  <?php 
  require 'dbconfig.php';
  $query = "SELECT id FROM repaired ORDER BY id";
  $query_run = mysqli_query($connection, $query);
  $row = mysqli_num_rows($query_run);
  echo $row;
  ?>
  </div>

  <div id="orange" style="float: right; color: white;">
  <?php 
  require 'dbconfig.php';
  $query = "SELECT id FROM damaged ORDER BY id";
  $query_run = mysqli_query($connection, $query);
  $row = mysqli_num_rows($query_run);
  echo $row;
  ?>
  </div> 
<canvas id="myChart" style="width:100%;max-width:900px; height:400px;float: right;"></canvas>
<script>
var xValues = ["NEW", "REUSED", "REPAIRED", "DAMAGED"];
var yValues = [0, 1, 2, 3];
yValues[0] = document.getElementById('red').innerHTML;
yValues[1] = document.getElementById('green').innerHTML;
yValues[2] = document.getElementById('blue').innerHTML;
yValues[3] = document.getElementById('orange').innerHTML;
var barColors = ["red", "green","blue","orange"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "STOCK-RECORD-2021(B.C.A)"
    }
  }
});
</script>

</body>
</html>
