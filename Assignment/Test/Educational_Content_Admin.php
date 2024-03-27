<?php
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Educational_Content</title>
</head>
<body>
    <H1>Educational Content Admin Page</H1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <select name="category">
            <option value="educational_content">Educational Content</option>
            <option value="3R">Reduce, Reuse, Recycle</option>
            <option value="conserve_energy">Conserve Energy</option>
            <option value="reduce_your_carbon_footprint">Reduce Your Carbon Footprint</option>
        </select><br>
        <select name="resource">
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
    }
?>