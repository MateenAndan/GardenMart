<?php
include("bars.php");

if (logged_in() == true) {
    // code...
    $adminn = check_admin();
    if ($adminn == 1) {
        header('location:../admin/admin.php');
    } else {
        // echo "no access";
    }
}

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
?>

<!DOCTYPE html>
<html lang="en">

<!-- Breadcrumb Section Start -->
<section class="breadscrumb-section pt-0">
    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="breadscrumb-contain">
                    <h2>Cart</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Cart Section Start -->
<section class="cart-section section-b-space">
    <div class="container-fluid-lg">
        <div class="row g-sm-5 g-3">
            <div class="col-xxl-9">
                <div class="cart-table">
                    <div class="table-responsive-xl">
                        <table class="table">
                            <tbody>
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

                                        if ($product_qty == 1) {
                                            echo "
                                                <tr class='product-box-contain'>
                                                    <td class='product-detail'>
                                                        <div class='product border-0'>
                                                            <a href='product_view.php?vid=$product_id' class='product-image'>
                                                                <img src='../images/$product_image' class='img-fluid blur-up lazyload'
                                                                    alt=''>
                                                            </a>
                                                            <div class='product-detail'>
                                                                <ul>
                                                                    <li class='name'>
                                                                        <a href='#'>$product_title</a>
                                                                    </li>
    
                                                                    <li>
    
                                                                    </li>
    
                                                                    <li>
    
                                                                    </li>
    
                                                                    <li class='quantity-price-box'>
                                                                        <div class='cart_qty'>
                                                                            <div class='input-group'>
                                                                                <button type='button' class='btn qty-left-minus'
                                                                                    data-type='minus' data-field=''>
                                                                                    <i class='fa fa-minus ms-0' aria-hidden='true'></i>
                                                                                </button>
                                                                                <input class='form-control input-number qty-input'
                                                                                    type='text' name='quantity' value='0'>
                                                                                <button type='button' class='btn qty-right-plus'
                                                                                    data-type='plus' data-field=''>
                                                                                    <i class='fa fa-plus ms-0' aria-hidden='true'></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
    
                                                                    <li>
                                                                        <h5>Total: GHS $grandtotal1</h5>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
    
                                                    <td class='price'>
                                                        <h4 class='table-title text-content'>Price</h4>
                                                        <h5>GHS $product_price</h5>
                                                    </td>
    
                                                    <td class='quantity'>
                                                        <h4 class='table-title text-content'>Qty</h4>
                                                        <div class='quantity-price'>
                                                            <div class='cart_qty'>
                                                                <div class='input-group'>
                                                                    <button type='button' class='btn qty-left-minus' data-type='minus'
                                                                        data-field=''>
                                                                        <i class='fa fa-minus ms-0' aria-hidden='true'></i>
                                                                    </button>
                                                                    <input class='form-control input-number qty-input' type='text'
                                                                        name='quantity' value='$product_qty'>
                                                                    <a href='../functions/manage_cart.php?update1=$product_id'>
                                                                        <button type='button' class='btn qty-right-plus'
                                                                            data-type='plus' data-field=''>
                                                                            <i class='fa fa-plus ms-0' aria-hidden='true'></i>
                                                                        </button>
                                                                    </a>
    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
    
                                                    <td class='subtotal'>
                                                        <h4 class='table-title text-content'>Total</h4>
                                                        <h5>GHS $itemtotal_price</h5>
                                                    </td>
    
                                                    <td class='save-remove'>
                                                        <h4 class='table-title text-content'>Action</h4>
                                                        <a class='remove close_button' onclick='removeFromCart($product_id)'>Remove</a>
                                                    </td>
                                                </tr>
                                            ";
                                        } else {
                                            echo "
                                                <tr class='product-box-contain'>
                                                    <td class='product-detail'>
                                                        <div class='product border-0'>
                                                            <a href='product_view.php?vid=$product_id' class='product-image'>
                                                                <img src='../images/$product_image' class='img-fluid blur-up lazyload'
                                                                    alt=''>
                                                            </a>
                                                            <div class='product-detail'>
                                                                <ul>
                                                                    <li class='name'>
                                                                        <a href='#'>$product_title</a>
                                                                    </li>
    
                                                                    <li>
    
                                                                    </li>
    
                                                                    <li>
    
                                                                    </li>
    
                                                                    <li class='quantity-price-box'>
                                                                        <div class='cart_qty'>
                                                                            <div class='input-group'>
                                                                                <button type='button' class='btn qty-left-minus'
                                                                                    data-type='minus' data-field=''>
                                                                                    <i class='fa fa-minus ms-0' aria-hidden='true'></i>
                                                                                </button>
                                                                                <input class='form-control input-number qty-input'
                                                                                    type='text' name='quantity' value='0'>
                                                                                <button type='button' class='btn qty-right-plus'
                                                                                    data-type='plus' data-field=''>
                                                                                    <i class='fa fa-plus ms-0' aria-hidden='true'></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
    
                                                                    <li>
                                                                        <h5>Total: GHS $grandtotal1</h5>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
    
                                                    <td class='price'>
                                                        <h4 class='table-title text-content'>Price</h4>
                                                        <h5>GHS $product_price</h5>
                                                    </td>
    
                                                    <td class='quantity'>
                                                        <h4 class='table-title text-content'>Qty</h4>
                                                        <div class='quantity-price'>
                                                            <div class='cart_qty'>
                                                                <div class='input-group'>
                                                                <a href='../functions/manage_cart.php?decrease=$product_id'>
                                                                <button type='button' class='btn qty-left-minus' data-type='minus'
                                                                data-field=''>
                                                                <i class='fa fa-minus ms-0' aria-hidden='true'></i>
                                                            </button>
                                                                </a>
                                                                    
                                                                    <input class='form-control input-number qty-input' type='text'
                                                                        name='quantity' value='$product_qty'>
                                                                    <a href='../functions/manage_cart.php?update1=$product_id'>
                                                                        <button type='button' class='btn qty-right-plus'
                                                                            data-type='plus' data-field=''>
                                                                            <i class='fa fa-plus ms-0' aria-hidden='true'></i>
                                                                        </button>
                                                                    </a>
    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
    
                                                    <td class='subtotal'>
                                                        <h4 class='table-title text-content'>Total</h4>
                                                        <h5>GHS $itemtotal_price</h5>
                                                    </td>
    
                                                    <td class='save-remove'>
                                                        <h4 class='table-title text-content'>Action</h4>
                                                        <a class='remove close_button' onclick='removeFromCart($product_id)'>Remove</a>
                                                    </td>
                                                </tr>
                                            ";
                                        }
                                    }
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3">
                <div class="summery-box p-sticky">
                <?php
						foreach ($cartlist as $oneproduct) {

							$product_title = $oneproduct['product_title'];
							$product_price = $oneproduct['product_price'];
							$product_qty=  $oneproduct['qty'];
							$itemtotal_price= $product_price * $product_qty;
						}
						?>
                    <div class="summery-header">
                        <h3>Cart Total</h3>
                    </div>

                    <div class="summery-contain">
                        <ul>
                            <li>
                                <h4>Subtotal</h4>
                                <?php echo "<h4 class='price'>GHS $grandtotal1</h4>"; ?>
                            </li>
                        </ul>
                    </div>

                    <ul class="summery-total">
                        <li class="list-total border-top-0">
                            <h4>Total</h4>
                            <?php echo"<h4 class='price theme-color'>$grandtotal1</h4>"; ?>
                        </li>
                    </ul>

                    <div class="button-group cart-button">
                        <ul>
                            <li>
                                <button onclick="location.href = 'checkout.php';" class="btn btn-animation proceed-btn fw-bold">Process To Checkout</button>
                            </li>

                            <li>
                                <button onclick="location.href = '../index.php';" class="btn btn-light shopping-button text-dark">
                                    <i class="fa-solid fa-arrow-left-long"></i>Return To Shopping</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section End -->

<!-- Footer Section Start -->
<?php include("footer.php") ?>
<!-- Footer Section End -->

<!-- Location Modal Start -->
<!-- <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> -->
<!-- Location Modal End -->

<!-- Deal Box Modal Start -->
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="../assets/images/vegetable/product/10.png" class="blur-up lazyload" alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="../assets/images/vegetable/product/11.png" class="blur-up lazyload" alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="../assets/images/vegetable/product/12.png" class="blur-up lazyload" alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                    <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="../assets/images/vegetable/product/13.png" class="blur-up lazyload" alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
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
<script src="../assets/js/quantity.js"></script>

<!-- script js -->
<script src="../assets/js/script.js"></script>
<!--quantity-->
<script>
    $('.value-plus').on('click', function() {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function() {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) divUpd.text(newVal);
    });
</script>
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