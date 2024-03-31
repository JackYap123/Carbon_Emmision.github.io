<?php
// Include database connection
include 'php/config.php';

// Fetch events from the database
$sql = "SELECT * FROM `events`";
$result = $con->query($sql);

// Display events
if ($result->num_rows > 0) {
    echo '<ul>';
    while ($row = $result->fetch_assoc()) {
        echo '<li>';
        echo '<h2>' . $row['title'] . '</h2>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<p><strong>Date:</strong> ' . $row['date'] . ' <strong>Time:</strong> ' . $row['time'] . '</p>';
        echo '<p><strong>Location:</strong> ' . $row['location'] . '</p>';
        echo '<p><strong>Organizer:</strong> ' . $row['organizer'] . '</p>';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No events found.</p>';
}

// Close database connection
$con->close();
?>
