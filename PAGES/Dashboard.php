<?php
if  (isset($_GET['name'])) {
$name = $_GET['name'];

}else{
  $name = "No Name";
}
?>



<!DOCTYPE html>
<html lang="en">
<?php
      include "RESOURCES/header.php";
?>

<body>
  <?php
   include "RESOURCES/Navigation.php";
  ?>
   
  <h1> Welcome <?= $name ?> Have a nice day! </h1>


</body>

</html>