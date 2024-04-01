<?php
 include("header.php");
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

$id = $_SESSION['user_Id'];

// Step 2: Query Database
$sql = "SELECT food_total, transport_total, Total_KHW FROM food_carbon_emission WHERE user_Id = $id";
$result = $con->query($sql);

// Step 3: Data Processing
$foodData = [];
$transportData = [];
$electricData = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $foodData[] = $row['food_total'];
        $transportData[] = $row['transport_total'];
        $electricData[] = $row['Total_KHW'];
    }
} else {
    echo "<<div class='message-container'>
        You haven't submitted any data before.
        </div><br>";
    echo "<a href='Login_Page_User.php'><button class='btn'>Go Back</button>";
}

// Step 6: Close Connection
$con->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Diagram</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div id="container-1">
        <div id="container" style="width: 500px;height: 500px; z-index: 0;">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>

    <!-- Dropdown box to select sorting order -->
    <label for="sortOrder">Sort Order:</label>
    <select id="sortOrder">
        <option value="asc">Lowest First</option>
        <option value="desc">Highest First</option>
    </select>
    <button id="compareButton" onclick="compareHighest()">Compare Highest</button>
    
    <button onclick="zoomIn()">Zoom In</button>
    <button onclick="zoomOut()">Zoom Out</button>


    <table id="myTable">
        <tr>
            <th>Food Total</th>
            <th>Transport Total</th>
            <th>Electric Total</th>
        </tr>
        <?php
        for ($i = 0; $i < count($foodData); $i++) {
            echo "<tr>";
            echo "<td class='chart-colors'>" . $foodData[$i] . "</td>";
            echo "<td class='chart-colors2'>" . $transportData[$i] . "</td>";
            echo "<td class='chart-colors3'>" . $electricData[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <script src="js/dashboard.js"></script>
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
                        borderWidth: 1,
                        barThickness: 5 // Adjust the thickness of the bars
                    },
                    {
                        label: 'Transport Total',
                        data: <?php echo json_encode($transportData); ?>,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        barThickness: 5 // Adjust the thickness of the bars

                    },
                    {
                        label: 'Electric Total',
                        data: <?php echo json_encode($electricData); ?>,
                        backgroundColor: 'rgba(11,156,49,0.2)',
                        borderColor: 'rgba(11,156,49,0.2)',
                        borderWidth: 1,
                        barThickness: 5 // Adjust the thickness of the bars

                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    

        // Function to compare highest values
        function compareHighest() {
            var foodMax = Math.max.apply(null, <?php echo json_encode($foodData); ?>);
            var transportMax = Math.max.apply(null, <?php echo json_encode($transportData); ?>);
            var electricMax = Math.max.apply(null, <?php echo json_encode($electricData); ?>);

            var highestValues = {
                "Food Total": foodMax,
                "Transport Total": transportMax,
                "Electric Total": electricMax
            };

            var highestKey = Object.keys(highestValues).reduce(function(a, b) {
                return highestValues[a] > highestValues[b] ? a : b
            });

            alert("The highest value is in " + highestKey + " category.");
        }


    </script>
    
</body>
<?php
include_once("html/footer.html");
?>

</html>