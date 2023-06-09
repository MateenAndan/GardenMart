<?php
//connect to the user account class
include("../classes/product_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
function insert_brand_ctr($bname)
{
  $insert_brand = new product_class();
  return $insert_brand->add_brand_cls($bname);
}

function insert_category_ctr($cname,$cimage){
  // code...
  $insert_cat = new product_class();
  return $insert_cat->add_category_cls($cname,$cimage);
}

//category image
function insert_category_image_ctr($pic_name,$pic_image){
  // code...
  $insert_cat_image = new product_class();
  return $insert_cat_image->add_category_image_cls($pic_name,$pic_image);
}

function insert_product_ctr ($pbrand,$pcat,$ptitle,$pprice,$pqty,$pdesc,$pimage,$pkey){
  $insert = new product_class();
  return $insert->add_product_cls($pbrand,$pcat,$ptitle,$pprice,$pqty,$pdesc,$pimage,$pkey);
}

//--SELECT--//
function get_all_brand_ctr(){
  $brand_list = new product_class();
  return $brand_list->get_all_brand_cls();
}

function get_one_brand_ctr($bidd){
  $one_brand = new product_class();
  return $one_brand->get_one_brand_cls($bidd);
}


function get_all_category_ctr(){
  $brand_list = new product_class();
  return $brand_list->get_all_category_cls();
}

//category image
function get_category_image_ctr(){
  $cat_image = new product_class();
  return $cat_image->get_all_category_image_cls();
}


function get_one_category_ctr($cidd){
  $one_brand = new product_class();
  return $one_brand->get_one_category_cls($cidd);
}

function get_all_product_ctr(){
  $product_list = new product_class();
  return $product_list->get_all_product_cls();
}

function product_view_by_category_ctr($cat_id){
  $product_category = new product_class();
  return $product_category->product_view_by_category_cls($cat_id);
}

function get_one_product_ctr($pidd){
  $one_product = new product_class();
  return $one_product->get_one_product_cls($pidd);
}

function get_four_product_ctr(){
  $four_product = new product_class();
  return $four_product->get_four_product_cls();
}

function get_five_product_ctr(){
  $five_product = new product_class();
  return $five_product->get_five_product_cls();
}

function search_product_ctr($find){
  $log= new product_class;
  return $log -> search_product_cls($find);
}

function select_total_qty_from_cart_ctr($c_id){
  $qty= new product_class;
  return $qty -> select_total_qty_from_cart_cls($c_id);
}




//--UPDATE--//
function update_brand_ctr($bnamee,$bidd){
  $update_brand = new product_class();
  return $update_brand->update_brand_cls($bnamee,$bidd);
}

function update_category_ctr($cnamee,$cidd){
  $update_cat = new product_class();
  return $update_cat->update_category_cls($cnamee,$cidd);
}

function update_product_ctr($pidd,$pbrand,$pcat,$ptitle,$pprice,$pqty,$pdesc,$pimage,$pkey){
  $update_cat = new product_class();
  return $update_cat->update_product_cls($pidd,$pbrand,$pcat,$ptitle,$pprice,$pqty,$pdesc,$pimage,$pkey);
}

// function decrease_qty_ctr($pqty){
//     $view= new cart_class();
//     return $view->decrease_qty_cls($pqty);
// }


//--DELETE--//
function delete_brand_ctr($brandID){
  $log= new product_class;
  return $log -> delete_brand_cls($brandID);
}

function delete_category_ctr($categoryID){
  $log= new product_class;
  return $log -> delete_category_cls($categoryID);
}

function delete_product_ctr($productID){
  $log= new product_class;
  return $log -> delete_product_cls($productID);
}
