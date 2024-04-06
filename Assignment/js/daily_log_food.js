document.getElementById("diet-select").addEventListener("change", function () {
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
document.getElementById("car-select").addEventListener("change", function () {
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
document.getElementById("car-type-select").addEventListener("change", function () {
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
document.getElementById("car-gas-select").addEventListener("change", function () {
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
var currentPage = 1;
var totalPages = 4;
function updateProgressBar() {
    var progress = Math.ceil((currentPage / totalPages) * 100);
    document.getElementById("progress-bar").style.width = progress + "%";
    document.getElementById("progress-bar").innerHTML = progress + "%";
}


//First page go to the second page
function nextPage1() {
    if (validateFormFood()) {
        document.getElementById('page1').classList.remove('active');
        currentPage++;
        document.getElementById('page2').classList.add('active');
        updateProgressBar();
        document.getElementById('page1-btn').classList.remove('active');
        document.getElementById('page2-btn').classList.add('active');

    } else {
        alert("Please fill out all required fields before proceeding.");
    }
}
// Second Page go back to the first page
function prevPage1() {
    document.getElementById('page2').classList.remove('active');
    currentPage--;
    document.getElementById('page1').classList.add('active');
    updateProgressBar();
    document.getElementById('page2-btn').classList.remove('active');
    document.getElementById('page1-btn').classList.add('active');
}

function nextPage2() {
    if (validateFormTransportation()) {
        document.getElementById('page2').classList.remove('active');
        currentPage++;
        document.getElementById('page3').classList.add('active');
        updateProgressBar();
        document.getElementById('page2-btn').classList.remove('active');
        document.getElementById('page3-btn').classList.add('active');
    } else {
        alert("Please fill out all required fields before proceeding.");
    }
}

function prevPage2() {
    document.getElementById('page3').classList.remove('active');
    currentPage--;
    document.getElementById('page2').classList.add('active');
    updateProgressBar();
    document.getElementById('page3-btn').classList.remove('active');
    document.getElementById('page2-btn').classList.add('active');
}

//The first page if havn't submit all of the part, you couldn't go to the next page

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

    if (carSelect == "Please Select Your Transpotation") {
        alert("Please Field Out the transpotation");
        return false;

    } else if (carSelect == "Car") {
        if (carTypeSelect == "Please Select Car type" || carGasSelect == "Please Select Car Gasoline" || carRoadSelect == "Please Select Road type" || distance == "") {
            alert("Please Field Out the All the car section");
            return false;
        }
    } else if (carSelect == "Motorcycle") {
        if (motorTypeSelect == "Please Select Motor Type" || motorGasSelect == "Please Select Motor Gasoline" || carRoadSelect == "Please Select Road type" || distance == ""){
            alert("Please Field Out the All the Motorcycle section");
            return false;
        }
    } else if (carSelect == "Public-Transport") {
        if (pbTypeSelect == "Please Select Public Transport Type" || distance == ""){
            alert("Please Field Out the All the Public Transport Type section");
            return false;
        }
    }
    return true;
}