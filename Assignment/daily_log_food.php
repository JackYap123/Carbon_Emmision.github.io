<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Tracker</title>
    <style>
       .dialog_body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #food-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }

        #food-form h2 {
            margin-bottom: 30px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #4caf50;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.3);
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
        <?php
            include_once("Header.php");
        ?>
<body class="dialog_body">
   <div class="container"></div>
     
    
    <form id="food-form" action="save_food.php" method="post" >
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
