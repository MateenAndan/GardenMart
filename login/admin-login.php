<?php

//connect the controller
require("../controllers/customer_controller.php");

//check for
if (isset($_POST['admin_login'])) {
	//register user
	//grab from data
	$b = ($_POST['admin_email']);
	$c = ($_POST['admin_password']);


	//call a controller
	$check = select_admin_ctr($b, $c);

	// echo($check);
	// print_r($check);
	if ($check) {
		// set session for id and user role
		session_start();
		// After successful login
		$_SESSION['admin_name'] = $check['admin_name'];
		$_SESSION['cid'] = $check['admin_id'];
		$_SESSION['role'] = $check['admin_role'];
		// header('location:../admin/admin.php');
		echo "success";
	} else {
		echo "error";
	}
}