<?php
    // Including necessary files: database connection, header, and URL loader
    include "database.php";
    include "html/header.html";
    include "url_loader.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Content</title>
    <!-- Linking CSS files -->
    <link rel="stylesheet" href="css/educational_content.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <!-- Preconnecting to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Importing Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Adding space for header -->
    <div style="height: 7.5em;"></div>
    <!-- Container 1 -->
    <div id="container1">
        <h1 class="head-title">Reduce, Reuse, Recycle</h1>
        <p class="content">Understand how our actions impact the environment</p>
        <a href="Educational_Content.php"><button>Back</button></a>
    </div>
    <!-- Container 2 -->
    <div id="container2">
        <h2 class="content-title">Educational Videos</h2>
        <div class="content-container">
            <!-- Embedding video URLs -->
            <iframe src="<?php echo $url_6; ?>" frameborder="0" allowfullscreen></iframe>
            <iframe src="<?php echo $url_7; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Container 3 -->
    <div id="container3">
        <h2 class="content-title">Educational Articles</h2>
        <div class="content-container">
            <!-- Embedding article URLs -->
            <object type="text/html" data="<?php echo $url_8; ?>" class="articles"></object>
            <object type="text/html" data="<?php echo $url_9; ?>" class="articles"></object>
        </div>
    </div>
    <!-- Container 4 -->
    <div id="container4">
        <h2 class="content-title">Educational Infographics</h2>
        <div class="content-container">
            <!-- Embedding infographic URLs -->
            <object data="<?php echo $url_10; ?>" type="image/png" class="infographics"></object>
            <object data="<?php echo $url_11; ?>" type="image/png" class="infographics"></object>
        </div>
    </div>
</body>
<!-- Including JavaScript file -->
<script src="js/Educational_Content.js"></script>
</html>

<?php
    // Including footer
    include "html/footer.html";
?>
