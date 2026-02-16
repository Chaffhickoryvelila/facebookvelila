<?php 
include "../CONFIG/includes.php";

$list = retrieveAllusers();
$productList = retrieveAllProducts();

// echo json_encode($list);

if(isset($_GET['status'])) {
if($_GET['status'] == 'ok'){
    echo '<script> alert("Value Deleted Successfully")</script>';
} else if ($_GET['status'] == 'no'){
     echo '<script> alert("Value Deleted Unsuccessfully")</script>';

}
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

    <!--Contents -->

    <h1>This is Retrieve Page</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Username</th>
            <th>Action</th>
        </tr>

        <?php foreach ($list as $item) { ?>
            <tr>
                <td><?= $item["Name"] ?></td>
                <td><?= $item["Age"] ?></td>
                <td><?= $item["Address"] ?></td>
                <td><?= $item["username"] ?></td>
                <td>
                    <a href="Viewpage.php?user_id=<?= $item['user_id'] ?>">View</a> 
                   <a href="FUNCTIONS/deleteFunction.php?deleteFrom=user&id=<?= $item['user_id'] ?>">Delete</a>
                </td>


            </tr>
        <?php } ?>
    </table>

    <br><br>

    <table>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Type</th>
            <th>Price</th>
            <th>Date Added</th>
            <th>Action</th>
        </tr>

        <?php foreach ($productList as $product) { ?>
            <tr>
                <td><?= $product['prod_name'] ?></td>
                <td><?= $product['prod_quantity'] ?></td>
                <td><?= $product['prod_type'] ?></td>
                <td><?= $product['prod_price'] ?></td>
                <td><?= $product['prod_date_added'] ?></td>
                <td>
                    <a href="Viewproduct.php?prod_id=<?= $product['prod_id'] ?>">View</a>
                    <a href="FUNCTIONS/deleteFunction.php?deleteFrom=product&id=<?= $product['prod_id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>
