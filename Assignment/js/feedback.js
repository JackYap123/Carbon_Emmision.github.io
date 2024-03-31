document.getElementById("scroll").addEventListener("click", function() {
    // Smooth scrolling to the section with id "container5" when "scroll" element is clicked.
    var section = document.getElementById("container5");
    section.scrollIntoView({ behavior: 'smooth' });
});