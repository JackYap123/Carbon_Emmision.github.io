<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Diagram</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <link rel="stylesheet" href="css/header_footer.css">

    <?php
    include("header.php");
    ?>
    <style>
        #myTable {
            border-collapse: collapse;
            width: 100%;
        }

        #myTable th,
        #myTable td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #myTable th {
            background-color: #f2f2f2;
            color: #333;
        }

        #myTable tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #myTable tr:hover {
            background-color: #ddd;
        }

        #compareButton {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .message-container {
            padding: 20px;
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div id="container" style="width: 500px;height: 500px;">
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>

    

    <!-- Dropdown box to select sorting order -->
    <label for="sortOrder">Sort Order:</label>
    <select id="sortOrder">
        <option value="asc">Lowest First</option>
        <option value="desc">Highest First</option>
    </select>

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
        while ($row = $result->fetch_assoc()) {
            $foodData[] = $row['food_total'];
            $transportData[] = $row['transport_total'];
            $electricData[] = $row['Total_KHW'];
        }
    }else {
        echo "<<div class='message-container'>
        You haven't submitted any data before.
        </div><br>";
        echo "<a href='Login_Page_User.php'><button class='btn'>Go Back</button>";    }

    // Step 6: Close Connection
    $conn->close();
    ?>

    <table id="myTable">
        <tr>
            <th>Food Total</th>
            <th>Transport Total</th>
            <th>Electric Total</th>
        </tr>
        <?php
        for ($i = 0; $i < count($foodData); $i++) {
            echo "<tr>";
            echo "<td>" . $foodData[$i] . "</td>";
            echo "<td>" . $transportData[$i] . "</td>";
            echo "<td>" . $electricData[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <button id="compareButton" onclick="compareHighest()">Compare Highest</button>

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
    </script>
</body>
<?php
    include_once("html/footer.html");
?>

</html>
