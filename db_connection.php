<?php
// Database configuration for Eco Events Calendar
$servername = "localhost";
$username = "root";
$password = "";
$database = "carbon_emmision";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
