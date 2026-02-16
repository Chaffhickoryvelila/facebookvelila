<?php
include "../CONFIG/includes.php";

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $getUser = getUser($user_id);
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

    <!--Contents -->
    <form action="FUNCTIONS/updateUser.php" method="POST">
        <label for="name">Name</label>
        <input name="name" type="text" value="<?= $getUser[0]['Name'] ?>">

        <label for="age">Age</label>
        <input name="age" type="number" value="<?= $getUser[0]['Age'] ?>">

        <label for="address">Address</label>
        <input name="address" type="text" value="<?= $getUser[0]['Address'] ?>">

        <label for="user_name">Username</label>
        <input name="user_name" type="text" value="<?= $getUser[0]['username'] ?>">

         <label for="password">Password</label>
          <input name="password" type="text" value="<?= $getUser[0]['password'] ?>">

         <input type="text" name="user_id" value="<?= $getUser[0]['user_id'] ?>" hidden>


        <button>Edit</button>
    </form>

</body>

</html>