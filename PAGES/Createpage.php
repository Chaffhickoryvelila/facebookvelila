<!DOCTYPE html>
<html lang="en">
<?php
      include "resources/header.php";
?>
<body>
    <?php 
     include "RESOURCES/Navigation.php";
    ?>

    <!--Contents --> 

    <div> 

    <h1>Create User</h1>
    <form action="FUNCTIONS/Createuser.php" method="POST">
        <label for="">Name</label>
        <input type="text" name = "user_name">
        <label for="">Age</label>
        <input type="number" name = "user_age">
        <label for="">Address</label>
        <input type="text" name = "user_address">

        <button>Submit</button>

    </form>
    </div>

    <div> 

    <h1>Products</h1>
    <form action="FUNCTIONS/Products.php" method="POST">
        <label for="">Product Name</label> 
        <input type="text" name = "prod_name">
        <label for="">Product Quantity</label> 
        <input type="number" name = "prod_quantity">
        <label for="">Type of Product</label> 
        <input type="text" name = "prod_type">
         <label for="">Price of Product</label> 
        <input type="number" name = "prod_price">
        <label for="">Product Date</label> 
        <input type="date" name = "prod_date_added">
        <button>Submit</button>

    </form>
    </div>
</body>
</html>