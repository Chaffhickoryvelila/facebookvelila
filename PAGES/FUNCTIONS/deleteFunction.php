<?php
include "../../CONFIG/includes.php";

if (isset($_GET['deleteFrom']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $from = $_GET['deleteFrom'];
    $status = false;

 

    if ($from == 'user') {
        $request = deleteUSer($id);

        if ($request) {
            $status = true;
        }
    } else if ($from == 'product') {
        $request = deleteProduct($id);

        if ($request) {
            $status = true;
        }
    }
    if ($status) {
        echo "<script>window.location.href = '../Retrievepage.php?status=ok';</script>";
    } else {
        echo "<script>window.location.href = '../Retrievepage.php?status=No';</script>";
    }
}
