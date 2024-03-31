<?php
    include "database.php";
    include "HeaderFooter/Header.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Content</title>
    <link rel="stylesheet" href="CSS/Educational_Content.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div style="height: 5em;"></div>
    <div id="container1">
        <h1 class="head-title">Reduce, Reuse, Recycle</h1>
        <p class="content">Understand how our actions impact the environment</p>
        <a href="Educational_Content.php"><button>Back</button></a>
    </div>
    <div id="container2">
        <h2 class="content-title">Educational Videos</h2>
        <div class="content-container">
            <iframe src="<?php echo $url_6; ?>" frameborder="0" allowfullscreen></iframe>
            <iframe src="<?php echo $url_7; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div id="container3">
        <h2 class="content-title">Educational Articles</h2>
        <div class="content-container">
            <object type="text/html" data="<?php echo $url_8; ?>" class="articles"></object>
            <object type="text/html" data="<?php echo $url_9; ?>" class="articles"></object>
        </div>
    </div>
    <div id="container4">
        <h2 class="content-title">Educational Infographics</h2>
        <div class="content-container">
            <object data="<?php echo $url_10; ?>" type="image/png" class="infographics"></object>
            <object data="<?php echo $url_11; ?>" type="image/png" class="infographics"></object>
        </div>
    </div>
</body>
<script src="JS/Educational_Content.js"></script>
</html>

<?php
    include "HeaderFooter/Footer.html";
?>