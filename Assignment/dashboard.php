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
                        borderColor: 'rgba(54, 162, 235, 1)',
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

        // Function to sort table data based on user selection
        function sortTable(order) {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("myTable");
            switching = true;
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[0];
                    y = rows[i + 1].getElementsByTagName("TD")[0];
                    //check if the two rows should switch place:
                    if (order === 'asc') {
                        if (Number(x.innerHTML) > Number(y.innerHTML)) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    } else if (order === 'desc') {
                        if (Number(x.innerHTML) < Number(y.innerHTML)) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }
        }

        // Add event listener to dropdown box
        document.getElementById("sortOrder").addEventListener("change", function() {
            var sortOrder = this.value;
            sortTable(sortOrder);
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

        function zoomIn() {
            var container = document.getElementById("container");
            var currentWidth = parseInt(container.style.width);
            var currentHeight = parseInt(container.style.height);
            container.style.width = (currentWidth + 100) + "px";
            container.style.height = (currentHeight + 100) + "px";
        }

        // Function to zoom out
        function zoomOut() {
            var container = document.getElementById("container");
            var currentWidth = parseInt(container.style.width);
            var currentHeight = parseInt(container.style.height);
            container.style.width = (currentWidth - 100) + "px";
            container.style.height = (currentHeight - 100) + "px";
        }
        
    </script>
    
</body>
<?php
include_once("html/footer.html");
?>

</html>