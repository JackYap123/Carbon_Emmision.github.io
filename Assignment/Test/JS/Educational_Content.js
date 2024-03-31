document.getElementById("button_1").addEventListener("click", function() {
    window.location.href = "../Test/Educational_Content_1.php";
});

document.getElementById("button_2").addEventListener("click", function() {
    window.location.href = "../Test/Educational_Content_2.php";
});

document.getElementById("button_3").addEventListener("click", function() {
    window.location.href = "../Test/Educational_Content_3.php";
});

document.getElementById("scroll").addEventListener("click", function() {
    var section = document.getElementById("Learn-More");
    section.scrollIntoView({ behavior: 'smooth' });
});