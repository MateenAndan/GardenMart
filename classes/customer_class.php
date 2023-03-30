<?php
//connect to database class
require("../settings/db_class.php");

class customer_class extends db_connection
{
	//--INSERT--//
	//register customer
	function customer_register_cls($a, $b, $c, $d, $e, $f, $g)
	{
		// $customer_password = md5($c);
		$sql = "INSERT INTO customer(customer_name,customer_email,customer_pass,customer_city,customer_address,customer_no,user_role) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
		return $this->db_query($sql);
	}

	//register admin
	function admin_register_cls($a, $b, $c, $d)
	{
		$sql = "INSERT INTO admin(admin_name,admin_email,admin_pass,admin_role) VALUES ('$a','$b','$c','$d')";
		return $this->db_query($sql);
	}



	//--SELECT--//
	//login customer
	function customer_login_cls($b, $c)
	{
		// $customer_password = md5($c);
		$sql = "SELECT * FROM customer WHERE customer_email ='$b' AND customer_pass = '$c'";
		return $this->db_fetch_one($sql);
	}

	//login admin 
	function admin_login_cls($b, $c)
	{
		// $customer_password = md5($c);
		$sql = "SELECT * FROM admin WHERE admin_email ='$b' AND admin_pass = '$c'";
		return $this->db_fetch_one($sql);
	}

	function admin_name_cls($admin_id)
	{
		// code...
		$sql = "SELECT * FROM admin WHERE admin_id = '$admin_id'";
		return $this->db_fetch_all($sql);
	}

//--UPDATE--//



//--DELETE--//



}
?>