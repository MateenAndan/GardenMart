<?php
//connect to database class
require("../settings/db_class.php");

/**
 * Summary of product_class
 */
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
	function add_category_image_cls($pic_name,$pic_image)
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
