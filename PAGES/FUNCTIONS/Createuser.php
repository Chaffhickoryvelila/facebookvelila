<?php

include "../../CONFIG/includes.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM facebook_accounts WHERE email = :email AND password = :password";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute(["email" => $email,
    "password" => $password]);

    $user = $stmnt->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        if ($password === $user['password']) {

            echo "<script>window.location.href = '../Dashboard.php';</script>";
        } else {
            
            echo "<script>alert('Incorrect password. Please try again.');</script>";
        }

    } else {
        echo "<script>alert('Email not found. Please check and try again.');</script>";
    }
}else{
  echo "mali akoang code";
}
?>
