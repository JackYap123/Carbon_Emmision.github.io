<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbon & Spend Tracker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #2980b9, #2c3e50);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 500px;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            transition: transform 0.3s ease;

        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            color: #fff;
        }

        input[type="number"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: none;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
            background-color: rgba(255, 255, 255, 0.3);
            color: #333;
            font-size: 16px;
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        input[type="number"]:focus,
        select:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            background-color: rgba(255, 255, 255, 0.5);
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background-color: #2980b9;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2c3e50;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .form-group:before,
        .form-group:after {
            content: '';
            display: table;
            clear: both;
        }

        .form-group label {
            float: left;
            width: 100%;
        }

        .form-group input {
            float: left;
            width: calc(100% - 20px);
        }

        .form-group .addon {
            float: right;
            width: 20px;
            text-align: right;
        }

        .confirmation-form {
            display: none;
            max-width: 500px;
            padding: 30px;
            margin-left: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            flex-direction: column;
            align-items: center;
            position: relative;
            transition: transform 0.3s ease;
        }

        .confirmation-form.show {
            display: flex;
            flex-direction: column;
            align-items: center;
            transform: translateX(100%);
        }
        .confirmation-form p {
            margin-bottom: 10px;
        }

        .confirmation-form button {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            background-color: #2980b9;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .confirmation-form button:hover {
            background-color: #2c3e50;
        }
    </style>
</head>

<body>

    <div class="container" id="originalFormContainer">
        <h1>Submit Daily Carbon & Spend</h1>
        <form id="carbonForm" action="#" method="post">
            <div class="form-group">
                <label for="foodCarbon">Daily Food Carbon</label>
                <input type="number" id="foodCarbon" name="foodCarbon" required>
                <div class="addon">kg</div>
            </div>

            <div class="form-group">
                <label for="transportation">Daily Transportation Spend</label>
                <input type="number" id="transportation" name="transportation" required>
                <div class="addon">$</div>
            </div>

            <div class="form-group">
                <label for="electricSpend">Daily Electric Spend</label>
                <input type="number" id="electricSpend" name="electricSpend" required>
                <div class="addon">$</div>
            </div>

            <input type="submit" value="Submit" id="submitBtn" class="normal_Submit">
        </form>
    </div>

    <div class="confirmation-form" id="confirmationForm">
        <h1>Confirm Submission</h1>
        <form id="confirmForm">
            <div class="form-group">
                <label for="confirmedFoodCarbon">Daily Food Carbon</label>
                <input type="number" id="confirmedFoodCarbon" name="confirmedFoodCarbon" required disabled>
                <div class="addon">kg</div>
            </div>

            <div class="form-group">
                <label for="confirmedTransportation">Daily Transportation Spend</label>
                <input type="number" id="confirmedTransportation" name="confirmedTransportation" required disabled>
                <div class="addon">$</div>
            </div>

            <div class="form-group">
                <label for="confirmedElectricSpend">Daily Electric Spend</label>
                <input type="number" id="confirmedElectricSpend" name="confirmedElectricSpend" required disabled>
                <div class="addon">$</div>
            </div>
        </form>
        <button id="confirmBtn" type="submit">Confirm</button>
    </div>

    <script>
        const carbonForm = document.getElementById('carbonForm');
        const originalFormContainer = document.getElementById('originalFormContainer');
        const confirmationForm = document.getElementById('confirmationForm');
        const confirmBtn = document.getElementById('confirmBtn');
        const submitBtn = document.getElementById('submitBtn');
        const confirmedFoodCarbon = document.getElementById('confirmedFoodCarbon');
        const confirmedTransportation = document.getElementById('confirmedTransportation');
        const confirmedElectricSpend = document.getElementById('confirmedElectricSpend');
        const submitButton = document.getElementById('submitBtn');

        carbonForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form values
            const foodCarbonValue = document.getElementById('foodCarbon').value;
            const transportationValue = document.getElementById('transportation').value;
            const electricSpendValue = document.getElementById('electricSpend').value;

            // Populate confirmation form
            confirmedFoodCarbon.value = foodCarbonValue;
            confirmedTransportation.value = transportationValue;
            confirmedElectricSpend.value = electricSpendValue;

            // Move original form to the left
            originalFormContainer.style.transform = 'translateX(-20%)';
            // Display confirmation form
            confirmationForm.style.display = 'flex';
            submitButton.style.display = 'none';
            
        });

        confirmBtn.addEventListener('submit', function() {
            // Submit form if confirmed
            document.getElementById('confirmForm').submit();     
            originalFormContainer.style.display ='none';
            

        });

        
    </script>

</body>

</html>