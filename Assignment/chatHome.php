<?php 
    session_start();

    if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/boostrap.min.css" rel="stylesheet" integrity="sha384-+0n0xV
    W2eSR50omGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOO17+AMvyTG2x"
    crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <link rel="icon">
</head>
<body>
    <a href="php/Logout_Page_User.php">Logout</a>
</body>
</html>
<?php
    }else{
        header("Location: Home.php");
        exit;
    }
?>
