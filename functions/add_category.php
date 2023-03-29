<?php
//connect the controller
require("../controllers/product_controller.php");

//check for
if (isset($_POST['add_category'])) {
	//register user
	//grab from data
	$cname = ($_POST['cname']);
	$cimage = ($_FILES['picture']['name']);
	
	//call a controller
	$check = insert_category_ctr($cname, $cimage);

	if ($check) {
		header("location:../admin/category.php");
	} else {
		echo "Insert failed";
	}
}

//insert category image
if (isset($_POST['add_image'])) {
	//grab from data
	$pic_name = ($_POST['pic_name']);
	$pic_image = ($_FILES['picture']['name']);

	$target = "../assets/svg/1" . basename($_FILES['picture']['name']);

	//call a controller
	$check = insert_category_image_ctr($pic_name, $pic_image);

	if ($check) {
		if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
			echo "success";
			# code...
		} else {
			echo "fail";
		}
		header("location:../admin/upload.php");
	} else {
		echo "Insert failed";
	}
}

if (isset($_GET['delete'])) {
	$categoryID= $_GET['delete'];
	$check= delete_category_ctr($categoryID);
	if ($check) {
		header("location:../admin/category.php");
	} else {
		echo "fail";
	}

}
