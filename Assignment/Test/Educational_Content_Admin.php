<?php
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Educational_Content</title>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</head>
<body>
    <H1>Educational Content Admin Page</H1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Topic: </label>
        <select name="category">
            <option value="empty"></option>
            <option value="main_content">Educational Content</option>
            <option value="3R">Reduce, Reuse, Recycle</option>
            <option value="conserve_energy">Conserve Energy</option>
            <option value="reduce_your_carbon_footprint">Reduce Your Carbon Footprint</option>
        </select><br>
        <label>Resource: </label>
        <select name="resource">
            <option value="empty"></option>
            <option value="video1">Video 1</option>
            <option value="video2">Video 2</option>
            <option value="article1">Article 1</option>
            <option value="article2">Article 2</option>
            <option value="infographic1">Infographic 1</option>
            <option value="infographic2">Infographic 2</option>
        </select><br>
        <label>URL: </label>
        <input type="text" name="URL">
        <br><input type="submit" name="submit">
    </form>
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
            echo "Done";
        }else {echo "One or more of the option/s is empty";}
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