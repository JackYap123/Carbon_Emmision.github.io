<?php
// Include database connection
include 'config.php';

// Get data from the form
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];
$organizer = $_POST['organizer'];

// Insert event into the database
$sql = "INSERT INTO `events` (`title`, `description`, `date`, `time`, `location`, `organizer`) VALUES ('$title', '$description', '$date', '$time', '$location', '$organizer')";
if ($con->query($sql) === TRUE) {
    echo "Event uploaded successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close database connection
$con->close();
?>
