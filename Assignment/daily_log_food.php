<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Food Tracker</title>
    <style>
        .container {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            padding-top: 150px;
            text-align: center;
        }

        #food-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            max-height: 500px;
            height: 100%;
            width: 100%;
            text-align: center;
            align-items: center;
            margin-left: 30%;
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

        .form-group p {
            margin-bottom: 0.5rem;
        }

        .form-check-label {
            margin-right: 1rem;
        }

        .hidden {
            display: none;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .form-page {
            display: none;
        }

        .form-page.active {
            display: block;
        }

        .form-nav {
            text-align: center;
            margin-bottom: 20px;
        }

        .button-design {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            outline: none;
        }



        .form-nav button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-nav button.active {
            background-color: #0056b3;
        }

        /* Drop down function */
        select {
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 300px;
        }

        select .option {
            font-size: 14px;
        }

        /* button function */
    </style>
</head>


<body>
    <?php
    include_once("Header.php");
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

    <script>
        // This is for the food carbon
        document.getElementById("diet-select").addEventListener("change", function() {
            var selectedValue = this.value;
            var meatRow = document.getElementById("meat-grams");
            var vegRow = document.getElementById("vegetable-grams");
            var wasteRow = document.getElementById("waste-row");


            if (selectedValue === "Omnivore") {
                meatRow.style.display = "block";
                vegRow.style.display = "block";
                wasteRow.style.display = "none";
            } else if (selectedValue === "Vegetarian") {
                meatRow.style.display = "none";
                vegRow.style.display = "block";
                wasteRow.style.display = "none";
            } else {
                meatRow.style.display = "none";
                vegRow.style.display = "none";
            }
        });

        //This is for the car carbon item will be appear or disappear function
        document.getElementById("car-select").addEventListener("change", function() {
            var selectedValued = this.value;
            var carGas = document.getElementById("car-gas-select");
            var carType = document.getElementById("car-type-select");
            var carRaod = document.getElementById("car-road-select");
            var motorGas = document.getElementById("motor-gas-select");
            var motorType = document.getElementById("motor-type-select");
            var pbType = document.getElementById("pb-type-select");
            var distance = document.getElementById("distance-meter");

            if (selectedValued === "Car") {
                carGas.style.display = "block";
                carType.style.display = "block";
                carRaod.style.display = "block";
                motorGas.style.display = "none";
                motorType.style.display = "none";
                distance.style.display = "block";
                pbType.style.display = "none";
                document.getElementById("motor-type-select").selectedIndex = 'Please Select Motor Type';
                document.getElementById("motor-gas-select").selectedIndex = 'Please Select Motor Gasoline';
                document.getElementById("car-road-select").selectedIndex = 'Please Select Road type';
                document.getElementById("distance-meter").selectedIndex = "";
            } else if (selectedValued === "Motorcycle") {
                motorGas.style.display = "block";
                motorType.style.display = "block";
                carRaod.style.display = "block";
                carGas.style.display = "none";
                carType.style.display = "none";
                distance.style.display = "block";
                pbType.style.display = "none";
                document.getElementById("car-type-select").selectedIndex = 'Please Select Your Transpotation';
                document.getElementById("car-gas-select").selectedIndex = 'Please Select Car type';
                document.getElementById("car-road-select").selectedIndex = 'Please Select Road type';
                document.getElementById("distance-meter").selectedIndex = "";
            } else if (selectedValued === "Public-Transport") {
                pbType.style.display = "block";
                distance.style.display = "block";
                carGas.style.display = "none";
                carType.style.display = "none";
                carRaod.style.display = "none";
                motorGas.style.display = "none";
                motorType.style.display = "none";
            } else {
                carGas.style.display = "none";
                carType.style.display = "none";
                carRaod.style.display = "none";
                motorGas.style.display = "none";
                distance.style.display = "none";
                motorType.style.display = "none";
                pbType.style.display = "none";

            }
        });
        // When choose lorry the 
        document.getElementById("car-type-select").addEventListener("change", function() {
            var carGasSelect = document.getElementById("car-gas-select");
            var selectedCarType = this.value;
            var selectedCarGas = carGasSelect.value;

            if (selectedCarType === "Lorry") {
                if (selectedCarGas !== "Diesel") {
                    carGasSelect.value = "Diesel";
                }
                carGasSelect.disabled = true;
            } else {
                carGasSelect.disabled = false;
            }
        });
        document.getElementById("car-gas-select").addEventListener("change", function() {
            var carTypeSelect = document.getElementById("car-type-select");
            var selectedCarType = carTypeSelect.value;

            if (selectedCarType === "Lorry") {
                if (this.value !== "Diesel") {
                    this.value = "Diesel";
                }
            }
        });


        //food radio button when you choose yes, it will display out the blank of wasted food, you need to submit it.
        function showWasteInput() {
            var wasteRow = document.getElementById('waste-row');
            wasteRow.style.display = 'block';
            var wasteLabel = document.getElementById('waste-label');
            wasteLabel.style.display = 'block';
        }
        //food radio button when you choose no, it won't show you anything.
        function hideWasteInput() {
            var wasteRow = document.getElementById('waste-row');
            wasteRow.style.display = 'none';
            var wasteLabel = document.getElementById('waste-label');
            wasteLabel.style.display = 'none';
        }
        //First page go to the second page
        function nextPage1() {
            if (validateFormFood()) {
                document.getElementById('page1').classList.remove('active');
                document.getElementById('page2').classList.add('active');
                document.getElementById('page1-btn').classList.remove('active');
                document.getElementById('page2-btn').classList.add('active');
            } else {
                alert("Please fill out all required fields before proceeding.");
            }
        }
        // Second Page go back to the first page
        function prevPage1() {
            document.getElementById('page2').classList.remove('active');
            document.getElementById('page1').classList.add('active');
            document.getElementById('page2-btn').classList.remove('active');
            document.getElementById('page1-btn').classList.add('active');
        }

        function nextPage2() {
            if (validateFormTransportation()) {
                document.getElementById('page2').classList.remove('active');
                document.getElementById('page3').classList.add('active');
                document.getElementById('page2-btn').classList.remove('active');
                document.getElementById('page3-btn').classList.add('active');
            }
        }

        function prevPage2() {
            document.getElementById('page3').classList.remove('active');
            document.getElementById('page2').classList.add('active');
            document.getElementById('page3-btn').classList.remove('active');
            document.getElementById('page2-btn').classList.add('active');
        }

        //The first page if havn't submit all of the part, you couldn't go to the next page
        function validateAndSubmitForm() {
            if (validateFormFood()) { // If form validation passes
                nextPage1(); // Navigate to the next page
                return true;
            } else {
                alert("Please fill out all required fields before proceeding.");
                return false;
            }
        }
        // Function to reset form values and display states
        function resetForm() {
            // Reset first form (diet-select)
            document.getElementById("meat-grams").style.display = "none";
            document.getElementById("vegetable-grams").style.display = "none";
            document.getElementById("waste-row").style.display = "none";
            // Reset second form (car-select)
            document.getElementById("car-gas-select").style.display = "none";
            document.getElementById("car-type-select").style.display = "none";
            document.getElementById("car-road-select").style.display = "none";
            document.getElementById("motor-gas-select").style.display = "none";
            document.getElementById("motor-type-select").style.display = "none";
            document.getElementById("distance-meter").style.display = "none";
            document.getElementById("pb-type-select").style.display = "none";

        }

        // Call resetForm function when the page loads
        window.addEventListener("load", resetForm);

        //To make sure all the part of grams, select box, radio box, and wasted food gram have been submitted.
        function validateFormFood() {
            var dietSelect = document.getElementById('diet-select');
            var meatInput = document.getElementById('meat');
            var vegetableInput = document.getElementById('vegetable');
            var wastedFoodYes = document.getElementById('wasted-food-yes');
            var wastedFoodNo = document.getElementById('wasted-food-no');
            var wasteInput = document.getElementById('waste');

            // Check if diet is selected
            if (dietSelect.value == "Please Select Your Diet") {
                alert("Please select your diet.");
                return false;
            }

            // Check if diet is Omnivore and both meat and vegetable grams are provided
            if (dietSelect.value == "Omnivore") {
                if (meatInput.value == "" || vegetableInput.value == "") {
                    alert("Please provide both meat and vegetable grams for an Omnivore diet.");
                    return false;
                }
            }

            // Check if diet is Vegetarian and vegetable grams are provided
            if (dietSelect.value == "Vegetarian" && vegetableInput.value == "") {
                alert("Please provide vegetable grams for a Vegetarian diet.");
                return false;
            }

            // Check if wasted food radio button is selected
            if (!wastedFoodYes.checked && !wastedFoodNo.checked) {
                alert("Please indicate if you have wasted food.");
                return false;
            }

            // Check if wasted food is selected as Yes and waste grams are provided
            if (wastedFoodYes.checked && wasteInput.value == "") {
                alert("Please provide waste grams.");
                return false;
            }

            // Form validation passed
            return true;
        }

        function validateFormTransportation() {
            var carSelect = document.getElementById("car-select").value;
            var carTypeSelect = document.getElementById("car-type-select").value;
            var carGasSelect = document.getElementById("car-gas-select").value;
            var carRoadSelect = document.getElementById("car-road-select").value;
            var motorTypeSelect = document.getElementById("motor-type-select").value;
            var motorGasSelect = document.getElementById("motor-gas-select").value;
            var pbTypeSelect = document.getElementById("pb-type-select").value;
            var distance = document.getElementById("Distance").value;

            // || carTypeSelect == "Please Select Car type" || carGasSelect == "Please Select Car Gasoline" || carRoadSelect == "Please Select Road type" || motorTypeSelect == "Please Select Motor Type" || motorGasSelect == "Please Select Motor Gasoline" || pbTypeSelect == "Please Select Public Transport Type" || distance == ""

            if (carSelect == "Please Select Your Transpotation") {
                alert("Please Field Out the transpotation");
                return false;

            } else if (carSelect == "Car") {
                if (carTypeSelect == "Please Select Car type" || carGasSelect == "Please Select Car Gasoline" || carRoadSelect == "Please Select Road type" || distance == "") {
                    alert("Please Field Out the All the car section");
                    return false;
                }
            } else if (carSelect == "Motorcycle") {
                if (motorTypeSelect == "Please Select Motor Type" || motorGasSelect == "Please Select Motor Gasoline" || carRoadSelect == "Please Select Road type" || distance == "")
                    alert("Please Field Out the All the Motorcycle section");
                return false;
            } else if (carSelect == "Public Transport") {
                if (pbTypeSelect == "Please Select Public Transport Type" || distance == "")
                    pbTypeSelect == "Please Select Public Transport Type";
            }
            return true;
        }
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>