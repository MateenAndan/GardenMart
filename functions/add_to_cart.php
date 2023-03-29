<?php
include("../settings/core.php");
require("../controllers/cart_controller.php");

if (isset($_GET['pid'])) {
    $p_id = $_GET['pid'];
    $c_id = get_id();
    $ip_add = $_SERVER['REMOTE_ADDR'];
    $qty = 1;
    $evaluate = evaluate_ctr($p_id, $c_id);
    if ($evaluate != "") {
        echo "exists"; // product already in cart
    } else {
        $check = add_to_cart_ctr($p_id, $ip_add, $c_id, $qty);
        if ($check) {
            echo "added"; // product added to cart
        } else {
            echo "error"; // error adding product to cart
        }
    }
}
