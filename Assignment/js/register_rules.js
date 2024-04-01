document.getElementById("registration_form").addEventListener("submit", function(event){
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var age = document.getElementById("age").value;
    
    if (!username) {
        alert("Please enter your name");
        event.preventDefault();
        return;
    }
    
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        event.preventDefault();
        return;
    }

    if (isNaN(age) || age < 1 || age > 150) {
        alert("Please enter a valid age");
        event.preventDefault();
        return;
    }
});
