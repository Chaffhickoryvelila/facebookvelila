<?php

include "../../CONFIG/includes.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM facebook_accounts WHERE username = :username AND password = :password";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "username" => $email,
        "password" => $password
    ]);


    $user =  $count = $stmnt->rowCount();

    echo $user;
    
    if ($user > 0) {
        echo "<script>window.location.href = '../Dashboard.php';</script>";
    } else {
        echo "<script>alert('Email not found. Please check and try again.');</script>";
    }
} else {
    echo "mali akoang code";
}
