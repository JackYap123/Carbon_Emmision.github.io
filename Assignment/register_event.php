<?php
// Include database connection
include_once ('php/config.php');

// Get data from the form
$eventName = $_POST['eventName'];
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];

// Insert registration data into the database
$sql = "INSERT INTO `registrations` (`event_name`, `user_name`, `user_email`) VALUES ('$eventName', '$userName', '$userEmail')";
if ($con->query($sql) === true) {
    // Display confirmation message using JavaScript and the generateTicket() function is called to generate and display the digital ticket
    echo "<script>displayConfirmation(); generateTicket();</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
// Close database connection
$con->close();
?>
