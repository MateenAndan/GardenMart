<?php
require("../controllers/global_controller.php");

if (isset($_POST['update_category'])) {
    // Debugging: print the POST data
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
    // Update category
    // Grab form data
    $cnamee = ($_POST['cnamee']);
    $cimage = ($_POST['cimage']);
    $cidd = ($_POST['cidd']);

    // Debugging: print the variables
    echo "Category Name: " . $cnamee . "<br>";
    echo "Category Image: " . $cimage . "<br>";
    echo "Category ID: " . $cidd . "<br>";
    
    // Call a controller
    $check = update_category_ctr($cnamee, $cimage, $cidd);

    if ($check) {
        // Debugging: success message
        echo "Update successful. Redirecting...<br>";
        header("location:../admin/category.php");
    } else {
        echo "Update failed";
    }
} else {
    echo "Update category button not clicked";
}
