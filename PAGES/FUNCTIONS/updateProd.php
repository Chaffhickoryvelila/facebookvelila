<?php
include "../../CONFIG/includes.php";

if (isset($_POST['prod_id'])) {

    $prodID       = $_POST['prod_id'];
    $prodName     = $_POST['prod_name'];
    $prodQuantity = $_POST['prod_quantity'];
    $prodType     = $_POST['prod_type'];
    $prodPrice    = $_POST['prod_price'];
    $prodDate     = $_POST['prod_date_added'];

   
    $result = updateProduct(
        $prodID,
        $prodName,
        $prodQuantity,
        $prodType,
        $prodPrice,
        $prodDate
    );

    if ($result) {
        echo "<script>window.location.href = '../Retrievepage.php';</script>";
    } else {
        echo "<script>window.location.href = '../Viewpage.php?prod_id=$prodID';</script>";
    }

} else {
    echo "<script>window.location.href = '../Retrievepage.php';</script>";
}
?>
