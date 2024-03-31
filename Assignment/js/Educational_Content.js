// Adding event listeners to buttons for redirection and smooth scrolling functionality.

document.getElementById("button_1").addEventListener("click", function() {
    // Redirecting to Educational_Content_1.php when button_1 is clicked.
    window.location.href = "/Carbon_Emmision.github.io/Assignment/Educational_Content_1.php";
    window.scrollTo(0, 0);
});

document.getElementById("button_2").addEventListener("click", function() {
    // Redirecting to Educational_Content_2.php when button_2 is clicked.
    window.location.href = "/Carbon_Emmision.github.io/Assignment/Educational_Content_2.php";
    window.scrollTo(0, 0);
});

document.getElementById("button_3").addEventListener("click", function() {
    // Redirecting to Educational_Content_3.php when button_3 is clicked.
    window.location.href = "/Carbon_Emmision.github.io/Assignment/Educational_Content_3.php";
    window.scrollTo(0, 0);
});

document.getElementById("scroll").addEventListener("click", function() {
    // Smooth scrolling to the section with id "Learn-More" when "scroll" element is clicked.
    var section = document.getElementById("Learn-More");
    section.scrollIntoView({ behavior: 'smooth' });
});
