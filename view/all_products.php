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
                                    <a href="../index.php">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All products</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Wishlist Section Start -->
    <section class="wishlist-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-3 g-2">
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
                            <div class='col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain'>
                                <div class='product-box-3 h-100'>
                                    <div class='product-header'>
                                        <div class='product-image'>
                                            <a href='product-left-thumbnail.php?vid=$product_id'>
                                                <img src='../images/$product_image'
                                                    alt=''>
                                            </a>
                                        </div>
                                    </div>
                                    <div class='product-footer'>
                                        <div class='product-detail'>
                                            <span class='span-name'>$product_cat</span>
                                            <a href='product_view.php?vid=$product_id'>
                                                <h5 class='name'>$product_title</h5>
                                            </a>
                                            <h5 class='price'>
                                                <span class='theme-color'>GHS $product_price</span>
                                            </h5>

                                            <div class='add-to-cart-box bg-white mt-2'>
                                                <button class='btn btn-add-cart addcart-button'onclick='addToCart($product_id)'>Add
                                                    <span class='add-icon bg-light-gray'>
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
                            <div class='col-xxl-2 col-lg-3 col-md-4 col-6 product-box-contain'>
                                <div class='product-box-3 h-100'>
                                    <div class='product-header'>
                                        <div class='product-image'>
                                            <a href='product_view.php?vid=$product_id'>
                                                <img src='../images/$product_image'
                                                    alt=''>
                                            </a>
                                        </div>
                                    </div>
                                    <div class='product-footer'>
                                        <div class='product-detail'>
                                            <span class='span-name'>$product_cat</span>
                                            <a href='product_view.php?vid=$product_id'>
                                                <h5 class='name'>$product_title</h5>
                                            </a>
                                            <h5 class='price'>
                                                <span class='theme-color'>GHS $product_price</span>
                                            </h5>

                                            <div class='add-to-cart-box bg-white mt-2'>
                                                <a href='login.php'>
                                                    <button class='btn btn-add-cart addcart-button'>Add
                                                        <span class='add-icon bg-light-gray'>
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
        </div>
    </section>
    <!-- Wishlist Section End -->

    <!-- Footer Section Start -->
    <?php include "footer.php"; ?>
    <!-- Footer Section End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Quantity js -->
    <script src="../assets/js/quantity-2.js"></script>

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