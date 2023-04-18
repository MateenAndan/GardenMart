<?php
//connect to database class
require("../settings/db_class.php");

// ░█████╗░██╗░░░██╗░██████╗████████╗░█████╗░███╗░░░███╗███████╗██████╗░  ░█████╗░███╗░░██╗██████╗░
// ██╔══██╗██║░░░██║██╔════╝╚══██╔══╝██╔══██╗████╗░████║██╔════╝██╔══██╗  ██╔══██╗████╗░██║██╔══██╗
// ██║░░╚═╝██║░░░██║╚█████╗░░░░██║░░░██║░░██║██╔████╔██║█████╗░░██████╔╝  ███████║██╔██╗██║██║░░██║
// ██║░░██╗██║░░░██║░╚═══██╗░░░██║░░░██║░░██║██║╚██╔╝██║██╔══╝░░██╔══██╗  ██╔══██║██║╚████║██║░░██║
// ╚█████╔╝╚██████╔╝██████╔╝░░░██║░░░╚█████╔╝██║░╚═╝░██║███████╗██║░░██║  ██║░░██║██║░╚███║██████╔╝
// ░╚════╝░░╚═════╝░╚═════╝░░░░╚═╝░░░░╚════╝░╚═╝░░░░░╚═╝╚══════╝╚═╝░░╚═╝  ╚═╝░░╚═╝╚═╝░░╚══╝╚═════╝░

// ░█████╗░██████╗░███╗░░░███╗██╗███╗░░██╗
// ██╔══██╗██╔══██╗████╗░████║██║████╗░██║
// ███████║██║░░██║██╔████╔██║██║██╔██╗██║
// ██╔══██║██║░░██║██║╚██╔╝██║██║██║╚████║
// ██║░░██║██████╔╝██║░╚═╝░██║██║██║░╚███║
// ╚═╝░░╚═╝╚═════╝░╚═╝░░░░░╚═╝╚═╝╚═╝░░╚══╝

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
		$sql = "SELECT customer_name FROM customer WHERE customer_id='$customer_id'";
		return $this->db_fetch_one($sql);
	}


	//get all customers
	function get_all_customer_cls()
	{
		$sql = "SELECT * FROM customer";
		return $this->db_fetch_all($sql);
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
		$sql = "SELECT admin_name FROM admin";
		return $this->db_fetch_all($sql);
	}

	//get all admins
	function get_all_admin_cls()
	{
		$sql = "SELECT * FROM admin";
		return $this->db_fetch_all($sql);
	}

	function select_admin_cls($email, $password)
	{
		// code...
		$sql = "SELECT admin_id, admin_role, admin_name FROM admin WHERE admin_email='$email' AND admin_pass='$password'";
		return $this->db_fetch_one($sql);
	}


//--UPDATE--//



//--DELETE--//
}


// ███████╗███╗░░██╗██████╗░
// ██╔════╝████╗░██║██╔══██╗
// █████╗░░██╔██╗██║██║░░██║
// ██╔══╝░░██║╚████║██║░░██║
// ███████╗██║░╚███║██████╔╝
// ╚══════╝╚═╝░░╚══╝╚═════╝░






// ██████╗░██████╗░░█████╗░██████╗░██╗░░░██╗░█████╗░████████╗
// ██╔══██╗██╔══██╗██╔══██╗██╔══██╗██║░░░██║██╔══██╗╚══██╔══╝
// ██████╔╝██████╔╝██║░░██║██║░░██║██║░░░██║██║░░╚═╝░░░██║░░░
// ██╔═══╝░██╔══██╗██║░░██║██║░░██║██║░░░██║██║░░██╗░░░██║░░░
// ██║░░░░░██║░░██║╚█████╔╝██████╔╝╚██████╔╝╚█████╔╝░░░██║░░░
// ╚═╝░░░░░╚═╝░░╚═╝░╚════╝░╚═════╝░░╚═════╝░░╚════╝░░░░╚═╝░░░

class product_class extends db_connection
{
	//--INSERT--//
	//add brand
	function add_brand_cls($bname)
	{
		$sql = "INSERT INTO brands(brand_name) VALUES ('$bname')";
		return $this->db_query($sql);
	}

	function add_category_cls($cname, $cimage)
	{
		// code...
		$sql = "INSERT INTO categories(cat_name,cat_image) VALUES ('$cname','$cimage')";
		return $this->db_query($sql);
	}

