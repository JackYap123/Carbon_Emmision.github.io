<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Login_Page_User.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
</html>
<?php
// Database connection parameters
$servername = "localhost"; // Your MySQL server name
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "carbon_emmision"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get current time
    $current_time = date("Y-m-d H:i:s");
    
    // Get form data
    $food = $_POST["food"];
    $grams = $_POST["grams"];
    $scription = $_POST["scription"];

    // Prepare SQL statement
    $sql = "INSERT INTO food_tracker (submission_time, food, grams, scription) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssis", $current_time, $food, $grams, $scription);

    // Execute statement
    if ($stmt->execute()) {
        echo "<div class='message'>
                <p>Food submitted successfully!</p>
                </div><br>";
        echo "<a href='daily_log.php'><button class='btn'>Go Back</button>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
