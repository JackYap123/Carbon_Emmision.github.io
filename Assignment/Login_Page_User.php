<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/Login_Page_User.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include_once("php/config.php");

            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                // Hash the password

                $result = mysqli_query($con, "SELECT * FROM users WHERE Email= '$email' AND Password ='$password' ") or die("connection failed");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    if ($row['UserName'] == "admin") { // Check if the user is an admin
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['UserName'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['user_Id'] = $row['user_Id'];
                        header("Location: admin_home.php"); // Redirect to admin panel
                        exit;
                    }
                    else{
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['username'] = $row['UserName'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['user_Id'] = $row['user_Id'];
                        header("Location: home_page.php");
                        exit;
                    }
                } else {
                    echo "<div class='message'>
                            <p>Wrong Username or Password</p>
                            </div><br>";
                    echo "<a href='Login_Page_User.php'><button class='btn'>Go Back</button>";
                }
            } else {
            ?>
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email &nbsp;<i class="bx bx-user icon"></i></label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password <i class="bx bx-lock-alt icon"></i></label>
                        <input type="password" name="password" id="password" autocomplete="off" required>

                    </div>
                    <div class="field">
                        <input type="submit" name="submit" value="Login" class="btn" required>
                    </div>
                    <div class="links">
                        Don't have account? <a href="register.php">Sign Up New Account</a>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>
