<?php
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Educational_Content</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
    </style>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Educational Content Admin Page</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="category">Topic:</label>
                <select class="form-control" name="category" id="category">
                    <option value="empty"></option>
                    <option value="main_content">Educational Content</option>
                    <option value="3R">Reduce, Reuse, Recycle</option>
                    <option value="conserve_energy">Conserve Energy</option>
                    <option value="reduce_your_carbon_footprint">Reduce Your Carbon Footprint</option>
                </select>
            </div>
            <div class="form-group">
                <label for="resource">Resource:</label>
                <select class="form-control" name="resource" id="resource">
                    <option value="empty"></option>
                    <option value="video1">Video 1</option>
                    <option value="video2">Video 2</option>
                    <option value="article1">Article 1</option>
                    <option value="article2">Article 2</option>
                    <option value="infographic1">Infographic 1</option>
                    <option value="infographic2">Infographic 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="URL">URL:</label>
                <input type="text" class="form-control" id="URL" name="URL">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JS and jQuery (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category = $_POST["category"];
        $resource = $_POST["resource"];
        $url = $_POST["URL"];
        $store = array(array(1,2,3,4,5,6), array(7,8,9,10,11,12), array(13,14,15,16,17,18), array(19,20,21,22,23,24));

        if (isset($category)  && isset($resource) && isset($url) &&  $category != "empty" && $resource != "empty") {
            switch ($category) {
                case 'main_content' :
                    $sql_up = update($store[0], $resource, $url);
                    break;

                case '3R':
                    $sql_up = update($store[1], $resource, $url);
                    break;

                case 'conserve_energy':
                    $sql_up = update($store[2], $resource, $url);
                    break;

                case 'reduce_your_carbon_footprint':
                    $sql_up = update($store[3], $resource, $url);
                    break;
            }
            mysqli_query($conn, $sql_up);
            echo "<script>alert('Form submitted successfully!');</script>";
            
        }else {echo "<script>alert('One or more option is empty!');</script>";}
    }

    function update($store, $resource, $url){
        switch ($resource) {
            case 'video1':
                $sql_up = ("UPDATE `educational_content` SET `url` = '$url' WHERE `id` = " . ($store[0]));
                break;

            case 'video2':
                $sql_up = ("UPDATE `educational_content` SET `url` = '$url' WHERE `id` = " . ($store[1]));
                break;

            case 'article1':
                $sql_up = ("UPDATE `educational_content` SET `url` = '$url' WHERE `id` = " . ($store[2]));
                break;

            case 'article2':
                $sql_up = ("UPDATE `educational_content` SET `url` = '$url' WHERE `id` = " . ($store[3]));
                break;

            case 'infographic1':
                $sql_up = ("UPDATE `educational_content` SET `url` = '$url' WHERE `id` = " . ($store[4]));
                break;

            case 'infographic2':
                $sql_up = ("UPDATE `educational_content` SET `url` = '$url' WHERE `id` = " . ($store[5]));
                break;
        }
        return $sql_up;
    }
?>