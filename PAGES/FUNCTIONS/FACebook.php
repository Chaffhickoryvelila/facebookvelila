<?php
if(isset($_GET['status']) && $_GET['status'] == "false"){
    echo "<script>alert('Username and Password is incorrect');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Login</title>
    <link rel="stylesheet" href="../CSS/facebook.css">
</head>

<body class="fb">

    <!-- Left Side -->
    <div class="facebookfont">
        <h2 class="h2">Chaff Hickory Velila</h2>
        <h2 class="p1">
            Connect with friends and the<br>
            world around you on our website.
        </h2>
    </div>

    <!-- Login Card -->
    <div class="div1">
        <form action="FUNCTIONS/LoginFunction.php" method="POST">

            <input type="text" name="username" class="text"
                   placeholder="Email or phone number" required>

            <div class="password-wrapper">
                <input type="password" name="password"
                       id="password" class="password"
                       placeholder="Password" required>

                <button type="button"
                        class="toggle-btn"
                        onclick="togglePassword()">👁</button>
            </div>

            <button type="submit" class="loginbutton">Log In</button>

            <p class="forgot">Forgot password?</p>

            <div class="IP"></div>

            <button type="button" class="createnewaccount">
                Create New Account
            </button>

        </form>
    </div>

    <p class="underpar">
        <span class="TYPE" style="font-weight:bold;">Create a Page</span>
        for a celebrity, brand or business.
    </p>

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
