<?php
include "../CONFIG/includes.php";

if (isset($_GET['prod_id'])) {
    $product = getProduct($_GET['prod_id']);
    $type = "product";
} else {
    echo "<script> window.location.href ='Retrievepage.php' </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
include "resources/header.php";
?>

<body>
    <?php
    include "RESOURCES/Navigation.php";
    ?>

<form action="FUNCTIONS/updateProd.php" method="POST">

    <label for="prod_name">Product Name</label>
    <input 
        type="text" 
        name="prod_name" 
        value="<?= $product[0]['prod_name'] ?>"
    >

    <label for="prod_quantity">Quantity</label>
    <input 
        type="number" 
        name="prod_quantity" 
        value="<?= $product[0]['prod_quantity'] ?>"
    >

    <label for="prod_type">Type</label>
    <input 
        type="text" 
        name="prod_type" 
        value="<?= $product[0]['prod_type'] ?>"
    >

    <label for="prod_price">Price</label>
    <input 
        type="number" 
        step="0.01"
        name="prod_price" 
        value="<?= $product[0]['prod_price'] ?>"
    >

    <label for="prod_date_added">Date Added</label>
    <input 
        type="date" 
        name="prod_date_added" 
        value="<?= $product[0]['prod_date_added'] ?>"
    >

   
    <input 
        type="hidden" 
        name="prod_id" 
        value="<?= $product[0]['prod_id'] ?>"
    >

    <button type="submit">Edit Product</button>

</form>


</body>

</html>