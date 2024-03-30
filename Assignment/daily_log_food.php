<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/daily_log_food.css">
    <link rel="stylesheet" href="css/header_footer.css">

    <title>Food Tracker</title>
</head>


<body>
    <?php
    include_once("header.php");
    ?>
    <!-- Form 1 -->
    <div class="container">
        <form id="food-form" action="save_food.php" method="post" onsubmit="return validateAndSubmitForm()">
            <div id="page1" class="form-page active">
                <div class="row">
                    <div class="col">
                        <select id="diet-select" name="diet">
                            <option>Please Select Your Diet</option>
                            <option value="Omnivore">Omnivore</option>
                            <option value="Vegetarian">Vegetarian</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div id="meat-grams" class="row" style="display: none;">
                                <label for="meat">Meat (grams):</label>
                                <input type="number" id="meat" name="meat" min="0" placeholder="Please Enter Meat Gram">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div id="vegetable-grams" class="row" style="display: none;">
                                <label for="vegetable">Vegetable (grams):</label>
                                <input type="number" id="vegetable" name="vegetable" min="0" placeholder="Please Enter Vegetable Gram">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Have you wasted food?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="wasted_food" id="wasted-food-yes" value="Yes" onchange="showWasteInput()()">
                                <label class="form-check-label" for="wasted-food-yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="wasted_food" id="wasted-food-no" value="No" onchange="hideWasteInput()">
                                <label class="form-check-label" for="wasted-food-no">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div id="waste-row" class="row">
                                <label for="waste">Waste:</label>
                                <input type="text" id="waste" name="waste" placeholder="Please Enter Wasted Grams">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="button-design" onclick="nextPage1()">Next Page</button>
            </div>
            <!-- Form 2 -->
            <div id="page2" class="form-page" onsubmit="return validateForm()">
                <h2>Car Carbon Emission</h2>
                <!-- select transportation -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select id="car-select" name="car">
                                <option>Please Select Your Transpotation</option>
                                <option value="Car">Car</option>
                                <option value="Motorcycle">Motorcycle</option>
                                <option value="Public-Transport">Public Transport</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- select car type -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select id="car-type-select" name="CarType">
                                <option>Please Select Car type</option>
                                <option value="HatchBack">Hatchback</option>
                                <option value="Sedan">Sedan</option>
                                <option value="MUV-SUV">MUV/SUV</option>
                                <option value="Lorry">Lorry</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- select Car Gas -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select id="car-gas-select" name="Cargas">
                                <option>Please Select Car Gasoline</option>
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Hybird">Hybird</option>
                                <option value="Electric">Electric</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- select Road -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select id="car-road-select" name="Road">
                                <option>Please Select Road type</option>
                                <option value="MainRoad">Main Road</option>
                                <option value="highWay">High Way</option>
                                <option value="RuralRoads">Rural Roads</option>
                                <option value="Dash">Dash</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- select Motor Type -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select id="motor-type-select" name="motorType">
                                <option>Please Select Motor Type</option>
                                <option value="AC-motor">Alternating Current</option>
                                <option value="DC-motor">Direct Current</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- select Motor Oil -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select id="motor-gas-select" name="motorGas">
                                <option>Please Select Motor Gasoline</option>
                                <option value="Multigrade-Oil">Multigrade Oil</option>
                                <option value="Synthetic-Oil">Synthetic Oil</option>
                                <option value="High-Mileage-Oil">High Mileage Oil</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select id="pb-type-select" name="pbType">
                                <option>Please Select Public Transport Type</option>
                                <option value="Bus">Bus</option>
                                <option value="MRT">MRT</option>
                                <option value="LRT">LRT</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Submit distance -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div id="distance-meter" class="row">
                                <input type="number" id="Distance" name="Distance" min="0" placeholder="Please Enter Drive Distance">
                            </div>
                        </div>
                        <button type="button" class="button-design" onclick="prevPage1()">Previous</button>
                        <button type="button" class="button-design" onclick="nextPage2()">Next</button>
                    </div>
                </div>
            </div>
            <!-- Form 3 -->
            <div id="page3" class="form-page">
                <h2>Electrical Carbon Emission</h2>
                <div class="row">
                    <div class="col">
                        <div id="AMK" class="row">
                            <label for="avrageKHW">Submit Average khw (kilowatt per hours)</label>
                            <input type="number" id="avrageKHW" name="avrageKHW" min="0" placeholder="Exm: 1000">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="Time-Span-Hours" class="row">
                            <label for="TPH">Time Span(Months)</label>
                            <input type="number" id="TPH" name="TPH" min="0" placeholder="Exm: 12">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="Carbon-Intensity" class="row">
                            <label for="Carbon-Intensity">Carbon Intensity</label>
                            <input type="number" id="CI" name="CI" min="0" placeholder="Exm: 72">
                        </div>
                    </div>
                </div>
                <button type="button" class="button-design" onclick="prevPage2()">Previous</button>
                <button type="submit" class="button-design">submit</button>
            </div>
        </form>
    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>
    </div>
    <?php
        include_once("html/footer.html");
    ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="js/daily_log_food.js"></script>

</body>

</html>