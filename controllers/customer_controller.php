<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data
function cleanText($data)
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
function insert_new_customer_ctr ($a,$b,$c,$d,$e,$f,$g){
  $insert = new customer_class();
  return $insert->customer_register_cls($a,$b,$c,$d,$e,$f,$g);
}

function insert_new_admin_ctr ($a,$b,$c,$d){
  $insert = new customer_class();
  return $insert->admin_register_cls($a,$b,$c,$d);
}


//--SELECT--//
function select_customer_ctr($b,$c){
  $select = new customer_class();
  return $select->customer_login_cls($b,$c);
}

function select_admin_ctr($b,$c){
  $select = new customer_class();
  return $select->admin_login_cls($b,$c);
}

function admin_name_ctr($admin_id){
  $admin_name = new customer_class();
  return $admin_name->admin_name_cls($admin_id);
}



//--UPDATE--//

//--DELETE--//

?>