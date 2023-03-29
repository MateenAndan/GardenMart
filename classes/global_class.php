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

	//get current customer id

	function customer_name_cls($customer_id)
	{
		// code...
		$sql = "SELECT customer_name FROM customer WHERE customer_id = '$customer_id'";
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

class product_class extends db_connection
{
	//--INSERT--//
	//add brand
	/**
	 * Summary of add_brand_cls
	 * @param mixed $bname
	 * @return bolean
	 */
	function add_brand_cls($bname)
	{
		$sql = "INSERT INTO brands(brand_name) VALUES ('$bname')";
		return $this->db_query($sql);
	}

	//add category
	/**
	 * Summary of add_category_cls
	 * @param mixed $cname
	 * @param mixed $cimage
	 * @return bolean
	 */
	function add_category_cls($cname, $cimage)
	{
		// code...
		$sql = "INSERT INTO categories(cat_name,cat_image) VALUES ('$cname','$cimage')";
		return $this->db_query($sql);
	}

	// add category image
	/**
	 * Summary of add_category_image_cls
	 * @param mixed $cimage
	 * @return bolean
	 */
	function add_category_image_cls($pic_name, $pic_image)
	{
		// code...
		$sql = "INSERT INTO catImage(pic_name,pic_image) VALUES ('$pic_name','$pic_image')";
		return $this->db_query($sql);
	}


	//add product
	/**
	 * Summary of add_product_cls
	 * @param mixed $pbrand
	 * @param mixed $pcat
	 * @param mixed $ptitle
	 * @param mixed $pprice
	 * @param mixed $pqty
	 * @param mixed $pdesc
	 * @param mixed $pimage
	 * @param mixed $pkey
	 * @return bolean
	 */
	function add_product_cls($pbrand, $pcat, $ptitle, $pprice, $pqty, $pdesc, $pimage, $pkey)
	{
		$sql = "INSERT INTO products(product_brand,product_cat,product_title,product_price,product_qty,product_desc,product_image,product_keywords) VALUES ('$pbrand','$pcat','$ptitle','$pprice','$pqty','$pdesc','$pimage','$pkey')";
		return $this->db_query($sql);
	}

	//--SELECT--//
	/**
	 * Summary of get_all_brand_cls
	 * @return all
	 */
	function get_all_brand_cls()
	{
		$sql = "SELECT * FROM brands";
		return $this->db_fetch_all($sql);
	}

	/**
	 * Summary of get_one_brand_cls
	 * @param mixed $bidd
	 * @return a
	 */
	function get_one_brand_cls($bidd)
	{
		$sql = "SELECT * FROM brands WHERE brand_id = '$bidd'";
		return $this->db_fetch_one($sql);
	}

	/**
	 * Summary of get_all_category_cls
	 * @return all
	 */
	function get_all_category_cls()
	{
		// code...
		$sql = "SELECT * FROM categories";
		return $this->db_fetch_all($sql);
	}

	// get all category image
	/**
	 * Summary of get_all_category_image_cls
	 * @return all
	 */
	function get_all_category_image_cls()
	{
		// code...
		$sql = "SELECT * FROM catImage";
		return $this->db_fetch_all($sql);
	}

	/**
	 * Summary of get_one_category_cls
	 * @param mixed $cidd
	 * @return a
	 */
	function get_one_category_cls($cidd)
	{
		$sql = "SELECT * FROM categories WHERE cat_id = '$cidd'";
		return $this->db_fetch_one($sql);
	}

	/**
	 * Summary of get_all_product_cls
	 * @return all
	 */
	function get_all_product_cls()
	{
		// code...
		$sql = "SELECT * FROM products";
		return $this->db_fetch_all($sql);
	}

	function get_four_product_cls()
	{
		// code...
		$sql = "SELECT * FROM `products` ORDER BY RAND() LIMIT 4";
		return $this->db_fetch_all($sql);
	}

	function get_five_product_cls()
	{
		// code...
		$sql = "SELECT * FROM `products` ORDER BY RAND() LIMIT 5";
		return $this->db_fetch_all($sql);
	}

	/**
	 * Summary of product_view_by_category_cls
	 * @param mixed $cat_id
	 * @return all
	 */
	function product_view_by_category_cls($cat_id)
	{
		// code...
		$sql = "SELECT * FROM products WHERE product_cat = '$cat_id'";
		return $this->db_fetch_all($sql);
	}



	/**
	 * Summary of get_one_product_cls
	 * @param mixed $pidd
	 * @return a
	 */
	function get_one_product_cls($pidd)
	{
		$sql = "SELECT * FROM products WHERE product_id = '$pidd'";
		return $this->db_fetch_one($sql);
	}

	/**
	 * Summary of search_product_cls
	 * @param mixed $find
	 * @return all
	 */
	function search_product_cls($find)
	{
		$sql = "SELECT * FROM products WHERE product_title like '%$find%'";
		return $this->db_fetch_all($sql);
	}

	/**
	 * Summary of select_total_qty_from_cart_cls
	 * @param mixed $c_id
	 * @return all
	 */
	function select_total_qty_from_cart_cls($c_id)
	{
		$sql = "SELECT SUM(qty) FROM cart WHERE c_id=$c_id";
		return $this->db_fetch_all($sql);
	}


	//--UPDATE--//
	/**
	 * Summary of update_brand_cls
	 * @param mixed $bnamee
	 * @param mixed $bid
	 * @return bolean
	 */
	function update_brand_cls($bnamee, $bid)
	{
		$sql = "UPDATE brands SET brand_name='$bnamee' WHERE brand_id='$bid'";
		return $this->db_query($sql);
	}

	/**
	 * Summary of update_category_cls
	 * @param mixed $cnamee
	 * @param mixed $cidd
	 * @return bolean
	 */
	function update_category_cls($cnamee, $cidd)
	{
		$sql = "UPDATE categories SET cat_name='$cnamee' WHERE cat_id='$cidd'";
		return $this->db_query($sql);
	}

	/**
	 * Summary of update_product_cls
	 * @param mixed $pid
	 * @param mixed $pbrand
	 * @param mixed $pcat
	 * @param mixed $ptitle
	 * @param mixed $pprice
	 * @param mixed $pqty
	 * @param mixed $pdesc
	 * @param mixed $pimage
	 * @param mixed $pkey
	 * @return bolean
	 */
	function update_product_cls($pid, $pbrand, $pcat, $ptitle, $pprice, $pqty, $pdesc, $pimage, $pkey)
	{
		$sql = "UPDATE products SET product_title='$ptitle',product_cat='$pcat', product_price='$pprice',product_qty='$pqty',product_desc='$pdesc', product_keywords='$pkey',product_image='$pimage' WHERE product_id='$pid'";
		return $this->db_query($sql);
	}

	// function decrease_qty_cls($pqty){
	// 	$sql = "UPDATE products SET product_qty='$pqty'-1 WHERE product_qty='$pqty'";
	// 	return $this-> db_query($sql);
	// }



	//--DELETE--//
	/**
	 * Summary of delete_brand_cls
	 * @param mixed $brandID
	 * @return bolean
	 */
	function delete_brand_cls($brandID)
	{
		$sql = "DELETE FROM brands WHERE brand_id='$brandID'";
		return $this->db_query($sql);
	}

	/**
	 * Summary of delete_category_cls
	 * @param mixed $categoryID
	 * @return bolean
	 */
	function delete_category_cls($categoryID)
	{
		$sql = "DELETE FROM categories WHERE cat_id='$categoryID'";
		return $this->db_query($sql);
	}

	/**
	 * Summary of delete_product_cls
	 * @param mixed $productID
	 * @return bolean
	 */
	function delete_product_cls($productID)
	{
		$sql = "DELETE FROM products WHERE product_id='$productID'";
		return $this->db_query($sql);
	}

}

class cart_class extends db_connection
{
	//--INSERT--//
	//add to cart
	function add_to_cart_cls($p_id, $ip_add, $c_id, $qty)
	{
		$sql = "INSERT INTO cart (p_id,ip_add,c_id,qty) VALUES ('$p_id','$ip_add','$c_id','$qty')";
		return $this->db_query($sql);
	}

	//order table
	function order_cls($customer_id, $ino, $odate, $ostatus)
	{
		$sql = "INSERT INTO orders(customer_id,invoice_no,order_date,order_status) VALUES ('$customer_id','$ino','$odate','$ostatus')";
		return $this->db_query($sql);
	}

	//order details
	function order_details_cls($p_id, $qty)
	{
		$sql = "INSERT INTO orderdetails(product_id,qty) VALUES ('$p_id','$qty')";
		return $this->db_query($sql);
	}

	//payment
	function payment_cls($amt, $customer_id, $order_id, $currency, $payment_date)
	{
		$sql = "INSERT INTO payment(amt,currency,customer_id,order_id,payment_date) VALUES ('$amt','$currency','$customer_id','$order_id','$payment_date')";
		return $this->db_query($sql);
	}

	//--SELECT--//
	function view_cart_cls($c_id)
	{
		$sql = "select products.product_id, products.product_title,products.product_price, products.product_image, products.product_price, cart.qty, cart.c_id from cart inner join products on cart.p_id=products.product_id where c_id=$c_id;";
		return $this->db_fetch_all($sql);
	}

	function evaluate_cls($p_id, $c_id)
	{
		$error = "";
		$sql = "SELECT * FROM cart WHERE p_id='$p_id'  and c_id='$c_id'";
		$result = $this->db_fetch_all($sql);
		if ($result) {
			$this->error .= "Item already in cart";
		}
		return $this->error;
	}

	function select_total_qty_from_cart_cls($c_id)
	{
		$sql = "SELECT SUM(qty) FROM cart WHERE c_id=$c_id";
		return $this->db_fetch_all($sql);
	}

	// one item  from cart
	function select_one_from_cart_cls($p_id, $c_id)
	{
		$query = "select qty from cart where p_id=$p_id and c_id=$c_id";
		return $this->db_fetch_one($query);
	}


	// selecting the number of items a customer has bought

	// selecting the total price of a single item a customer has bought
	function select_one_price_cls($c_id)
	{
		$query = "SELECT products.SUM(product_price) FROM cart WHERE cart inner join products on cart.p_id=products.product_id and cart.c_id=$c_id";
		return $this->db_fetch_all($query);
	}

	function select_total_price_cls($c_id)
	{

		$sql = "select SUM(products.product_price*cart.qty) from cart inner join products on cart.p_id=products.product_id where c_id=$c_id;";

		return $this->db_fetch_all($sql);

	}

	function email_cls($c_id)
	{
		$sql = "select customer.customer_email from cart inner join customer on cart.c_id=customer.customer_id where c_id=$c_id limit 1";
		return $this->db_fetch_one($sql);
	}

	function order_id_cls($invoice_no)
	{
		$sql = "select order_id from orders where invoice_no=$invoice_no ";
		return $this->db_fetch_one($sql);
	}


	//--UPDATE--//
	function increase_cart_cls($p_id, $c_id, $qty)
	{
		$sql = "UPDATE cart SET qty='$qty'+1 WHERE p_id='$p_id' and c_id='$c_id'";
		return $this->db_query($sql);
	}

	function decrease_cart_cls($p_id, $c_id, $qty)
	{
		$sql = "UPDATE cart SET qty='$qty'-1 WHERE p_id='$p_id' and c_id='$c_id'";
		return $this->db_query($sql);
	}

	function decrease_qty_cls($pqty)
	{
		$sql = "UPDATE products SET product_qty='$pqty'-1 WHERE product_qty='$pqty'";
		return $this->db_query($sql);
	}
	//--DELETE--//
	function delete_from_cart_cls($p_id, $c_id)
	{
		$sql = "DELETE FROM cart WHERE p_id='$p_id' and c_id='$c_id'";
		return $this->db_query($sql);
	}

}