<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="../CSS/facebooklogin.css">
    <link rel="icon"
        href="https://thf.bing.com/th/id/OIP.QqTYsxjnv4_257JFzrcwlAHaHa?w=187&h=187&c=7&r=0&o=7&cb=thfc1&pid=1.7&rm=3">
</head>

<body class="fb">
    <div class="facebookfont">
        <h2 class="h2">facebook</h2>
        <h2 class="p1"> Connect with friends and the<br> world
            around you on facebook</h2>
    </div>

    <div class="div1">
        <form action="FUNCTIONS/Createuser.php" method="POST">
            <input id="email" name="email" type="text" class="text" placeholder="Email or phone Number"> <br> <br>

            <input id="password" name="password" type="password" class="password" placeholder="Password"> <br>

            <button type="submit" class="loginbutton">Log In</button> <br>
        </form>

        <p class="forgot">Forgot password?</p>
        <div class="IP"></div>

        <button class="createnewaccount"> 
            <a class="createhref" href="Createaccount.php">Create new Account</a> 
        </button>
    </div>
    <p class="underpar"><span class="TYPE" style="font-weight:bold;">Create a Page</span> for a celebrity, brand or business.</p>

</body>
<script src="../JS/Facebooklogin.js"></script>

</html>
