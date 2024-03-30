<!DOCTYPE html>
<html lang="en">

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
                alert('You haven\'t submitted carbon emissions for today.');
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
                    <span class="notification-counter"><?php echo isset($_SESSION['notification_count']) ? $_SESSION['notification_count'] : 0; ?></span>
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