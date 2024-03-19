
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login_Page_User.css">
    <link rel="javascript" href="js/register_rules.js">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="box form-box" >
        <?php
// PHP code for handling form submission
    include_once("php/config.php");
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email = '$email'");

        if(mysqli_num_rows($verify_query)!=0)
        {
            echo "<div class='message'>
                    <p> This Email is used, Try another One Please!</p>
                  </div>,<br>";

            echo"<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }
        else{
            mysqli_query($con,"INSERT INTO users(Username,Email,Age,PASSWORD) VALUES('$username','$email','$age','$password')") or die("Error Occuped");
        
            echo "<div class='message'>
                    <p> Resgitration Successfully</p>
                  </div>,<br>"  ;

            echo"<a href='Login_Page_User.php'><button class='btn'>Login in now</button>";
        }
    }
    
    else{
?>
            <header>Sign Up</header>
            <form action="" method="post" id="register_form">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="new-password" required >
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="new-password" required>
                </div>
                
                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="new-password" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="new-password" required>
                </div>

                <div class="field">
                    <input type="submit" name="submit" value="Login" class="btn" required>
                </div>
                <div class="links">
                    Already a member<a href="Login_Page_User.php"> Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
    
</body>
</html>
