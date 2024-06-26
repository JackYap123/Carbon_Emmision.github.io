<?php
include_once("php/config.php");
include_once("header.php");
$user_id = $_SESSION['user_Id'];
// Retrieve $total_food from session variable

$food_total = $_SESSION['food_total'];
$transport_total = $_SESSION['transport_total'];
$Total_KHW = $_SESSION['Total_KHW'];
if (!isset($_SESSION['user_Id'])) {
  // Redirect user to login page if not logged in
  header("Location: home_page.php");
  exit();
}

// Step 1: Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "carbon_emmision";

$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// Step 2: Query Database for the latest row
$sql = "SELECT food_total, transport_total,Total_KHW FROM food_carbon_emission WHERE user_Id = $user_id ORDER BY Id DESC LIMIT 1";
$result = $con->query($sql);

// Step 3: Data Processing
$latestData = $result->fetch_assoc(); // Fetch the latest row

// Step 6: Close Connection
$con->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enhanced Columns</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/historical.css">
  <link rel="stylesheet" href="css/header_footer.css">

  <?php
  include_once("Header.php");
  ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?food" alt="FoodImg">
          <div class="card-body">
            <h5 class="card-title">Column 1</h5>
            <p class="card-text">Your food carbon emission is total is:<?php echo $food_total ?> Kwh</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?transportation" alt="transportationImg">
          <div class="card-body">
            <h5 class="card-title">Column 2</h5>
            <p class="card-text">Your trasportation carbon emission is total is:<?php echo $transport_total ?> Kwh</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?electric" alt="electricImg">
          <div class="card-body">
            <h5 class="card-title">Column 3</h5>
            <p class="card-text">Your electrical carbon emission is total is:<?php echo $Total_KHW ?> Kwh
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="container_1">
      <canvas id="myChart" width="50" height="50"></canvas>
    </div>
  </div>

  <script>
    // Step 5: Render
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Food Total", "Transport Total", "Total KHW"],
        datasets: [{
          label: 'Latest Data All Average KHW',
          data: <?php echo json_encode([$latestData['food_total'], $latestData['transport_total'], $latestData['Total_KHW']]); ?>,
          backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(255, 99, 132, 0.2)'],
          borderColor: ['rgba(255, 99, 132, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 99, 132, 1)'],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>

</html>
