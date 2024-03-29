<?php
// Function to generate HTML table from database query result
function generate_table($result) {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Time</th><th>Total Food(CO2)</th><th>Total Transport(CO2)</th><th>Total KHW</th></tr>"; // Change these column headers according to your table structure
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Submit_Time"]."</td><td>".$row["food_total"]."</td><td>".$row["transport_total"]."</td><td>".$row["Total_KHW"]."</td></tr>"; // Change these according to your table structure
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

// Step 1: Connect to the database
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "carbon_emmision"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_SESSION['user_Id'];

// Step 2: Execute a query to fetch data
$sql = "SELECT * FROM food_carbon_emission WHERE user_Id = $id
AND date_created >= DATE_SUB(NOW(), INTERVAL 30 DAY)"; 
// Change "your_table" to the name of your table
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Table from Database</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Step 3: Generate HTML table using the function
generate_table($result);

// Step 4: Close connection
$conn->close();
?>

</body>
</html>
