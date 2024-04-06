<?php
    include_once("header.php");
    include_once("php/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbon Emmision</title>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div style="height: 7.5em;"></div>
    <div id="container1">
        <h1 class="head-title">Welcome to Carbon Emision Website</h1>
    </div>
    <div id="container2">
        <h2 class="content-title">Function of Website</h2>
        <div class="content-container">
            <div class="function-coloum_1">
                <div class="box">
                    <div class="box-image">
                        <img src="image/profile.png" alt="profile" class="image">
                    </div>
                    <div class="box-content">
                        <div>
                            <b>User Profile and Activity Tracking</b>
                            <p>Users create profiles to input personal details, such as transportation choices, energy consumption habits, and dietary preferences. The app tracks daily activities and prompts users to update their profiles regularly.</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-image">
                        <img src="image/personalized.png" class="image" alt="personalizedImg" >
                    </div>
                    <div class="box-content">
                        <div>
                            <b>Personalized Recommendations and Insights</b>
                            <p>The app analyzes user data to provide personalized recommendations for reducing carbon emissions. It offers insights into the environmental impact of specific activities and suggests eco-friendly alternatives.</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-image">
                        <img src="image/historical.png" class="image" alt="historicalImg">
                    </div>
                    <div class="box-content">
                        <div>
                            <b>Historical Tracking and Trends</b>
                            <p>Users can view historical data and trends in their carbon footprint over time. This feature helps users understand the effectiveness of their sustainability efforts and motivates continuous improvement.</p>
                        </div>
                    </div>
                </div>
                <div class="box" style="margin-bottom: 0;">
                    <div class="box-image">
                        <img src="image/share.png" class="image" alt="shareImg">
                    </div>
                    <div class="box-content">
                        <div>
                            <b>Social Media Sharing</b>
                            <p>Users can easily share their carbon reduction achievements on popular social media platforms directly from the app, fostering a sense of accomplishment and encouraging others to join in.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="function-coloum_2">
                <div class="box">
                    <div class="box-image">
                        <img src="image/calculator.png" alt="calculator" class="image">
                    </div>
                    <div class="box-content">
                        <div>
                            <b>Real-time Carbon Footprint Calculation</b>
                            <p>The app calculates the carbon footprint based on user inputs and provides real-time feedback on the environmental impact of their activities.</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-image">
                        <img src="image/educational.png" class="image" alt="educationIcon">
                    </div>
                    <div class="box-content">
                        <div>
                            <b>Educational Content and Environmental Impact Scores</b>
                            <p>The app provides educational content on environmental issues and assigns environmental impact scores to various activities. This helps users make informed choices and understand the broader implications of their actions.</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-image">
                        <img src="image/calendar.png" class="image" alt="calenderIcon">
                    </div>
                    <div class="box-content">
                        <div>
                            <b>Eco-friendly Events Calendar</b>
                            <p>The app showcase events related to sustainability, environment awareness, and conservation efforts. This helps users to participate in events directly through the platform or get information on how to join activities.</p>
                        </div>
                    </div>
                </div>
                <div class="box" style="margin-bottom: 0;">
                    <div class="box-image">
                        <img src="image/feedback.png" class="image" alt="feedbackIcon">
                    </div>
                    <div class="box-content">
                        <div>
                            <b>User Feedback Survey</b>
                            <p>The goal of this use case is to collect valuable feedback from users to understand their preferences, satisfaction levels, and improvement suggestions for the app. This feedback will be used to enhance the user experience and align features with user needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
    include_once("html/footer.html");
?>
