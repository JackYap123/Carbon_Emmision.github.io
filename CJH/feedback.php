<?php
    include "header_footer/header.html";
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbon Emmision</title>
    <link rel="stylesheet" href="CSS/header_footer.css">
    <link rel="stylesheet" href="CSS/feedback.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</head>
<body>
    <div style="height: 7.5em;"></div>
    <div id="container1">
        <h1 class="head-title">User Feedback Survey</h1>
        <p class="content" style="margin-bottom: 2em;">Help us improve! Share your thoughts in our quick User Feedback Survey to shape the future of our app.</p>
        <button id="scroll">Learn More</button>
    </div>
    <div id="container2">
        <h2 class="content-title">Introduction</h2>
        <div class="content-container">
            <p class="content">Welcome to our app feedback survey! We greatly value your input and aim to continuously enhance our app to better serve your needs. Your feedback is invaluable in helping us understand how we can improve various aspects of our app to provide you with a seamless and enjoyable experience.</p>
        </div>
    </div>
    <div id="container3">
        <h2 class="content-title">Purpose of the Survey</h2>
        <div class="content-container">
            <p class="content">The purpose of this survey is to gather insights from our users about their experiences with our app. We want to understand what you love about the app, what areas could be improved, and any additional features or functionalities you would like to see in the future.</p>
        </div>
    </div>
    <div id="container4">
        <h2 class="content-title">How Your Feedback Will Contribute to Improving the App</h2>
        <div class="content-container">
            <p class="content">Your feedback will play a crucial role in shaping the future development of our app. By sharing your thoughts, suggestions, and concerns, you will directly influence the enhancements and updates we make. Your input will help us prioritize features, identify areas for improvement, and ensure that our app aligns with your preferences and expectations.</p>
        </div>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="margin: 0;" method="post">
        <div id="container5">
            <h2 class="content-title" style="margin-bottom: 1em;">Survey</h2>
            <div class="form-container">
                <div class="form-container1">
                    <h3 class="survey-option">User Interface: </h3>
                    <h3 class="survey-option">Feature Satisfaction: </h3>
                    <h3 class="survey-option">Preferences: </h3>
                </div>
                <div class="form-container2">
                    <div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="user_interface" id="ui_1" autocomplete="off" value="1" required>
                            <label class="btn btn-outline-primary" for="ui_1">1</label>
                            <input type="radio" class="btn-check" name="user_interface" id="ui_2" autocomplete="off" value="2" required>
                            <label class="btn btn-outline-primary" for="ui_2">2</label>
                            <input type="radio" class="btn-check" name="user_interface" id="ui_3" autocomplete="off" value="3" required>
                            <label class="btn btn-outline-primary" for="ui_3">3</label>
                            <input type="radio" class="btn-check" name="user_interface" id="ui_4" autocomplete="off" value="4" required>
                            <label class="btn btn-outline-primary" for="ui_4">4</label>
                            <input type="radio" class="btn-check" name="user_interface" id="ui_5" autocomplete="off" value="5" required>
                            <label class="btn btn-outline-primary" for="ui_5">5</label>
                        </div>
                    </div>
                    <br>
                    <div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="feature_satisfaction" id="fs_1" autocomplete="off" value="1" required>
                            <label class="btn btn-outline-primary" for="fs_1">1</label>
                            <input type="radio" class="btn-check" name="feature_satisfaction" id="fs_2" autocomplete="off" value="2" required>
                            <label class="btn btn-outline-primary" for="fs_2">2</label>
                            <input type="radio" class="btn-check" name="feature_satisfaction" id="fs_3" autocomplete="off" value="3" required>
                            <label class="btn btn-outline-primary" for="fs_3">3</label>
                            <input type="radio" class="btn-check" name="feature_satisfaction" id="fs_4" autocomplete="off" value="4" required>
                            <label class="btn btn-outline-primary" for="fs_4">4</label>
                            <input type="radio" class="btn-check" name="feature_satisfaction" id="fs_5" autocomplete="off" value="5" required>
                            <label class="btn btn-outline-primary" for="fs_5">5</label>
                        </div>
                    </div>
                    <br>
                    <div>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group" >
                            <input type="radio" class="btn-check" name="preferences" id="p_1" autocomplete="off" value="1" required>
                            <label class="btn btn-outline-primary" for="p_1">1</label>
                            <input type="radio" class="btn-check" name="preferences" id="p_2" autocomplete="off" value="2" required>
                            <label class="btn btn-outline-primary" for="p_2">2</label>
                            <input type="radio" class="btn-check" name="preferences" id="p_3" autocomplete="off" value="3" required>
                            <label class="btn btn-outline-primary" for="p_3">3</label>
                            <input type="radio" class="btn-check" name="preferences" id="p_4" autocomplete="off" value="4" required>
                            <label class="btn btn-outline-primary" for="p_4">4</label>
                            <input type="radio" class="btn-check" name="preferences" id="p_5" autocomplete="off" value="5" required>
                            <label class="btn btn-outline-primary" for="p_5">5</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="container6">
            <h2 class="content-title">Feedback Form</h2><br>
            <div class="content-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-13 mx-auto">
                            <div class="mb-3">
                                <label for="feedback" style="font-size: larger;"><b>Your Feedback:</b></label>
                                <textarea class="form-control " id="feedback" rows="20" name="feedback"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
    include "header_footer/footer.html";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_interface = $_POST["user_interface"];
        $feature = $_POST["feature_satisfaction"];
        $preference = $_POST["preferences"];
        $feedback = $_POST["feedback"];

        $sql = ("INSERT INTO `user_feedback`(`user_interface`, `feature_satisfaction`, `preferences`, `feedback`) VALUES ('$user_interface','$feature','$preference','$feedback')");
        mysqli_query($conn, $sql);

        echo "<script>alert('Submitted');</script>";
    }
?>