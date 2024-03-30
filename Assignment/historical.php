<?php
include_once("php/config.php");
session_start();

if (!isset($_SESSION['user_Id'])) {
  // Redirect user to login page if not logged in
  header("Location: home_pages.php");
  exit();
}


$user_id = $_SESSION['user_Id'];
// Retrieve $total_food from session variable
$food_total = $_SESSION['food_total'];
$transport_total = $_SESSION['transport_total'];
$Total_KHW = $_SESSION['Total_KHW'];
$Total_Time_Span = $_SESSION['Total_Time_Span'];
$Total_Time_Span_Month = $_SESSION['Total_Time_Span_Month'];

// Step 1: Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "carbon_emmision";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Step 2: Query Database for the latest row
$sql = "SELECT food_total, transport_total,Total_KHW FROM food_carbon_emission WHERE user_Id = $user_id ORDER BY Id DESC LIMIT 1";
$result = $conn->query($sql);

// Step 3: Data Processing
$latestData = $result->fetch_assoc(); // Fetch the latest row

// Step 6: Close Connection
$conn->close();
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
  include_once("html/Header.html");
  ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?food" alt="Food Image">
          <div class="card-body">
            <h5 class="card-title">Column 1</h5>
            <p class="card-text">Your food carbon emission is total is:<?php echo $food_total ?></p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?transportation" alt="Food Image">
          <div class="card-body">
            <h5 class="card-title">Column 2</h5>
            <p class="card-text">Your trasportation carbon emission is total is:<?php echo $transport_total ?></p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card">
          <img class="card-img-top" src="https://source.unsplash.com/400x300/?electric" alt="Food Image">
          <div class="card-body">
            <h5 class="card-title">Column 3</h5>
            <p class="card-text">Your electrical carbon emission is total is:<?php echo $Total_KHW ?>
              Your day of electric carbon emission is total is:<?php echo $Total_Time_Span ?>
              Your month carbon emission is total is:<?php echo $Total_Time_Span_Month ?>

            </p>
            <a href="#" class="btn btn-primary">Button</a>
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
          label: 'Latest Data',
          data: <?php echo json_encode([$latestData['food_total'], $latestData['transport_total'], $latestData['Total_KHW']]); ?>,
          backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(11,156,49,0.2)'],
          borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(11,156,49,0.2)'],
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