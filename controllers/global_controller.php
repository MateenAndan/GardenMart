<?php
//connect to the user account class
require("../classes/global_class.php");

//sanitize data
function cleanText($data)
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



// -- CUSTOMER -- //
//--INSERT--//
function insert_new_customer_ctr($a, $b, $c, $d, $e, $f, $g)
{
  $insert = new customer_class();
  return $insert->customer_register_cls($a, $b, $c, $d, $e, $f, $g);
}

function insert_new_admin_ctr($a, $b, $c, $d)
{
  $insert = new customer_class();
  return $insert->admin_register_cls($a, $b, $c, $d);
}


//--SELECT--//
function select_customer_ctr($b, $c)
{
  $select = new customer_class();
  return $select->customer_login_cls($b, $c);
}

function customer_name_ctr($customer_id)
{
  $customer_name = new customer_class();
  return $customer_name->customer_name_cls($customer_id);
}


function select_admin_ctr($b, $c)
{
  $select = new customer_class();
  return $select->admin_login_cls($b, $c);
}

function admin_name_ctr($admin_id)
{
  $admin_name = new customer_class();
  return $admin_name->admin_name_cls($admin_id);
}

//--UPDATE--//

//--DELETE--//






// -- PRODUCT -- //
//--INSERT--//
function insert_brand_ctr($bname)
{
  $insert_brand = new product_class();
  return $insert_brand->add_brand_cls($bname);
}

function insert_category_ctr($cname, $cimage)
{
  // code...
  $insert_cat = new product_class();
  return $insert_cat->add_category_cls($cname, $cimage);
}

//category image
function insert_category_image_ctr($pic_name, $pic_image)
{
  // code...
  $insert_cat_image = new product_class();
  return $insert_cat_image->add_category_image_cls($pic_name, $pic_image);
}

function insert_product_ctr($pbrand, $pcat, $ptitle, $pprice, $pqty, $pdesc, $pimage, $pkey)
{
  $insert = new product_class();
  return $insert->add_product_cls($pbrand, $pcat, $ptitle, $pprice, $pqty, $pdesc, $pimage, $pkey);
}

//--SELECT--//
function get_all_brand_ctr()
{
  $brand_list = new product_class();
  return $brand_list->get_all_brand_cls();
}

function get_one_brand_ctr($bidd)
{
  $one_brand = new product_class();
  return $one_brand->get_one_brand_cls($bidd);
}


function get_all_category_ctr()
{
  $brand_list = new product_class();
  return $brand_list->get_all_category_cls();
}

//category image
function get_category_image_ctr()
{
  $cat_image = new product_class();
  return $cat_image->get_all_category_image_cls();
}


function get_one_category_ctr($cidd)
{
  $one_brand = new product_class();
  return $one_brand->get_one_category_cls($cidd);
}

function get_all_product_ctr()
{
  $product_list = new product_class();
  return $product_list->get_all_product_cls();
}

function product_view_by_category_ctr($cat_id)
{
  $product_category = new product_class();
  return $product_category->product_view_by_category_cls($cat_id);
}

function get_one_product_ctr($pidd)
{
  $one_product = new product_class();
  return $one_product->get_one_product_cls($pidd);
}

function get_four_product_ctr()
{
  $four_product = new product_class();
  return $four_product->get_four_product_cls();
}

function get_five_product_ctr()
{
  $five_product = new product_class();
  return $five_product->get_five_product_cls();
}

function search_product_ctr($find)
{
  $log = new product_class;
  return $log->search_product_cls($find);
}

// function select_total_qty_from_cart_ctr($c_id){
//   $qty= new product_class;
//   return $qty -> select_total_qty_from_cart_cls($c_id);
// }

//--UPDATE--//
function update_brand_ctr($bnamee, $bidd)
{
  $update_brand = new product_class();
  return $update_brand->update_brand_cls($bnamee, $bidd);
}

function update_category_ctr($cnamee, $cidd)
{
  $update_cat = new product_class();
  return $update_cat->update_category_cls($cnamee, $cidd);
}

function update_product_ctr($pidd, $pbrand, $pcat, $ptitle, $pprice, $pqty, $pdesc, $pimage, $pkey)
{
  $update_cat = new product_class();
  return $update_cat->update_product_cls($pidd, $pbrand, $pcat, $ptitle, $pprice, $pqty, $pdesc, $pimage, $pkey);
}

// function decrease_qty_ctr($pqty){
//     $view= new cart_class();
//     return $view->decrease_qty_cls($pqty);
// }


//--DELETE--//
function delete_brand_ctr($brandID)
{
  $log = new product_class;
  return $log->delete_brand_cls($brandID);
}

function delete_category_ctr($categoryID)
{
  $log = new product_class;
  return $log->delete_category_cls($categoryID);
}

function delete_product_ctr($productID)
{
  $log = new product_class;
  return $log->delete_product_cls($productID);
}






// -- CART -- //
//--INSERT--//
// add to cart
function add_to_cart_ctr($p_id, $ip_add, $c_id, $qty)
{
  $insert = new cart_class();
  return $insert->add_to_cart_cls($p_id, $ip_add, $c_id, $qty);
}

//add to order
function order_ctr($customer_id, $ino, $odate, $ostatus)
{
  $insert = new cart_class();
  return $insert->order_cls($customer_id, $ino, $odate, $ostatus);
}


//add to order details
function order_details_ctr($p_id, $qty)
{
  $insert = new cart_class();
  return $insert->order_details_cls($p_id, $qty);
}

//add to payment
function payment_ctr($amt, $customer_id, $order_id, $currency, $payment_date)
{
  $insert = new cart_class();
  return $insert->payment_cls($amt, $customer_id, $order_id, $currency, $payment_date);
}


//--SELECT--//
function view_cart_ctr($c_id)
{
  $view = new cart_class();
  return $view->view_cart_cls($c_id);
}

function evaluate_ctr($p_id, $c_id)
{
  $evaluate = new cart_class();
  return $evaluate->evaluate_cls($p_id, $c_id);
}

function select_total_qty_from_cart_ctr($c_id)
{
  $qty = new cart_class();
  return $qty->select_total_qty_from_cart_cls($c_id);
}

function select_one_from_cart_ctr($p_id, $c_id)
{
  $view = new cart_class();
  return $view->select_one_from_cart_cls($p_id, $c_id);
}

function select_total_price_ctr($c_id)
{
  $qty = new cart_class;
  return $qty->select_total_price_cls($c_id);
}

function email_ctr($c_id)
{
  $email = new cart_class;
  return $email->email_cls($c_id);
}

function order_id_ctr($invoice_no)
{
  $email = new cart_class;
  return $email->order_id_cls($invoice_no);
}

// selecting the qty added to a cart by a customer


//--UPDATE--//
function increase_cart_ctr($p_id, $c_id, $qty)
{
  $view = new cart_class();
  return $view->increase_cart_cls($p_id, $c_id, $qty);
}

function decrease_cart_ctr($p_id, $c_id, $qty)
{
  $view = new cart_class();
  return $view->decrease_cart_cls($p_id, $c_id, $qty);
}

function decrease_qty_ctr($pqty)
{
  $view = new cart_class();
  return $view->decrease_qty_cls($pqty);
}


//--DELETE--//
// remove from cart
function delete_from_cart_ctr($p_id, $c_id)
{
  $remove = new cart_class();
  return $remove->delete_from_cart_cls($p_id, $c_id);
}