	// add category image
	function add_category_image_cls($pic_name, $pic_image)
	{
		// code...
		$sql = "INSERT INTO catImage(pic_name,pic_image) VALUES ('$pic_name','$pic_image')";
		return $this->db_query($sql);
	}

	//add product
	function add_product_cls($pbrand, $pcat, $ptitle, $pprice, $pqty, $pdesc, $pimage, $pkey)
	{
		$sql = "INSERT INTO products(product_brand,product_cat,product_title,product_price,product_qty,product_desc,product_image,product_keywords) VALUES ('$pbrand','$pcat','$ptitle','$pprice','$pqty','$pdesc','$pimage','$pkey')";
		return $this->db_query($sql);
	}

	//--SELECT--//
	function get_all_brand_cls()
	{
		$sql = "SELECT * FROM brands";
		return $this->db_fetch_all($sql);
	}

	function get_one_brand_cls($bidd)
	{
		$sql = "SELECT * FROM brands WHERE brand_id = '$bidd'";
		return $this->db_fetch_one($sql);
	}

	function get_all_category_cls()
	{
		// code...
		$sql = "SELECT * FROM categories";
		return $this->db_fetch_all($sql);
	}

	function get_all_category_page_cls($start, $limit)
	{
		$sql = "SELECT * FROM categories LIMIT $start, $limit";
		return $this->db_fetch_all($sql);
	}

	function get_category_count_cls()
	{
		$sql = "SELECT COUNT(*) as total_categories FROM categories";
		$result = $this->db_fetch_one($sql);
		return $result['total_categories'];
	}

	// get all category image
	function get_all_category_image_cls()
	{
		// code...
		$sql = "SELECT * FROM catImage";
		return $this->db_fetch_all($sql);
	}

	function get_one_category_cls($cidd)
	{
		$sql = "SELECT * FROM categories WHERE cat_id = '$cidd'";
		return $this->db_fetch_one($sql);
	}

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

	function product_view_by_category_cls($cat_id)
	{
		// code...
		$sql = "SELECT * FROM products WHERE product_cat = '$cat_id'";
		return $this->db_fetch_all($sql);
	}

	function get_one_product_cls($pidd)
	{
		$sql = "SELECT * FROM products WHERE product_id = '$pidd'";
		return $this->db_fetch_one($sql);
	}

	function search_product_cls($find)
	{
		$sql = "SELECT * FROM products WHERE product_title like '%$find%'";
		return $this->db_fetch_all($sql);
	}

	function select_total_qty_from_cart_cls($c_id)
	{
		$sql = "SELECT SUM(qty) FROM cart WHERE c_id=$c_id";
		return $this->db_fetch_all($sql);
	}

	//get best selling product ordered by highest product revenue



	//--UPDATE--//
	function update_brand_cls($bnamee, $bid)
	{
		$sql = "UPDATE brands SET brand_name='$bnamee' WHERE brand_id='$bid'";
		return $this->db_query($sql);
	}

	function update_category_cls($cnamee, $cimage, $cidd)
	{
		$sql = "UPDATE categories SET cat_name='$cnamee', cat_image='$cimage' WHERE cat_id='$cidd'";
		return $this->db_query($sql);
	}

	function update_product_cls($pid, $pbrand, $pcat, $ptitle, $pprice, $pqty, $pdesc, $pimage, $pkey)
	{
		$sql = "UPDATE products SET product_title='$ptitle',product_cat='$pcat', product_price='$pprice',product_qty='$pqty',product_desc='$pdesc', product_keywords='$pkey',product_image='$pimage' WHERE product_id='$pid'";
		return $this->db_query($sql);
	}

	//--DELETE--//
	function delete_brand_cls($brandID)
	{
		$sql = "DELETE FROM brands WHERE brand_id='$brandID'";
		return $this->db_query($sql);
	}

	function delete_category_cls($categoryID)
	{
		$sql = "DELETE FROM categories WHERE cat_id='$categoryID'";
		return $this->db_query($sql);
	}

	function delete_product_cls($productID)
	{
		$sql = "DELETE FROM products WHERE product_id='$productID'";
		return $this->db_query($sql);
	}
}
// ███████╗███╗░░██╗██████╗░
// ██╔════╝████╗░██║██╔══██╗
// █████╗░░██╔██╗██║██║░░██║
// ██╔══╝░░██║╚████║██║░░██║
// ███████╗██║░╚███║██████╔╝
// ╚══════╝╚═╝░░╚══╝╚═════╝░



