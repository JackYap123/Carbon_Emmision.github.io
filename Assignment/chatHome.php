<?php

    if(isset($_SESSION['userName'])){

        include_once 'php/config.php';
        include_once 'chatBoxUser.php';

        $user = getChatBoxUser($_SESSION['userName'],$conn);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xV
    W2eSR50omGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOO17+AMvyTG2x"
    crossorigin="anonymous">
    <link rel="stylesheet" href="chatBox.css">
    <link rel="icon">
</head>
<body class="d-flex
            justify-content-center
            align-items-center vh-100">
    <div class="p-2 w-400
                rounded shadow">
        <div>
            <div class="d-flex
                        mb-3 p-3 bg-light
                        justify-content-center
                        align-items-center">
            <div class="d-flex align-items-center">
                <img src="profile_Picture.jpg" alt="user-default.png" class="w-25 rounded-circle">
                <h3 class="fs-xs m-2"><?= $user['userName']?></h3>
            </div>
            <a href="php/Logout_Page_User.php" class="btn btn-dark">Logout</a>
        </div>
    </div>
    </div>
    <?php
    }else{
        exit;
    }
    ?>
</body>
</html>
