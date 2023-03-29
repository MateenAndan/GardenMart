<?php
//start session
session_start(); 

// Set the session cookie to expire when the browser is closed
session_set_cookie_params(0, '/', '', false, true);


//for header redirection
ob_start();

// funtion to check for login
function check_login(){
	session_set_cookie_params(0, '/', '', false, true);
	if (!isset($_SESSION['cid'])) {
		header('location:../login/logout.php');
	}
}

function check_login_homepage(){
	session_set_cookie_params(0, '/', '', false, true);
	if (!isset($_SESSION['cid'])) {
		header('location:login/logout.php');
	}
}

function admin_check_login(){
	session_set_cookie_params(0, '/', '', false, true);
	if (!isset($_SESSION['aid'])) {
		header('location:../login/logout.php');
	}
}

function admin_check_login_homepage(){
	session_set_cookie_params(0, '/', '', false, true);
	if (!isset($_SESSION['aid'])) {
		header('location:login/logout.php');
	}
}



function logged_in(){
	session_set_cookie_params(0, '/', '', false, true);
   if (isset($_SESSION['cid'])) {
      return true;
   };
   return false;
}

function admin_logged_in(){
	session_set_cookie_params(0, '/', '', false, true);
   if (isset($_SESSION['aid'])) {
      return true;
   };
   return false;
}



//function to get user ID
function get_id(){
	session_set_cookie_params(0, '/', '', false, true);
   $id=$_SESSION['cid'];
  return $id;
}

function get_admin_id(){
	session_set_cookie_params(0, '/', '', false, true);
   $id=$_SESSION['aid'];
  return $id;
}

//function to check for role (admin, customer, etc)
function check_admin(){
	session_set_cookie_params(0, '/', '', false, true);
	if ($_SESSION['role'] == 1) {
		return $_SESSION['role'];
		// header('location:../admin/brand.php');
	}
}