// ░█████╗░░█████╗░██████╗░████████╗
// ██╔══██╗██╔══██╗██╔══██╗╚══██╔══╝
// ██║░░╚═╝███████║██████╔╝░░░██║░░░
// ██║░░██╗██╔══██║██╔══██╗░░░██║░░░
// ╚█████╔╝██║░░██║██║░░██║░░░██║░░░
// ░╚════╝░╚═╝░░╚═╝╚═╝░░╚═╝░░░╚═╝░░░

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

	// order details
	function insert_order_details_cls($order_id, $product_id, $qty)
	{
		// Get the product price
		$sql = "SELECT product_price FROM products WHERE product_id = '$product_id'";
		$result = $this->db_fetch_one($sql);
		$product_price = $result['product_price'];

		// Calculate the total price for this order detail
		$total_price = $product_price * $qty;

		// Update the revenue table
		$this->update_revenue_cls($total_price);

		// Insert the order detail
		$sql = "INSERT INTO orderdetails (order_id, product_id, qty) VALUES ('$order_id', '$product_id', '$qty')";
		return $this->db_query($sql);
	}

	function update_revenue_cls($amount)
	{
		$today = date('Y-m-d');

		// Check if there is an entry for today
		$sql = "SELECT * FROM revenues WHERE date = '$today'";
		$result = $this->db_fetch_one($sql);

		if ($result) {
			// Update the existing entry for today
			$new_amount = $result['amount'] + $amount;
			$sql = "UPDATE revenues SET amount = '$new_amount' WHERE date = '$today'";
		} else {
			// Insert a new entry for today
			$sql = "INSERT INTO revenues (date, amount) VALUES ('$today', '$amount')";
		}

		return $this->db_query($sql);
	}

	function get_revenue_data_cls()
	{
		$sql = "SELECT date, amount FROM revenues ORDER BY date";
		return $this->db_fetch_all($sql);
	}

	function get_today_revenue_cls()
	{
		$today = date('Y-m-d');

		// Check if there is an entry for today
		$sql = "SELECT * FROM revenues WHERE date = '$today'";
		$result = $this->db_fetch_one($sql);

		if ($result) {
			// Return the revenue amount for today
			return $result['amount'];
		} else {
			// If there is no entry for today, return 0
			return 0;
		}
	}





	function get_total_orders_cls()
	{
		$sql = "SELECT COUNT(*) as total_orders FROM orders";
		$result = $this->db_fetch_one($sql);
		return $result['total_orders'];
	}

	function get_recent_orders_cls($limit = 4)
	{
		$sql = "SELECT o.*, p.product_title, p.product_price
		FROM orders o
		JOIN orderdetails od ON o.order_id = od.order_id
		JOIN products p ON od.product_id = p.product_id
		ORDER BY o.order_date DESC
		LIMIT $limit";
		return $this->db_fetch_all($sql);
	}


	//order details

	//payment
	function payment_cls($amt, $customer_id, $order_id, $currency, $payment_date)
	{
		$sql = "INSERT INTO payment(amt,currency,customer_id,order_id,payment_date) VALUES ('$amt','$currency','$customer_id','$order_id','$payment_date')";
		return $this->db_query($sql);
	}

	function get_total_revenue_cls()
	{
		$sql = "SELECT SUM(amt) as total_revenue FROM payment";
		$result = $this->db_fetch_one($sql);
		return $result['total_revenue'];
	}

	//get all from cart items
	function get_all_cart_items_cls($c_id)
	{
		$sql = "SELECT * FROM cart WHERE c_id=$c_id";
		return $this->db_fetch_all($sql);
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

	function get_top_selling_products_cls($limit = 5)
	{
		$sql = "SELECT p.product_id, p.product_title, p.product_price, p.product_image, COUNT(DISTINCT od.order_id) as total_orders, SUM(od.qty) as total_qty, SUM(p.product_price * od.qty) as total_price
            FROM orderdetails od
            JOIN products p ON od.product_id = p.product_id
            GROUP BY p.product_id, p.product_title, p.product_price, p.product_image
            ORDER BY total_qty DESC
            LIMIT $limit";

		return $this->db_fetch_all($sql);
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

// ███████╗███╗░░██╗██████╗░
// ██╔════╝████╗░██║██╔══██╗
// █████╗░░██╔██╗██║██║░░██║
// ██╔══╝░░██║╚████║██║░░██║
// ███████╗██║░╚███║██████╔╝
// ╚══════╝╚═╝░░╚══╝╚═════╝░
