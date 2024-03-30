<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Events Calendar</title>
    <link rel="stylesheet" href="css/EcoEventsCalendar.css">
</head>
<body>
    <div class="container">
        <h1>Eco Events</h1>
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
    </div>

     <!-- Admin Upload Event Form -->
    <div id="uploadEventForm" class="hidden">
        <h2>Upload Event</h2>
        <form action="php/upload_event.php" method="post">
            <label for="title">Event Title:</label><br>
            <input type="text" id="title" name="title" required><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" required></textarea><br>
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date" required><br>
            <label for="time">Time:</label><br>
            <input type="time" id="time" name="time" required><br>
            <label for="location">Location:</label><br>
            <input type="text" id="location" name="location" required><br>
            <label for="organizer">Organizer:</label><br>
            <input type="text" id="organizer" name="organizer" required><br><br>
            <input type="submit" value="Upload Event">
        </form>
    </div>

    <!-- User Registration Form -->
    <div id="registrationForm" class="hidden">
        <h2>Event Registration</h2>
        <form action="php/register_event.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="ticketQuantity">Ticket Quantity:</label><br>
            <input type="number" id="ticketQuantity" name="ticketQuantity" min="1" required><br><br>
            <input type="submit" value="Register">
        </form>
    </div>

    <script src="js/EcoEventsCalendar.js"></script>
</body>
</html>
</body>
</html>
