<?php
require("../settings/core.php");
require("../controllers/global_controller.php");

if (logged_in() == true) {
    // code...
    $c_id = get_id();
$cartlist = view_cart_ctr($c_id);
$email = email_ctr($c_id);
$email = $email['customer_email'];

$cartlist = view_cart_ctr($c_id);
$total = select_total_qty_from_cart_ctr($c_id);
$total = $total[0];
$total1 = $total['SUM(qty)'];
$grandtotal = select_total_price_ctr($c_id);
$grandtotal = $grandtotal[0];
$grandtotal1 = $grandtotal['SUM(products.product_price*cart.qty)'];
    $adminn = check_admin();
    if ($adminn == 1) {
        header('location:../admin/admin.php');
    } else {
        // echo "no access";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="../assets/images/favicon/logo.png" type="image/x-icon">
    <title>GardenMart</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- wow css -->
    <link rel="stylesheet" href="../assets/css/animate.min.css" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick/slick-theme.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bulk-style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css/style.css">

    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-effect">
    <!-- Header Start -->
    <header class="pb-md-4 pb-0">

        <div class="top-nav top-header sticky-header">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-12">
                        <div class="navbar-top">
                            <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                            <a href="../index.php" class="web-logo nav-logo">
                                <img src="../assets/images/logo/glogo.png" class="img-fluid blur-up lazyload"
                                    alt="GardenMart">
                            </a>

                            <div class="middle-box">
                                <div class="location-box">
                                    <button class="btn location-button" data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                        <span class="locat-name">Your Location</span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </div>

                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="I'm searching for..."
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn" type="button" id="button-addon2">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="rightside-box">
                                <div class="search-full">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" class="form-control search-type" placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </div>
                                <ul class="right-side-menu">
                                    <li class="right-side">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <div class="search-box">
                                                    <i data-feather="search"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side">
                                        <div class="onhover-dropdown header-badge">

                                            <button type="button" class="btn p-0 position-relative header-wishlist">
                                                <i data-feather="shopping-cart"></i>
                                                <?php
                                                if (empty($total1)) {
                                                    echo "
                                                            <span id='cart-badge' class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>
                                                                0
                                                                <span class='visually-hidden'>unread messages</span>
                                                            </span>
                                                    ";
                                                } else {
                                                    echo "
                                                            <span id='cart-badge' class='position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger'>$total1
                                                                <span class='visually-hidden'>unread messages</span>
                                                            </span>
                                                    ";
                                                }
                                                ?>

                                            </button>

                                            <div class="onhover-div">
                                                <?php
                                                if (empty($cartlist)) {
                                                    echo "<h5 class='text-center'>Your cart is empty</h5>";
                                                } else {
                                                    foreach ($cartlist as $oneproduct) {
                                                        $product_id = $oneproduct['product_id'];
                                                        $product_title = $oneproduct['product_title'];
                                                        $product_price = $oneproduct['product_price'];
                                                        $product_image = $oneproduct['product_image'];
                                                        $product_qty = $oneproduct['qty'];
                                                        $itemtotal_price = $product_price * $product_qty;
                                                        echo
                                                            "
                                                            <ul class='cart-list'>
                                                            <li class='product-box-contain'>
                                                                <div class='drop-cart'>
                                                                    <a href='product_view.php?vid=$product_id' class='drop-image'>
                                                                        <img src='../images/$product_image'
                                                                            class='blur-up lazyload' alt=''>
                                                                    </a>
        
                                                                    <div class='drop-contain'>
                                                                        <a href='product_view.php?vid=$product_id'>
                                                                            <h5>$product_title</h5>
                                                                        </a>
                                                                        <h6><span>$product_qty x</span> $itemtotal_price</h6>
                                                                        
                                                                            <button class='close-button close_button' onclick='removeFromCart($product_id)'>
                                                                                <i class='fa-solid fa-xmark'></i>
                                                                            </button>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                            ";
                                                    }

                                                }

                                                ?>

                                                <?php
                                                foreach ($cartlist as $oneproduct) {
                                                    $product_id = $oneproduct['product_id'];
                                                    $product_title = $oneproduct['product_title'];
                                                    $product_price = $oneproduct['product_price'];
                                                    $product_image = $oneproduct['product_image'];
                                                    $product_qty = $oneproduct['qty'];
                                                    $itemtotal_price = $product_price * $product_qty;

                                                }
                                                ?>
                                                <div class="price-box">
                                                    <h5>Total :</h5>
                                                    <?php echo "<h4 class='theme-color fw-bold'>GHS $grandtotal1</h4>"; ?>
                                                </div>

                                                <div class="button-group">
                                                    <?php
                                                    if (!logged_in()) {
                                                        echo "
                                                        <a href='login.php' class='btn btn-sm cart-button'>View Cart</a>
                                                    <a href='login.php' class='btn btn-sm cart-button theme-bg-color
                                                    text-white'>Checkout</a>
                                                        ";
                                                    } else {
                                                        echo "
                                                        <a href='cart.php' class='btn btn-sm cart-button'>View Cart</a>
                                                        <a href='checkout.php' class='btn btn-sm cart-button theme-bg-color
                                                    text-white'>Checkout</a>
                                                        ";
                                                    }
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="right-side onhover-dropdown">
                                        <div class="delivery-login-box">
                                            <div class="delivery-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="delivery-detail">
                                                <h6>Hello,</h6>
                                                <?php
                                                //get customer name
                                                $customer_name = customer_name_ctr($customer_id);
                                                if (logged_in() == true) {
                                                    echo "<h5>$customer_name</h5>";
                                                } else {
                                                    echo "<h5>My Account but signed out</h5>";
                                                }
                                                ?>

                                            </div>
                                        </div>

                                        <div class="onhover-div onhover-div-login">
                                            <ul class="user-box-name">
                                                <?php
                                                if (logged_in() == true) {
                                                    // code...
                                                    echo "
                                                    <li class='product-box-contain'><a href='../login/logout.php'>Logout</a></li>
                                                    ";
                                                } else {
                                                    echo "
                                                    <li class='product-box-contain'>
                                                    <i></i>
                                                    <a href='login.php'>Log In</a>
                                                    </li>

                                                    <li class='product-box-contain'>
                                                    <a href='sign-up.php'>Register</a>
                                                    </li>

                                                    <li class='product-box-contain'>
                                                    <a href='forgot.php'>Forgot Password</a>
                                                    </li>
                                                    ";
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="header-nav">
                        <div class="header-nav-left">
                            <button class="dropdown-category">
                                <i data-feather="align-left"></i>
                                <span>All Categories</span>
                            </button>

                            <div class="category-dropdown">
                                <div class="category-title">
                                    <h5>Categories</h5>
                                    <button type="button" class="btn p-0 close-button text-content">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                                <?php
                                $cat_list = get_all_category_ctr();
                                if ($cat_list) {
                                    foreach ($cat_list as $one_cat) {
                                        $cat_id = $one_cat['cat_id'];
                                        $cat_name = $one_cat['cat_name'];
                                        // code...
                                        echo "
                                        <ul class='category-list'>
                                        <li class='onhover-category-list'>
                                        <a value='$cat_id' href='shop-category.php?id=$cat_id' class='category-name'>
                                        <img src='../assets/svg/1/vegetable.svg' alt=''>
                                        <h6>$cat_name</h6>
                                        <i class='fa-solid fa-angle-right'></i>
                                        </a>
                                        </li>
                                        </ul>
                                        ";
                                    }
                                } else {
                                    //no course found
                                    echo "<li><a>No Category Found</a></li>";
                                }
                                ?>
                            </div>
                        </div>

                        <div class="header-nav-middle">
                            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5>Menu</h5>
                                        <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="../index.php">Home</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                                    data-bs-toggle="dropdown">Shop</a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" <?php echo"href='shop-category.php?id=1'"; ?>>Shop By
                                                            Category</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="all_products.php">Shop All products</a>
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="index.php">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="search.php" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="wishlist.php" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="cart.php">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <script>
        function removeFromCart(product_id) {
  $.ajax({
    type: "GET",
    url: "../functions/remove_from_cart.php",
    data: { delete: product_id },
    success: function(data) {
      if (data == "success") {
        Swal.fire({
          icon: 'success',
          title: 'Product removed from cart',
          showConfirmButton: false,
          timer: 1500
        });
        updateCart();
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Error removing product from cart',
          showConfirmButton: false,
          timer: 1500
        });
      }
    },
    error: function() {
      Swal.fire({
        icon: 'error',
        title: 'Error removing product from cart',
        showConfirmButton: false,
        timer: 1500
      });
    }
  });
}

    </script>

</body>

</html>