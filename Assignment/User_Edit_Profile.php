<?php
session_start();

include_once("php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location:Login_Page_User.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login_Page_User.css">
    <title>Document</title>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="Main_Page.php"></a>Logo</p>
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="php/Logout_Page_User.php"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $commuting_method =  $_POST['commuting-method'];
                $food =  $_POST['food'];
                $energy =  $_POST['energy'];
                $id = $_SESSION['user_Id'];

                $edit_query = mysqli_query($con, "UPDATE users SET UserName='$username',Email='$email',Age='$age',Food='$food',Energy = '$energy',Commuting_Method = '$commuting_method' WHERE user_Id = $id") or die("error occures");

                if ($edit_query) {
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                  </div> <br>";

                    echo "<a href='Main_Page.php'><button class='btn'>Login in now</button>";
                }
            } else {
                $id = $_SESSION['user_Id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE user_Id=$id");

                while ($result = mysqli_fetch_assoc($query)) {
                    $res_Uname = $result['UserName'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_Food = $result['Food'];
                    $res_Method = $result['Commuting_Method'];
                    $res_Energy = $result['Energy'];
                }
            ?>
                <header>Change Profile</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off" required>
                    </div>


                    <div class="field input">
                        <label for="commuting-method">Commuting Method</label>
                        <select id="commuting-method" name="commuting-method">
                            <option><?php echo $res_Method; ?></option>
                            <option value="Car">Car</option>
                            <option value="Motorcycle">Motorcycle</option>
                            <option value="Public-Transport">Public Transport</option>
                        </select>
                    </div>

                    <div class="field input">
                        <label for="energy">Energy</label>
                        <select id="energy" name="energy">
                            <option><?php echo $res_Energy; ?></option>
                            <option value="Fan">Fan</option>
                            <option value="Air-Condition">Air-Condition</option>
                        </select>
                    </div>

                    <div class="field input">
                        <label for="food">Energy</label>
                        <select id="food" name="food">
                            <option><?php echo $res_Food; ?></option>
                            <option value="Omnivore">Omnivore</option>
                            <option value="Vegetarian">Vegetarian</option>
                        </select>
                    </div>

                    <div class="field">
                        <input type="submit" name="submit" value="Update" class="btn" required>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
</body>

</html>