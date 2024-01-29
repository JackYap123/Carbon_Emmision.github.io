<?php
    session_start();

    include_once("php/config.php");
    if(!isset($_SESSION['valid']))
    {
        header("Location:Login_Page_User.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login_Page_User.css">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"></a>Logo</p>
        </div>

        <div class="right-links">
            <?php

            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id = $id");
            while($result = mysqli_fetch_assoc($query))
            {
                $res_Uname = $result['UserName'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];

            }
                echo "<a href = 'User_Edit_Profile.php?Id = $res_id'>Change Profile</a>"

            ?>

            <a href="logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Hello <b><?php echo $res_Uname?> </b>, Welcome</p>
                </div>
                <div class="box">
                    <p>Your email is <b><?php echo $res_Email?></b>.</p>
                </div>
                <div class="bottom">
                    <div class="box">
                        <p>And you are<b><?php echo $res_Age?></b>years old.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>