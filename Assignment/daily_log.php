<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            padding: 5px;
            margin-right: 10px;
        }
        #food-list {
            list-style-type: none;
            padding: 0;
        }
        .food-item {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php
        include_once("Header.php");
    ?>
    
    <form id="food-form" action="save_food.php" method="post" style="margin-top: 200px;">
        <h1>Food Tracker</h1>
        <input type="text" id="description-input" name="scription" placeholder="Enter Description">
        <input type="text" id="food-input" name="food" placeholder="Enter food">
        <input type="number" id="grams-input" name="grams" placeholder="Enter grams">
        <input type="submit" value="Submit">
    </form>
    
    <ul id="food-list"></ul>

    <script>
        // You can include JavaScript if you want some interactivity
    </script>
</body>
</html>
