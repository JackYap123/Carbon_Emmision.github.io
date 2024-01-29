
document.addEventListener("DOMContentLoaded", function() {
    // 获取所有烟雾动画容器
    var smokeContainer = document.querySelector(".smoke-container");

    // 监听烟雾动画的结束事件
    smokeContainer.addEventListener("animationiteration", function() {
        window.location.href = "main_Page.html"; // 请替换为你的主页URL
    });
});