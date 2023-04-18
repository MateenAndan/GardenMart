<?php
include("bars.php");
if (logged_in() == true) {
    // code...
    $adminn = check_admin();
    if ($adminn == 1) {
        header('location:../admin/admin.php');
    } else {
    }
}
?>

<!DOCTYPE html>
<html>

<body class="bg-effect">

    <!-- Loader Start -->
    <!-- <div class="fullpage-loader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div> -->
    <!-- Loader End -->

    <!-- Home Section Start -->
    <section class="home-section pt-2">
        <div class="container-fluid-lg">
            <div class="row g-4">
                <div class="col-xl-8 ratio_65">
                    <div class="home-contain h-100">
                        <div class="h-100">
                            <img src="../images/test.jpg" class="bg-img blur-up lazyload" alt="">
                        </div>
                        <div class="home-detail p-center-left w-75">
                            <div>
                                <h1 style="color:white" class="text-uppercase">Order from the comfort of your <span
                                        class="daily">HOMES</span></h1>
                                <button onclick="location.href = 'shop-left-sidebar.php';"
                                    class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Shop Now <i
                                        class="fa-solid fa-right-long icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 ratio_65">
                    <div class="row g-4">
                        <div class="col-xl-12 col-md-6">
                            <div class="home-contain">
                                <img src="../images/meat.jpg" class="bg-img blur-up lazyload" alt="">
                                <div class="home-detail p-center-left home-p-sm w-75">
                                    <div>
                                        </h2>
                                        <h3 class="theme-color">Fresh Meat</h3>
                                        <a style="color:white" href="shop-left-sidebar.php" class="shop-button">Shop Now
                                            <i class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-md-6">
                            <div class="home-contain">
                                <img src="../images/oh.jpg" class="bg-img blur-up lazyload" alt="">
                                <div class="home-detail p-center-left home-p-sm w-75">
                                    <div>
                                        <h3 class="mt-0 theme-color fw-bold">Healthy Food</h3>
                                        <a style="color:white" href="shop-left-sidebar.php" class="shop-button">Shop Now
                                            <i class="fa-solid fa-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section ratio_60 wow fadeInUp">
        <div class="container-fluid-lg">
            <div class="banner-slider">
                <div>
                    <div class="banner-contain hover-effect">
                        <img src="../images/eggs.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details">
                            <div class="banner-box">
                                <h5>Hot Deals on New Items</h5>
                                <h6 class="text-content">Daily Essentials Eggs & Dairy</h6>
                            </div>
                            <a href="shop-left-sidebar.php" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="../images/sweets.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details">
                            <div class="banner-box">
                                <h5>Buy Moreh\ & Save More</h5>
                                <h6 class="text-content">Sweets</h6>
                            </div>
                            <a href="shop-left-sidebar.php" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="../images/meat.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details">
                            <div class="banner-box">
                                <h5>Organic Meat Prepared</h5>
                                <h6 class="text-content">Delivered to Your Home</h6>
                            </div>
                            <a href="shop-left-sidebar.php" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain hover-effect">
                        <img src="../images/snacks.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details">
                            <div class="banner-box">
                                <h5>Buy More & Save More</h5>
                                <h6 class="text-content">Snacks</h6>
                            </div>
                            <a href="shop-left-sidebar.php" class="banner-button text-white">Shop Now <i
                                    class="fa-solid fa-right-long ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                    <div class="p-sticky">
                        <div class="category-menu">
                            <h3>Category</h3>
                            <ul>
                                <?php
                                $cat_list = get_all_category_ctr();
                                if ($cat_list) {
                                    foreach ($cat_list as $one_cat) {
                                        $cat_id = $one_cat['cat_id'];
                                        $cat_name = $one_cat['cat_name'];
                                        $cimage = $one_cat['cat_image'];
                                        // code...
                                        echo "
                                        <li class='pb-30'>
                                                    <div class='category-list'>
                                                    <img src='../assets/svg/1/$cimage' class='blur-up lazyload' alt=''>
                                                    <h5>
                                                    <a value='$cat_id' href='shop-category.php?id=$cat_id'>$cat_name</a>
                                                    </h5>
                                                    </div>
                                        </li>
                                        ";
                                    }
                                } else {
                                    //no category found
                                    echo "<li><a>No Category Found</a></li>";
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="ratio_156 section-t-space">
                            <div class="home-contain hover-effect">
                                <img src="../images/seafood.jpg" class="bg-img blur-up lazyload" alt="">
                                <div class="home-detail p-top-left
                                        home-p-medium">
                                    <div>
                                        <h6 class="text-yellow home-banner">Seafood</h6>
                                        <h3 class="text-uppercase
                                                fw-normal"><span class="theme-color fw-bold">Freshes</span>
                                            Products</h3>
                                        <h3 class="fw-light">every hour</h3>
                                        <button onclick="location.href=
                                                'shop-left-sidebar.php';" class="btn btn-animation btn-md
                                                mend-auto">Shop Now <i class="fa-solid
                                                    fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ratio_medium section-t-space">
                            <div class="home-contain hover-effect">
                                <img src="../assets/images/vegetable/banner/11.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                                <div class="home-detail p-top-left
                                        home-p-medium">
                                    <div>
                                        <h4 class="text-yellow text-exo
                                                home-banner">Organic</h4>
                                        <h2 class="text-uppercase fw-normal
                                                mb-0 text-russo theme-color">fresh</h2>
                                        <h2 class="text-uppercase fw-normal
                                                text-title">Vegetables</h2>
                                        <p class="mb-3">Super Offer to 50%
                                            Off</p>
                                        <button onclick="location.href=
                                                'shop-left-sidebar.php';" class="btn btn-animation btn-md
                                                mend-auto">Shop Now <i class="fa-solid
                                                    fa-arrow-right icon"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-t-space">
                            <div class="category-menu">
                                <h3>Trending Products</h3>

                                <ul class="product-list border-0 p-0
                                        d-block">
                                    <?php
                                    //getting 5 products at random
                                    
                                    $productlist = get_four_product_ctr();
                                    foreach ($productlist as $aproduct) {
                                        $product_id = $aproduct['product_id'];
                                        $product_title = $aproduct['product_title'];
                                        $product_price = $aproduct['product_price'];
                                        $product_image = $aproduct['product_image'];
                                        $product_desc = $aproduct['product_desc'];
                                        if ($productlist) {
                                            echo "
                                                    <li>
                                                        <div class='offer-product'>
                                                            <a href='product_view.php?vid=$product_id' class='offer-image'>
                                                                <img src='../images/$product_image' class='blur-up lazyload' alt=''>
                                                            </a>

                                                            <div class='offer-detail'>
                                                                <div>
                                                                    <a href='product_view.php?vid=$product_id' class='text-title'>
                                                                        <h6 class='name'>$product_title</h6>
                                                                    </a>
                                                                    <span>$product_desc</span>
                                                                    <h6 class='price
                                                                            theme-color'>GHS $product_price</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    ";
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-9 col-xl-8">
                    <div class="title title-flex">
                        <div>
                            <h2>Top Save Today</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                            <p>Don't miss this opportunity at a special
                                discount just for this week.</p>
                        </div>
                    </div>

                    <div class="section-b-space">
                        <div class="product-border border-row
                                overflow-hidden">
                            <div class="product-box-slider no-arrow">
                                <!-- start -->
                                <?php
                                //getting 5 products at random
                                
                                $productlist = get_five_product_ctr();
                                foreach ($productlist as $aproduct) {
                                    $product_id = $aproduct['product_id'];
                                    $product_title = $aproduct['product_title'];
                                    $product_price = $aproduct['product_price'];
                                    $product_image = $aproduct['product_image'];
                                    if (logged_in() == true) {
                                        echo "
                                        <div>
                                        <div class='row m-0'>
                                            <div class='col-12 px-0'>
                                                <div class='product-box'>
                                                    <div class='product-image'>
                                                        <a href='product_view.php?vid=$product_id'>
                                                            <img src='../images/$product_image' class='img-fluid
                                                                    blur-up
                                                                    lazyload' alt=''>
                                                        </a>
                                                    </div>
                                                    <div class='product-detail'>
                                                        <a href='product_view.php?vid=$product_id'>
                                                            <h6 class='name'>$product_title</h6>
                                                        </a>
    
                                                        <h5 class='sold
                                                                text-content'>
                                                            <span class='theme-color
                                                                    price'>GHS $product_price</span>
                                                        </h5>
    
                                                        <div class='add-to-cart-box'>
                                                        <button class='btn btn-add-cart addcart-button' onclick='addToCart($product_id)'>Add to cart
                                                        <span class='add-icon'>
                                                            <i class='fa-solid fa-plus'></i>
                                                        </span>
                                                    </button>
                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        ";
                                    } else {
                                        echo "
                                        <div>
                                        <div class='row m-0'>
                                            <div class='col-12 px-0'>
                                                <div class='product-box'>
                                                    <div class='product-image'>
                                                        <a href='product_view.php?vid=$product_id'>
                                                            <img src='../images/$product_image' class='img-fluid
                                                                    blur-up
                                                                    lazyload' alt=''>
                                                        </a>
                                                    </div>
                                                    <div class='product-detail'>
                                                        <a href='product_view.php?vid=$product_id'>
                                                            <h6 class='name'>$product_title</h6>
                                                        </a>
    
                                                        <h5 class='sold
                                                                text-content'>
                                                            <span class='theme-color
                                                                    price'>GHS $product_price</span>
                                                        </h5>
    
                                                        <div class='add-to-cart-box'>
                                                        <a href='login.php'>
                                                            <button class='btn
                                                                    btn-add-cart
                                                                    addcart-button'>Add to cart
                                                                <span class='add-icon'>
                                                                    <i class='fa-solid
                                                                            fa-plus'></i>
                                                                </span>
                                                            </button>
                                                        </a>
                                                            <div class='cart_qty
                                                                    qty-box'>
                                                                <div class='input-group'>
                                                                    <button type='button' class='qty-left-minus' data-type='minus 'data-field=''>
                                                                        <i class='fa
                                                                                fa-minus' aria-hidden='true'></i>
                                                                    </button>
                                                                    <input class='form-control
                                                                            input-number
                                                                            qty-input' type='text' name='quantity' value='0'>
                                                                    <button type='button' class='qty-right-plus' data-type='plus' data-field=''>
                                                                        <i class='fa
                                                                                fa-plus' aria-hidden='true'></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        ";
                                    }
                                }
                                ?>
                                <!-- end -->
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <h2>Bowse by Categories</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>Top Categories Of The Week</p>
                    </div>

                    <?php
                    if ($cat_list) {
                        echo '<div class="category-slider-2 product-wrapper no-arrow">';
                        foreach ($cat_list as $one_cat) {
                            $cat_name = $one_cat['cat_name'];
                            $cat_id = $one_cat['cat_id'];
                            $cimage = $one_cat['cat_image'];
                            echo "
                                    <div>
                                        <a value='$cat_id' href='shop-category.php?id=$cat_id'
                                            class='category-box category-dark'>
                                            <div>
                                                <img src='../assets/svg/1/$cimage'
                                                    class='blur-up lazyload' alt=''>
                                                <h5>$cat_name</h5>
                                            </div>
                                        </a>
                                    </div>
                            ";
                        }
                        echo '</div>';
                    }
                    ?>

                    <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="../assets/images/vegetable/banner/9.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left
                                            p-4">
                                        <div>
                                            <h3 class="text-exo">50% offer</h3>
                                            <h4 class="text-russo fw-normal
                                                    theme-color mb-2">Testy
                                                Mushrooms</h4>
                                            <button onclick="location.href=
                                                    'shop-left-sidebar.php';" class="btn btn-animation
                                                    btn-sm mend-auto">Shop Now
                                                <i class="fa-solid
                                                        fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-contain hover-effect">
                                    <img src="../assets/images/vegetable/banner/10.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left
                                            p-4">
                                        <div>
                                            <h3 class="text-exo">50% offer</h3>
                                            <h4 class="text-russo fw-normal
                                                    theme-color mb-2">Fresh MEAT</h4>
                                            <button onclick="location.href=
                                                    'shop-left-sidebar.php';" class="btn btn-animation
                                                    btn-sm mend-auto">Shop Now
                                                <i class="fa-solid
                                                        fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title d-block">
                        <h2>Food Cupboard</h2>
                        <span class="title-leaf">
                            <svg class="icon-width">
                                <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                            </svg>
                        </span>
                        <p>A virtual assistant collects the products from
                            your list</p>
                    </div>

                    <div class="product-border overflow-hidden wow
                            fadeInUp">
                        <div class="product-box-slider no-arrow">
                            <!-- start -->
                            <?php
                            //getting 5 products at random
                            
                            $productlist = get_five_product_ctr();
                            foreach ($productlist as $aproduct) {
                                $product_id = $aproduct['product_id'];
                                $product_title = $aproduct['product_title'];
                                $product_price = $aproduct['product_price'];
                                $product_image = $aproduct['product_image'];
                                if (logged_in() == true) {
                                    echo "
                                    <div>
                                    <div class='row m-0'>
                                        <div class='col-12 px-0'>
                                            <div class='product-box'>
                                                <div class='product-image'>
                                                    <a href='product_view.php?vid=$product_id'>
                                                        <img src='../images/$product_image' class='img-fluid
                                                                blur-up
                                                                lazyload' alt=''>
                                                    </a>
                                                </div>
                                                <div class='product-detail'>
                                                    <a href='product_view.php?vid=$product_id'>
                                                        <h6 class='name'>$product_title</h6>
                                                    </a>

                                                    <h5 class='sold
                                                            text-content'>
                                                        <span class='theme-color
                                                                price'>GHS $product_price</span>
                                                    </h5>

                                                    <div class='add-to-cart-box'>
                                                    <button class='btn btn-add-cart addcart-button' onclick='addToCart($product_id)'>Add to cart
                                                    <span class='add-icon'>
                                                        <i class='fa-solid fa-plus'></i>
                                                    </span>
                                                </button>
                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        ";
                                } else {
                                    echo "
                                        <div>
                                        <div class='row m-0'>
                                            <div class='col-12 px-0'>
                                                <div class='product-box'>
                                                    <div class='product-image'>
                                                        <a href='product_view.php?vid=$product_id'>
                                                            <img src='../images/$product_image' class='img-fluid
                                                                    blur-up
                                                                    lazyload' alt=''>
                                                        </a>
                                                    </div>
                                                    <div class='product-detail'>
                                                        <a href='product_view.php?vid=$product_id'>
                                                            <h6 class='name'>$product_title</h6>
                                                        </a>
    
                                                        <h5 class='sold
                                                                text-content'>
                                                            <span class='theme-color
                                                                    price'>GHS $product_price</span>
                                                        </h5>
    
                                                        <div class='add-to-cart-box'>
                                                        <a href='login.php'>
                                                            <button class='btn
                                                                    btn-add-cart
                                                                    addcart-button'>Add to cart
                                                                <span class='add-icon'>
                                                                    <i class='fa-solid
                                                                            fa-plus'></i>
                                                                </span>
                                                            </button>
                                                        </a>
                                                            <div class='cart_qty
                                                                    qty-box'>
                                                                <div class='input-group'>
                                                                    <button type='button' class='qty-left-minus' data-type='minus 'data-field=''>
                                                                        <i class='fa
                                                                                fa-minus' aria-hidden='true'></i>
                                                                    </button>
                                                                    <input class='form-control
                                                                            input-number
                                                                            qty-input' type='text' name='quantity' value='0'>
                                                                    <button type='button' class='qty-right-plus' data-type='plus' data-field=''>
                                                                        <i class='fa
                                                                                fa-plus' aria-hidden='true'></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        ";
                                }
                            }
                            ?>

                            <!-- end -->
                        </div>
                    </div>

                    <div class="section-t-space">
                        <div class="banner-contain">
                            <img src="../assets/images/vegetable/banner/15.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="banner-details p-center p-4
                                    text-white text-center">
                                <div>
                                    <h3 class="lh-base fw-bold offer-text">Get
                                        $3 Cashback! Min Order of $30</h3>
                                    <h6 class="coupon-code">Use Code :
                                        GROCERY1920</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-t-space section-b-space">
                        <div class="row g-md-4 g-3">
                            <div class="col-xxl-8 col-xl-12 col-md-7">
                                <div class="banner-contain hover-effect">
                                    <img src="../assets/images/vegetable/banner/12.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left
                                            p-4">
                                        <div>
                                            <h2 class="text-kaushan
                                                    fw-normal theme-color">Get
                                                Ready To</h2>
                                            <h3 class="mt-2 mb-3">TAKE ON
                                                THE DAY!</h3>
                                            <p class="text-content
                                                    banner-text">In publishing
                                                and graphic design, Lorem
                                                ipsum is a placeholder text
                                                commonly used to
                                                demonstrate.</p>
                                            <button onclick="location.href=
                                                    'shop-left-sidebar.php';" class="btn btn-animation
                                                    btn-sm mend-auto">Shop Now
                                                <i class="fa-solid
                                                        fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xxl-4 col-xl-12 col-md-5">
                                <a href="shop-left-sidebar.php" class="banner-contain hover-effect
                                        h-100">
                                    <img src="../assets/images/vegetable/banner/13.jpg" class="bg-img blur-up lazyload"
                                        alt="">
                                    <div class="banner-details p-center-left
                                            p-4 h-100">
                                        <div>
                                            <h2 class="text-kaushan
                                                    fw-normal text-danger">20%
                                                Off</h2>
                                            <h3 class="mt-2 mb-2
                                                    theme-color">SUMMRY</h3>
                                            <h3 class="fw-normal
                                                    product-name text-title">Product</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="title d-block">
                        <div>
                            <h2>Our best Seller</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="../assets/svg/leaf.svg#leaf"></use>
                                </svg>
                            </span>
                            <p>A virtual assistant collects the products
                                from your list</p>
                        </div>
                    </div>

                    <div class="best-selling-slider product-wrapper wow
                            fadeInUp">
                        <div>
                            <ul class='product-list'>
                                <?php
                                //getting 5 products at random
                                
                                $productlist = get_five_product_ctr();
                                foreach ($productlist as $aproduct) {
                                    $product_id = $aproduct['product_id'];
                                    $product_title = $aproduct['product_title'];
                                    $product_price = $aproduct['product_price'];
                                    $product_image = $aproduct['product_image'];
                                    $product_desc = $aproduct['product_desc'];
                                    if ($productlist) {
                                        echo "
                                    <li>
                                    <div class='offer-product'>
                                        <a href='product_view.php?vid=$product_id' class='offer-image'>
                                            <img src='../images/$product_image' class='blur-up lazyload' alt=''>
                                        </a>

                                        <div class='offer-detail'>
                                            <div>
                                                <a href='product_view.php?vid=$product_id' class='text-title'>
                                                    <h6 class='name'>$product_title</h6>
                                                </a>
                                                <span>$product_desc</span>
                                                <h6 class='price
                                                        theme-color'>GHS $product_price</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    ";
                                    } else {
                                        echo "No products found";
                                    }
                                }
                                ?>
                            </ul>
                        </div>

                        <div>
                            <ul class="product-list">
                                <?php
                                //getting 5 products at random
                                
                                $productlist = get_five_product_ctr();
                                foreach ($productlist as $aproduct) {
                                    $product_id = $aproduct['product_id'];
                                    $product_title = $aproduct['product_title'];
                                    $product_price = $aproduct['product_price'];
                                    $product_image = $aproduct['product_image'];
                                    $product_desc = $aproduct['product_desc'];
                                    if ($productlist) {
                                        echo "
                                    <li>
                                    <div class='offer-product'>
                                        <a href='product_view.php?vid=$product_id' class='offer-image'>
                                            <img src='../images/$product_image' class='blur-up lazyload' alt=''>
                                        </a>

                                        <div class='offer-detail'>
                                            <div>
                                                <a href='product_view.php?vid=$product_id' class='text-title'>
                                                    <h6 class='name'>$product_title</h6>
                                                </a>
                                                <span>$product_desc</span>
                                                <h6 class='price
                                                        theme-color'>GHS $product_price</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    ";
                                    } else {
                                        echo "No products found";
                                    }
                                }
                                ?>
                            </ul>
                        </div>

                        <div>
                            <ul class="product-list">
                                <?php
                                //getting 5 products at random
                                
                                $productlist = get_five_product_ctr();
                                foreach ($productlist as $aproduct) {
                                    $product_id = $aproduct['product_id'];
                                    $product_title = $aproduct['product_title'];
                                    $product_price = $aproduct['product_price'];
                                    $product_image = $aproduct['product_image'];
                                    $product_desc = $aproduct['product_desc'];
                                    if ($productlist) {
                                        echo "
                                            <li>
                                                <div class='offer-product'>
                                                    <a href='product_view.php?vid=$product_id' class='offer-image'>
                                                        <img src='../images/$product_image' class='blur-up lazyload' alt=''>
                                                    </a>

                                                    <div class='offer-detail'>
                                                        <div>
                                                            <a href='product_view.php?vid=$product_id' class='text-title'>
                                                                <h6 class='name'>$product_title</h6>
                                                            </a>
                                                            <span>$product_desc</span>
                                                            <h6 class='price
                                                                    theme-color'>GHS $product_price</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        ";
                                    } else {
                                        echo "No products found";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
    </section>
    <!-- Newsletter Section End -->

    <?php include("footer.php") ?>

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="../assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                    alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.php';"
                                        class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left.php';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.php" class="deal-image">
                                        <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.php" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.php" class="deal-image">
                                        <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.php" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.php" class="deal-image">
                                        <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.php" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.php" class="deal-image">
                                        <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.php" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="../assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="../assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/slick-animation.min.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Auto Height Js -->
    <script src="../assets/js/auto-height.js"></script>

    <!-- Timer Js -->
    <script src="../assets/js/timer1.js"></script>

    <!-- Fly Cart Js -->
    <script src="../assets/js/fly-cart.js"></script>

    <!-- Quantity js -->
    <script src="../assets/js/quantity-2.js"></script>

    <!-- WOW js -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>

    <script>
        function addToCart(product_id) {
            $.ajax({
                type: "GET",
                url: "../functions/add_to_cart.php",
                data: { pid: product_id },
                success: function (data) {
                    if (data == "added") {
                        Swal.fire({
                            icon: 'success',
                            title: 'Product added to cart',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else if (data == "exists") {
                        Swal.fire({
                            icon: 'info',
                            title: 'Product already in cart',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error adding product to cart',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error adding product to cart',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        }

    </script>

</body>

</html>