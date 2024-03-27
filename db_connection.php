<?php
// Database configuration for Eco Events Calendar
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "eco_events_calendar";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
