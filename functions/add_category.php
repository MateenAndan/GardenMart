<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//connect the controller
require("../controllers/global_controller.php");

//check for
//insert category name and image
if (isset($_POST['add_category'])) {
	//register user
	//grab from data
	$cname = ($_POST['cname']);
	$cimage = isset($_POST['cimage']) ? $_POST['cimage'] : '';

	// var_dump($cname); // Debug
    // var_dump($cimage); // Debug

    // if (empty($cname) || empty($cimage)) {
    //     echo "Category name or image not provided";
    //     exit;
    // }
	
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
