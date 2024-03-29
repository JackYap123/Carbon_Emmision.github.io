<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("php/config.php");
session_start();




// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish connection to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carbon_emmision";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    $diet = $_POST['diet'];
    $meat = $_POST['meat'];
    $vegetable = $_POST['vegetable'];
    $wasted_food = $_POST['wasted_food'];
    $waste = isset($_POST['waste']) ? $_POST['waste'] : null;
    $transport = $_POST['car'];
    $car_type = $_POST['CarType'];
    $car_gas = $_POST['Cargas'];
    $road_type = $_POST['Road'];
    $motor_type = $_POST['motorType'];
    $motor_gas = $_POST['motorGas'];
    $public_transport_type = $_POST['pbType'];
    $drive_distance = isset($_POST['Distance']) ? $_POST['Distance'] : null;
    $average_kwh = isset($_POST['avrageKHW']) ? $_POST['avrageKHW'] : null;
    $time_span_months = isset($_POST['TPH']) ? $_POST['TPH'] : null;
    $carbon_intensity = isset($_POST['CI']) ? $_POST['CI'] : null;
    $food_total = 0;
    switch ($diet) {
        case 'Omnivore':
            $food_total = ($meat * 40) + ($vegetable * 0.3);

            if ($wasted_food === 'yes') {
                $food_total += ($waste * 47)/1000;
            } else {
                $food_total += 0/1000;
            }
            break;
        case 'Vegetarian':
            $food_total = ($vegetable * 0.3);

            if ($wasted_food === 'yes') {
                $food_total += ($waste * 10)/1000;
            } else {
                $food_total += 0/1000;
            }
            break;
    }

    $transport_total = 0;
    $type_number = 0;
    $gas_number = 0;
    $road_number = 0;
    $transport_number = 0;
    switch ($transport) {
        case 'Car':
            switch ($car_type) {
                case 'Hatchback':
                    $type_number = 150;
                    break;
                case 'Sedan':
                    $type_number = 180;
                    break;
                case 'MUV/SUV':
                    $type_number = 250;
                    break;
                case 'Lorry':
                    $type_number = 400;
                    break;
            }
            switch ($car_gas) {
                case 'Petrol':
                    $gas_number = 260;
                    break;
                case 'Diesel':
                    $gas_number = 310;
                    break;
                case 'Hybird':
                    $gas_number = 200;
                    break;
                case 'Electric':
                    $gas_number = 100;
                    break;
            }
            switch ($road_type) {
                case 'Main Road':
                    $road_number = 150;
                    break;
                case 'High Way':
                    $road_number = 200;
                    break;
                case 'Rural Roads';
                    $road_number = 120;
                    break;
                case 'Dash':
                    $road_number = 100;
                    break;
            }
            $transport_total = (($type_number * $drive_distance) + ($gas_number * $drive_distance) + ($road_number * $drive_distance)) / 1000;
            break;
        case 'Motorcycle':
            switch ($motor_type) {
                case 'Standard':
                    $type_number = 100;
                    break;
                case 'Sport':
                    $type_number = 120;
                    break;
            }
            switch ($motor_gas) {
                case 'Gasoline':
                    $gas_number = 230;
                    break;
                case 'Diesel':
                    $gas_number = 270;
                    break;
                case 'Propane':
                    $gas_number = 210;
                    break;
            }
            switch ($road_type) {
                case 'Main Road':
                    $road_number = 150;
                    break;
                case 'High Way':
                    $road_number = 200;
                    break;
                case 'Rural Roads';
                    $road_number = 120;
                    break;
                case 'Dash':
                    $road_number = 100;
                    break;
            }
            $transport_total = (($type_number * $drive_distance) + ($motor_gas * $drive_distance) + ($road_type * $drive_distance)) / 1000;
            break;
        case 'Public-Transport':
            switch ($public_transport_type) {
                case 'Bus':
                    $type_number = 150;
                    break;
                case 'MRT':
                    $type_number = 50;
                    break;
                case 'LRT':
                    $type_number = 60;
                    break;
                default:
                    break;
            }
            $transport_total = ($type_number * $drive_distance) / 1000;
            break;
        default:
            break;
    }

    $Total_KHW = $average_kwh * $time_span_months;
    $Total_Time_Span = $carbon_intensity * $average_kwh /($time_span_months * 30);
    $Total_Time_Span_Month = $Total_Time_Span * $time_span_months;
    $id = $_SESSION['user_Id'];


    // Insert data into the database
    $sql = "INSERT INTO food_carbon_emission (diet, meat, vegetable, wasted_food, waste, car_type, car_gas, road_type, motor_type, motor_gas, public_transport_type, drive_distance, average_kwh, time_span_months, carbon_intensity,food_total, transport_total, Total_KHW, Total_Time_Span, Total_Time_Span_Month, user_Id)
        VALUES ('$diet', '$meat', '$vegetable', '$wasted_food', '$waste', '$car_type', '$car_gas', '$road_type', '$motor_type', '$motor_gas', '$public_transport_type', '$drive_distance', '$average_kwh', '$time_span_months', '$carbon_intensity', '$food_total', '$transport_total','$Total_KHW', '$Total_Time_Span', '$Total_Time_Span_Month','$id')";

    if ($conn->query($sql) === TRUE) {

        // Set $total_food in a session variable
        $_SESSION['food_total'] = $food_total;
        $_SESSION['transport_total'] = $transport_total;
        $_SESSION['Total_KHW'] = $Total_KHW;
        $_SESSION['Total_Time_Span'] = $Total_Time_Span;
        $_SESSION['Total_Time_Span_Month'] = $Total_Time_Span_Month;


        header("Location: historical.php?");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
