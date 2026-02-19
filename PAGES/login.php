<?php
if (isset($_GET['status']) && $_GET['status'] == "false") {
    echo "<script> alert('Username and Password is incorrect')</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaff Hickory Velila</title>
    <link rel="stylesheet" href="../CSS/Login.css">


    <style>
        body {
            background-image: url("http://www.pixelstalk.net/wp-content/uploads/2016/03/Free-download-Nature-wallpaper-HD.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            overflow-x: hidden;
        }
    </style>

</head>

<body>

    <div class="header">
        <h1>Website Login</h1>
    </div>

    <div class="div2">
        <form class="form" form action="FUNCTIONS/LoginFunction.php" method="POST">

            <label for="username">Username</label>
            <input type="text" id="username" class="username" name="username">

            <label for="password">Password</label>
            <div class="password-wrapper">
                <input type="password" id="password" class="password" name="password">
                <button type="button" class="toggle-btn" onclick="togglePassword()">👁</button>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const btn = document.querySelector(".toggle-btn");

            if (password.type === "password") {
                password.type = "text";
                btn.textContent = "◎";
            } else {
                password.type = "password";
                btn.textContent = "👁";
            }
        }
    </script>

</body>

</html>