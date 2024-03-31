<?php
    // Database connection parameters
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "carbon_emmision";

    // Attempting database connection
    try {
        $con = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception) {
        // Displaying an error message if connection fails
        echo "Could not connect!!!";
    }
?>
