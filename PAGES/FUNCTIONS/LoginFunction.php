<?php

include "../../CONFIG/includes.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = loginAuth($username, $password);

  if ($result == 1) {
    echo "<script> window .location.href = '../Dashboard.php?name='user''</script>";
  } else {
    echo "<script> window .location.href = '../login.php?status=false ' </script>";
  }

  echo " Your username is " . $username . " and your password is " . $password;
}
