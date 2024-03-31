document.getElementById("button_1").addEventListener("click", function() {
    window.location.href = "../educational_content/educational_content_1.php";
});

document.getElementById("button_2").addEventListener("click", function() {
    window.location.href = "../educational_content/educational_content_2.php";
});

document.getElementById("button_3").addEventListener("click", function() {
    window.location.href = "../educational_content/educational_content_3.php";
});

document.getElementById("scroll").addEventListener("click", function() {
    var section = document.getElementById("Learn-More");
    section.scrollIntoView({ behavior: 'smooth' });
});