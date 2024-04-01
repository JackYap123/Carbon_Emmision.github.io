<?php
    include "database.php";
    include "header.php";
    include "url_loader.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Content</title>
    <link rel="stylesheet" href="css/educational_content.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div style="height: 7.5em;"></div>
    <div id="container1">
        <h1 class="head-title">Educational Content</h1>
        <p class="content">Understand how our actions impact the environment</p>
        <button id="scroll">Learn More</button>
    </div>
    <div id="container2">
        <h2 class="content-title">Educational Videos</h2>
        <div class="content-container">
            <iframe src="<?php echo $url_0; ?>" frameborder="0" allowfullscreen></iframe>
            <iframe src="<?php echo $url_1; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div id="container3">
        <h2 class="content-title">Educational Articles</h2>
        <div class="content-container">
            <object type="text/html" data="<?php echo $url_2; ?>" class="articles"></object>
            <object type="text/html" data="<?php echo $url_3; ?>" class="articles">
            </object>
        </div>
    </div>
    <div id="container4">
        <h2 class="content-title">Educational Infographics</h2>
        <div class="content-container">
            <object data="<?php echo $url_4; ?>" type="image/png" class="infographics"></object>
            <object data="<?php echo $url_5; ?>" type="image/png" class="infographics"></object>
        </div>
    </div>
    <section id="Learn-More">
        <div id="container5">
            <h2 class="content-title">Learn More</h2>
            <div style="display:flex; justify-content: center;">
                <button id="button_1" class="button_spacing">Reduce, Reuse, Recycle</button>
                <button id="button_2" class="button_spacing">Conserve Energy</button>
                <button id="button_3" class="button_spacing">Reduce Your Carbon Footprint</button>
            </div>
        </div>
    </section>
</body>
<script src="js/Educational_Content.js"></script>
</html>

<?php
    include "html/footer.html";
?>