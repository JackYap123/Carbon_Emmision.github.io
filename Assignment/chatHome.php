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
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="p-2 w-400 rounded shadow">
        <div>
            <div class="d-flex mb-3 p-3 bg-light justify-content-center align-items-center"></div>
            <div class="d-flex align-items-center">
                <img src="" alt="user-default.png" class="w-25 rounded-circle">
                <h3 class="fs-xs m-2">Name</h3>
                
            </div>
        </div>
    </div>

</body>
</html>
<?php
    }else{
        header("Location: Home.php");
        exit;
    }
?>
