<?php
    include ("Header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Content</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/Educational_Content.css">
</head>
<body>
    <div style="height: 5em;"></div>
    <div class="container1">
        <h1 id="title1">Educational Content</h1>
        <p class="content">Understand how our action impact the enviroment</p>
        <button>Learn</button>
    </div>
    <div class="container2">
        <h2 id="title2">Educational Video</h2>
        <div class="content-container">
            <iframe src="https://www.youtube.com/embed/8q7_aV8eLUE?si=_3yFmrfeZOxX0JtN" frameborder="0" allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/fStmxIfwXeI?si=HgyqEqTNABSmyKfM" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="content-container">
            <object type="text/html" data="https://www.nationalgeographic.com/environment/article/greenhouse-gases" class="articles">
            </object>
        </div>
    </div>
    
</body>
</html>

<?php
    include ("Footer.html");
?>