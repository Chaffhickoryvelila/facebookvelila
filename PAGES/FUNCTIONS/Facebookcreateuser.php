<?php

include "../../CONFIG/includes.php";

if (
    isset($_POST['username']) && isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname'])
    && isset($_POST['mobile']) && isset($_POST['birthday']) && isset($_POST['gender']) && isset($_POST['password']) 
    && isset($_POST['confirmpass'])
) {

    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $mobile_num = $_POST['mobile'];
    $birthdate = $_POST['birthday'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];

    if ($password !== $confirmpass) {       
        echo "<script> alert('Passwords do not match. Please try again.')</script>";
        exit();
    }

    $sql = "INSERT INTO facebook_accounts (username, email, first_name, last_name, mobile_num, birthday, gender, password)
            VALUES (
                :username,
                :email,
                :firstname,
                :lastname,
                :mobile,
                :birthday,
                :gender,
                :password)";

    $stmnt = $conn->prepare($sql);

    $stmnt->execute([
        "username" => $user_name,     
        "email" => $email,
        "firstname" => $first_name,   
        "lastname" => $last_name,     
        "mobile" => $mobile_num,      
        "birthday" => $birthdate,
        "gender" => $gender,
        "password" => $password
    ]);

    if ($stmnt) {
        echo "<script> window.location.href = '../Createaccount.php'</script>";
    } else {
        echo "not save";
    }
}