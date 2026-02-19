<?php
if (isset($_GET['status']) && $_GET['status'] == "false") {
    echo "<script>alert('There was an error submitting the form')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/facebook.css">
    <title>Create Account</title>
</head>

<body>

    <div class="container">

        <div class="left">
            <h1>facebook</h1>
            <p>Connect with friends and the world around you.</p>
        </div>

        <div class="right">
            <div class="form-box">

                <form action="FUNCTIONS/Facebookcreateuser.php" method="POST">

                    <input type="text" name="username" placeholder="Username">
                    <input type="email" name="email" placeholder="Email">

                    <input type="text" name="firstname" placeholder="First Name">
                    <input type="text" name="lastname" placeholder="Last Name">

                    <input type="tel" name="mobile" placeholder="Mobile Number">

                    <input type="date" name="birthday">

                    <select name="gender">
                        <option value="">Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>

                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" placeholder="Password">
                        <button type="button" class="toggle-btn" onclick="togglePassword()">👁</button>
                    </div>


                    <input type="password" name="confirmpass" placeholder="Confirm Password">

                    <button class="register-btn">Create Account</button>

                </form>

                <div class="footer-text">
                    <a href="Facebooklogin.php">Already have an account?</a>
                </div>

            </div>
        </div>

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