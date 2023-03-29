<?php
//connect the controller
require("../controllers/customer_controller.php");

//check for 
if (isset($_POST['admin_regis'])){
	//register custoner
	$admin_name = ($_POST['admin_name']);
	$admin_email = ($_POST['admin_email']);
	$admin_password = ($_POST['admin_password']);
	$admin_role = 1;

	//call a controller
	//customer register
	$check = insert_new_admin_ctr($admin_name,$admin_email,$admin_password,$admin_role);
	if ($check){
		header("location:../admin/add-new-user.php");
	} else {
		echo "Insert failed";
	}
}
?>