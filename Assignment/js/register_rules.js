document.getElementById("registration_form").addEventListener("submit", function(event){
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var age = document.getElementById("age").value;
    
    // 名字不能为空
    if (!username) {
        alert("Please enter your name");
        event.preventDefault();
        return;
    }
    
    // 邮箱格式验证
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        event.preventDefault();
        return;
    }

    // 年龄必须是数字且在合理范围内
    if (isNaN(age) || age < 1 || age > 150) {
        alert("Please enter a valid age");
        event.preventDefault();
        return;
    }
});
