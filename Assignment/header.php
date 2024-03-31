<!DOCTYPE html>
<html lang="en">
<?php
include_once("php/config.php");
session_start();
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Step 2: Prepare SQL Query to Fetch Submit Time
$id = $_SESSION['user_Id']; // Assuming $_SESSION['user_Id'] contains the user's ID
$sql_select = "SELECT Submit_Time FROM food_carbon_emission WHERE user_Id = $id ORDER BY Submit_Time DESC LIMIT 1";

// Step 3: Execute Query
$result = $con->query($sql_select);

// Step 4: Fetch Submit Time
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $submit_time = strtotime($row['Submit_Time']);

    // Step 5: Calculate time difference in minutes
    $current_time = time();
    $time_difference_minutes = ($current_time - $submit_time) / 60;
    if ($time_difference_minutes > 1440) {
        // If the difference is greater than 24 hours, set notification count to 1
        $_SESSION['notification_count'] = 1;
    } else if ($time_difference_minutes < 1440){
        // If the difference is not greater than 24 hours, set notification count to 0
        $_SESSION['notification_count'] = 0;
    }else{
        $_SESSION['notification_count']  = 11;
    }

    // Step 6: Perform your calculations or checks based on $time_difference_minutes
} else {
    echo "No submit time found for the user.";
}

// Step 7: Close Connection
$con->close();


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbon Emission</title>
    <link rel="stylesheet" href="../css/header_footer.css">
    <!-- Assuming you're using Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../JS/header.js"></script>
    <script>
    $(document).ready(function() {
        // Function to show alert message when notification icon is clicked
        $('.notification-icon').click(function() {
            // Check if notification count is greater than 0
            var notificationCount = parseInt($('.notification-counter').text());
            if (notificationCount > 0) {
                alert('You have ' + notificationCount + ' notifications.');
            }
        });
    });
</script>


</head>

<body>
    <header>
        <div class="head_container">
            <div class="left">
                <h1>CARBON EMISSION</h1>
            </div>
            <nav class="middle">
                <a href="home_page.php" class="navi">Home</a>
                <a href="#" class="navi">Features</a>
                <a href="daily_log_food.php" class="navi">Calculate</a>
                <a href="#" class="navi">Daily Activity Log</a>
                <a href="dashboard.php" class="navi">Historical</a>
                <a href="Educational_Content.php" class="navi">Learn</a>
                <a href="Social_Share.php" class="navi">Social_Media</a>
                <a href="Social_Share.php" class="navi">Social_Media</a>

                <span class="notification-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-counter"><?php echo ($_SESSION['notification_count']);?></span>
                    <!-- Example: Displaying initial count -->
                </span>
            </nav>

            <div class="right">
                <button id="profile_button"><a href="User_Edit_Profile.php">Profile</a></button>
            </div>
        </div>
    </header>
</body>

</html>