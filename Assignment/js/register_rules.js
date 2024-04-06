function validateForm() {
    var username = document.getElementById('username').value.trim();
    var email = document.getElementById('email').value.trim();
    var password = document.getElementById('password').value.trim();
    var age = parseInt(document.getElementById('age').value.trim());

    // Perform your validation checks here
    if (username === "" || email === "" || password === "" || isNaN(age)) {
        alert("Please fill out all fields correctly.");
        return false; // Prevent form submission
    }
    if (username === "") {
        document.getElementById('username').innerText = "Please enter your username";
        return false;
    } else {
        document.getElementById('username').innerText = "";
    }
    // Email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return false;
    } else {
        document.getElementById('email').innerText = "";
    }

    // Password validation
    var passwordRegex = /^(?=.*\d)(?=.*[a-zA-Z])(?=.*\W).{8,}$/;
    if (!passwordRegex.test(password)) {
        alert("Password must have at least 8 characters including at least one number, one alphabet, and one special character");
        return false;
    } else {
        document.getElementById('password').innerText = "";
    }
    // Age validation
    if (isNaN(age) || age < 14 || age > 100) {
        alert("Please enter a valid age between 14 and 100");
        return false;
    } else {
        document.getElementById('age').innerText = "";
    }
    return true; // Allow form submission if all validations pass
}

function showPasswordRequirements() {
    var tooltip = document.createElement("div");
    tooltip.className = "tooltip right";
    tooltip.innerHTML = "Password must have at least 8 characters including at least one number, one alphabet, and one special character";

    var icon = document.querySelector(".info-icon");
    icon.parentNode.insertBefore(tooltip, icon.nextSibling);
}

function showAgeRequirements() {
    var tooltip = document.createElement("div");
    tooltip.className = "tooltip right";
    tooltip.innerHTML = "Age must be a number between 14 and 100.";

    var icon = document.querySelector(".info-icon-1");
    icon.parentNode.insertBefore(tooltip, icon.nextSibling);
}

function hideRequirements() {
    var tooltips = document.querySelectorAll(".tooltip");
    tooltips.forEach(function (tooltip) {
        tooltip.parentNode.removeChild(tooltip);
    });
}


