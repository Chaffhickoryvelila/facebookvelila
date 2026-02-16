<?php


function retrieveAllusers()
{
    include "connection.php";

    $sql = "SELECT * FROM user";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllproducts()
{
    include "connection.php";

    $sql = "SELECT * FROM products";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute();

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}


function loginAuth($usernames, $passwords)
{

    include "connection.php";

    $sql = "SELECT * FROM user WHERE username = :username AND password = :password ";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([

        "username" => $usernames,
        "password" => $passwords

    ]);

    $count = $stmnt->rowCount();

    return $count;
}

function getUser($user_id)
{
    include "connection.php";

    $sql =  "SELECT * FROM user WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([

        "id" => $user_id
    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);  //return of all object or an array of objects

}
function getProduct($prod_id)
{
    include "connection.php";

    $sql = "SELECT * FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $prod_id
    ]);

    return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}
function updateUser($userid, $name, $age, $address, $usernames, $passwords)
{
    include "connection.php";

    $sql =  "UPDATE user SET
     Name= :name,
      Age= :age, 
    Address= :address, 
    username= :username, 
    password= :password
    WHERE
    user_id= :user_id
    ";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "name" => $name,
        "age" => $age,
        "address" => $address,
        "username" => $usernames,
        "password" => $passwords,
        "user_id" => $userid

    ]);

    return $stmnt;  //return of all object or an array of objects

}
function updateProduct($prod_id, $prod_name, $prod_quantity, $prod_type, $prod_price, $prod_date_added)
{
    include "connection.php";

    $sql = "UPDATE products SET
        prod_name = :prod_name,
        prod_quantity = :prod_quantity,
        prod_type = :prod_type,
        prod_price = :prod_price,
        prod_date_added = :prod_date_added
        WHERE
        prod_id = :prod_id
    ";

    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "prod_name"       => $prod_name,
        "prod_quantity"   => $prod_quantity,
        "prod_type"       => $prod_type,
        "prod_price"      => $prod_price,
        "prod_date_added" => $prod_date_added,
        "prod_id"  => $prod_id
    ]);
    return $stmnt;
}
function deleteUSer($id)
{
    include "connection.php";

    $sql = "DELETE FROM user WHERE user_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $id
    ]);



    return $stmnt;
}



function deleteProduct($id)
{
    include "connection.php";

    $sql = "DELETE FROM products WHERE prod_id = :id";
    $stmnt = $conn->prepare($sql);
    $stmnt->execute([
        "id" => $id
    ]);

    return $stmnt;
}
