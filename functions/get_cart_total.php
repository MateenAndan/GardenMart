<?php
include ("../settings/core.php");
require("../controllers/cart_controller.php");

$c_id = get_id();
$total_items = select_total_qty_from_cart_ctr($c_id);

echo $total_items;
?>
