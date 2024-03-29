<?php
session_start();
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

$id = $_SESSION['user_Id'];

// Step 2: Query Database
$sql = "SELECT food_total, transport_total, Total_KHW FROM food_carbon_emission WHERE user_Id = $id";
$result = $conn->query($sql);

// Step 3: Data Processing
$foodData = [];
$transportData = [];
$electricData = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $foodData[] = $row['food_total'];
        $transportData[] = $row['transport_total'];
        $electricData[] = $row['Total_KHW'];
    }
}

// Step 6: Close Connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Diagram</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
</head>
<body>
    <div id="container" style="width: 500px;height: 500px;">
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>
    <?php
      include_once("dashboard_table.php");
    ?>
    <script>
        // Step 5: Render
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode(range(1, count($foodData))); ?>,
                datasets: [{
                    label: 'Food Total',
                    data: <?php echo json_encode($foodData); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Transport Total',
                    data: <?php echo json_encode($transportData); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Electric Total',
                    data: <?php echo json_encode($electricData); ?>,
                    backgroundColor: 'rgba(11,156,49,0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
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
