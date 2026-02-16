<?php
include "../../CONFIG/includes.php";

if(isset($_POST['user_id'])){

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$username = $_POST['user_name'];
$password = $_POST['password'];
$userid = $_POST['user_id'];

   $result = updateUser($userid, $name, $age, $address, $username, $password);
   
   if($result){
        echo "<script> window.location.href = '../Retrievepage.php'</script>";

   }else{
        echo "<script> window.location.href = '../Viewpage.php?user_id='".$userid."' </script>";
   
   }
}else{
     echo "<script> window.location.href = '../Retrievepage.php'</script>";
}

?>