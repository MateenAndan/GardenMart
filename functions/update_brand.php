<?php
require("../controllers/product_controller.php");

if (isset($_POST['update_brand'])){
	//update brand
	//grab from data
	$bnamee = ($_POST['bnamee']);
	$bidd = ($_POST['bidd']);

	//call a controller
	$check = update_brand_ctr($bnamee,$bidd);

	echo "Brand Name: " . $cnamee . "<br>";
	echo "Brand ID: " . $bidd . "<br>";

	if ($check){
		// header("location:../admin/brand.php");
	} else {
		echo "Update failed";
	}
}