<?php
    include "Header.html";
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
        <h1 class="head-title">Educational Content</h1>
        <p class="content">Understand how our actions impact the environment</p>
        <button>Learn</button>
    </div>
    <div id="container2">
        <h2 class="content-title">Educational Videos</h2>
        <div class="content-container">
            <iframe src="https://www.youtube.com/embed/8q7_aV8eLUE?si=_3yFmrfeZOxX0JtN" frameborder="0" allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/fStmxIfwXeI?si=HgyqEqTNABSmyKfM" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div id="container3">
        <h2 class="content-title">Educational Articles</h2>
        <div class="content-container">
            <object type="text/html" data="https://www.climate.gov/news-features/understanding-climate/climate-change-atmospheric-carbon-dioxide" class="articles"></object>
            <object type="text/html" data="https://www.nationalgeographic.com/environment/article/greenhouse-gases" class="articles">
            </object>
        </div>
    </div>
    <div id="container4">
        <h2 class="content-title">Educational Infographics</h2>
        <div class="content-container">
            <object data="https://www.easel.ly/blog/wp-content/uploads/2019/06/carbon-dioxide-emissions-whats-the-current-situation-like.png" type="image/png" class="infographics"></object>
            <object data="https://www.easel.ly/blog/wp-content/uploads/2019/06/Infographic-How-Your-Daily-Activities-Impact-the-Planet.jpg" type="image/png" class="infographics"></object>
        </div>
    </div>
</body>
</html>

<?php
    include "Footer.html";
?>