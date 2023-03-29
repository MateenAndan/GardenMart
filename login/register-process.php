<?php
//connect the controller
require("../controllers/customer_controller.php");

//check for 
if (isset($_POST['regis'])){
	//register custoner
	$customer_name = ($_POST['customer_name']);
	$customer_email = ($_POST['customer_email']);
	$customer_password = ($_POST['customer_password']);
	$customer_city = ($_POST['customer_city']);
	$customer_address = ($_POST['customer_address']);
	$customer_no = ($_POST['customer_no']);
	$user_role = 2;

	//call a controller
	//customer register
	$check = insert_new_customer_ctr($customer_name,$customer_email,$customer_password,$customer_city,$customer_address,$customer_no,$user_role);
	if ($check){
		header("location:../view/login.php");
	} else {
		echo "Insert failed";
	}
}

?>