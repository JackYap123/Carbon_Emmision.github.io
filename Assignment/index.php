<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <form id="loginForm" action="index.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="button" onclick="submitForm()">Login</button>
        </form>
    </div>

    <script>
        function submitForm() {
            document.getElementById("loginForm").submit();
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // 进行后端验证逻辑，这里只是简单的示例
        // 实际中需要更加复杂的安全措施，如哈希密码等

        if ($username == "example" && $password == "password") {
            echo "<p>Login successful!</p>";
        } else {
            echo "<p>Login failed. Invalid username or password.</p>";
        }
    }
    ?>
</body>
</html>
