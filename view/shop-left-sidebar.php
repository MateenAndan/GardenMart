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
<html lang="en">


<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>All Products</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">All Products</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Poster Section Start -->
<section>
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="slider-1 slider-animate product-wrapper no-arrow">
                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="../assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="../assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="banner-contain-2 hover-effect">
                            <img src="../assets/images/shop/1.jpg" class="bg-img rounded-3 blur-up lazyload" alt="">
                            <div class="banner-detail p-center-right position-relative shop-banner ms-auto banner-small">
                                <div>
                                    <h2>Healthy, nutritious & Tasty Fruits & Veggies</h2>
                                    <h3>Save upto 50%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Poster Section End -->

<!-- Shop Section Start -->
<section class="section-b-space shop-section">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-custome-3">
                <div class="left-box wow fadeInUp">
                    <div class="shop-left-sidebar">
                        <div class="back-button">
                            <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                        </div>

                        <div class="accordion custome-accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>Categories</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        <div class="form-floating theme-form-floating-2 search-box">
                                            <input type="search" class="form-control" id="search" placeholder="Search ..">
                                            <label for="search">Search</label>
                                        </div>
                                        <ul class="category-list custom-padding">
                                        <?php
											if ($cat_list) {
												foreach ($cat_list as $one_cat) {
													$cat_id = $one_cat['cat_id'];
													$cat_name = $one_cat['cat_name'];
													echo "
													<li>
                                                        <div class='form-check ps-0 m-0 category-list-box'>
                                                            <input class='checkbox_animated' type='checkbox' id='fruit'>
                                                            <label class='form-check-label' for='fruit'>
                                                                <span class='name'>$cat_name</span>
                                                            </label>
                                                        </div>
                                                    </li>
													";
												}
											}else {
												echo "<li><a>No Category Found</a></li>";
											}
											?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-custome-9">
                <div class="show-button">
                    <div class="top-filter-menu">
                        <div class="grid-option d-none d-md-block">
                            <ul>
                                <li class="three-grid">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                    </a>
                                </li>
                                <li class="grid-btn d-xxl-inline-block d-none active">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/svg/grid-4.svg" class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                        <img src="../assets/svg/grid.svg" class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt="">
                                    </a>
                                </li>
                                <li class="list-btn">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/svg/list.svg" class="blur-up lazyload" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                    <?php
                    $productlist = get_all_product_ctr();
                    foreach ($productlist as $aproduct) {

                        $product_id = $aproduct['product_id'];
                        $product_title = $aproduct['product_title'];
                        $product_cat = $aproduct['product_cat'];
                        $product_price = $aproduct['product_price'];
                        $product_image = $aproduct['product_image'];
                        $product_desc = $aproduct['product_desc'];

                        if (logged_in() == true) {
                            echo "
                            <div>
                                <div class='product-box-3 h-100 wow fadeInUp' data-wow-delay='0.05s'>
                                    <div class='product-header'>
                                        <div class='product-image'>
                                            <a href='product-left-thumbnail.html'>
                                                <img src='../images/$product_image'
                                                    class='img-fluid blur-up lazyload' alt=''>
                                            </a>
                                        </div>
                                    </div>
                                    <div class='product-footer'>
                                        <div class='product-detail'>
                                            <span class='span-name'>$product_cat</span>
                                            <a href='product-left-thumbnail.html'>
                                                <h5 class='name'>$product_title</h5>
                                            </a>
                                            <p class='text-content mt-1 mb-2 product-content'>$product_desc</p>
                                    
                                            
                                            <h5 class='price'><span class='theme-color'>GHS $product_price</span>
                                            </h5>
                                            <div class='add-to-cart-box bg-white'>
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
                                ";
                        } else {
                            echo "
                            <div>
                                <div class='product-box-3 h-100 wow fadeInUp' data-wow-delay='0.05s'>
                                    <div class='product-header'>
                                        <div class='product-image'>
                                            <a href='product-left-thumbnail.html'>
                                                <img src='../images/$product_image'
                                                    class='img-fluid blur-up lazyload' alt=''>
                                            </a>
                                        </div>
                                    </div>
                                    <div class='product-footer'>
                                        <div class='product-detail'>
                                            <span class='span-name'>$product_cat</span>
                                            <a href='product-left-thumbnail.html'>
                                                <h5 class='name'>$product_title</h5>
                                            </a>
                                            <p class='text-content mt-1 mb-2 product-content'>$product_desc</p>
                                    
                                            
                                            <h5 class='price'><span class='theme-color'>GHS $product_price</span>
                                            </h5>
                                            <div class='add-to-cart-box bg-white'>
                                            <a href = 'login.php'>
                                                <button class='btn btn-add-cart addcart-button'>Add to cart
                                                    <span class='add-icon'>
                                                        <i class='fa-solid fa-plus'></i>
                                                    </span>
                                                </button>
                                            </a>
                                            

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                ";
                        }
                    }
                    ?>

                </div>

                <nav class="custome-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-disabled="true">
                                <i class="fa-solid fa-angles-left"></i>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">
                                <i class="fa-solid fa-angles-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->

<!-- Footer Section Start -->
<?php include 'footer.php'; ?>
<!-- Footer Section End -->

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="Search Your Area">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>Select a Location</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Alabama</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Arizona</h6>
                                <span>Min: $150</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>California</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Colorado</h6>
                                <span>Min: $140</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Florida</h6>
                                <span>Min: $160</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Georgia</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Kansas</h6>
                                <span>Min: $170</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Minnesota</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>New York</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Washington</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Modal End -->


<!-- Add to cart Modal Start -->
<div class="add-cart-box">
    <div class="add-iamge">
        <img src="../assets/images/cake/pro/1.jpg" class="img-fluid blur-up lazyload" alt="">
    </div>

    <div class="add-contain">
        <h6>Added to Cart</h6>
    </div>
</div>
<!-- Add to cart Modal End -->

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

<!-- Price Range Js -->
<script src="../assets/js/ion.rangeSlider.min.js"></script>

<!-- Quantity js -->
<script src="../assets/js/quantity-2.js"></script>

<!-- sidebar open js -->
<script src="../assets/js/filter-sidebar.js"></script>

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
        success: function(data) {
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
        error: function() {
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