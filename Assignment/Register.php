<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login_Page_User.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            // PHP code for handling form submission
            include_once("php/config.php");
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $password = $_POST['password'];
                $food = $_POST['food'];
                $commuting_method = $_POST['commuting-method']; // Corrected variable name
                $energy = $_POST['energy'];

                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email = '$email'");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='message'>
                    <p> This Email is used, Try another One Please!</p>
                  </div>,<br>";

                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {
                    mysqli_query($con, "INSERT INTO users (Username, Email, Age, Password, food, commuting_method, energy) VALUES ('$username', '$email', '$age', '$password', '$food', '$commuting_method', '$energy')") or die("Error Occupied");

                    echo "<div class='message'>
                    <p> Registration Successfully</p>
                  </div>,<br>";

                    echo "<a href='Login_Page_User.php'><button class='btn'>Login now</button>";
                }
            } else {
            ?>
                <header>Sign Up</header>
                <form action="" method="post" id="register_form" onsubmit="return validateForm()">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="new-password" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" autocomplete="email" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password <span class="info-icon" onmouseover="showPasswordRequirements()" onmouseout="hideRequirements()" role="button" tabindex="0">ℹ️</span></label>
                        <input type="password" name="password" id="password" autocomplete="new-password" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age <span class="info-icon-1" onmouseover="showAgeRequirements()" onmouseout="hideRequirements()" role="button" tabindex="0">ℹ️</span></label>
                        <input type="number" name="age" id="age" autocomplete="" required>
                    </div>


                    <div class="field input">
                        <label for="commuting-method">Commuting-Method</label>
                        <select id="commuting-method" name="commuting-method">
                            <option>Please Select Your Transportation</option>
                            <option value="Car">Car</option>
                            <option value="Motorcycle">Motorcycle</option>
                            <option value="Public-Transport">Public Transport</option>
                        </select>
                    </div>

                    <div class="field input">
                        <label for="energy">Energy</label>
                        <select id="energy" name="energy">
                            <option>Please Select Your Transportation</option>
                            <option value="Fan">Fan</option>
                            <option value="Air-Condition">Air-Condition</option>
                        </select>
                    </div>

                    <div class="field input">
                        <label for="food">Food</label>
                        <select id="food" name="food">
                            <option>Please Select Your Diet</option>
                            <option value="Omnivore">Omnivore</option>
                            <option value="Vegetarian">Vegetarian</option>
                        </select>
                    </div>

                    <div class="field">
                        <input type="submit" name="submit" value="Register" class="btn" required onsubmit="validate">
                    </div>
                    <div class="links">
                        Already a member<a href="Login_Page_User.php"> Sign In</a>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
    <script src="js/register_rules.js"></script>
</body>

</html>