<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Events Calendar</title>
    <link rel="stylesheet" href="css/EcoEventsCalendar.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <?php
        include_once("header.php");
    ?>
</head>
<body>
    <div class="container">
        <h1>Eco Events</h1>
        <!-- Display the list of events -->
        <?php include 'display_events.php'; ?> <!-- Including PHP script to display events -->
    </div>

    <!-- Admin "Upload Event" form -->
    <div class="admin-upload">
        <h2>Upload Event</h2>
        <form action="upload_event.php" method="post"> <!-- Form to upload new events -->
            <label for="title">Event Title:</label>
            <input type="text" id="title" name="title" required><br>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea><br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br>
            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required><br>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required><br>
            <label for="organizer">Organizer:</label>
            <input type="text" id="organizer" name="organizer" required><br>
            <button type="submit">Upload Event</button>
        </form>
    </div>

    <!-- User Registration Form -->
    <div class="user-registration">
        <h2>Register for an Event</h2>
        <form action="register_event.php" method="post"> <!-- Form to register for events -->
            <label for="eventName">Event Name:</label>
            <input type="text" id="eventName" name="eventName" required><br>
            <label for="userName">Your Name:</label>
            <input type="text" id="userName" name="userName" required><br>
            <label for="userEmail">Your Email:</label>
            <input type="email" id="userEmail" name="userEmail" required><br>
            <button type="submit" onclick="displayConfirmation(); generateTicket()">Register</button> <!-- Register button with JS function calls -->
        </form>
    </div>

<<<<<< include-admin-upload-and-user-registration
     <!-- Admin Upload Event Form -->
    <div id="uploadEventForm" class="hidden">
        <h2>Upload Event</h2>
        <form action="upload_event.php" method="post">
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
        <form action="register_event.php" method="post">
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
=======
    <!-- JS for displaying confirmation message and digital ticket -->
    <script src="js/EcoEventsCalendar.js"></script>
>>>>>> main
</body>
</html>
