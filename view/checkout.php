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

<body>
    <!-- Loader Start -->
    <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <!-- Loader End -->

    <!-- Breadcrumb Section Start -->
    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>Checkout</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout section Start -->
    <section class="checkout-section-2 section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-lg-8">
                    <div class="left-sidebar-checkout">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/ggihhudh.json"
                                            trigger="loop-on-hover"
                                            colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
                                            class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Delivery Address</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <div class="delivery-address-box">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jack"
                                                                    id="flexRadioDefault1">
                                                            </div>

                                                            <div class="label">
                                                                <label>Home</label>
                                                            </div>

                                                            <ul class="delivery-address-detail">
                                                                <li>
                                                                    <h4 class="fw-500">Jack Jennas</h4>
                                                                </li>

                                                                <li>
                                                                    <p class="text-content"><span
                                                                            class="text-title">Address
                                                                            : </span>8424 James Lane South San
                                                                        Francisco, CA 94080</p>
                                                                </li>

                                                                <li>
                                                                    <h6 class="text-content"><span
                                                                            class="text-title">Pin Code
                                                                            :</span> +380</h6>
                                                                </li>

                                                                <li>
                                                                    <h6 class="text-content mb-0"><span
                                                                            class="text-title">Phone
                                                                            :</span> + 380 (0564) 53 - 29 - 68</h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6 col-lg-12 col-md-6">
                                                    <div class="delivery-address-box">
                                                        <div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="jack"
                                                                    id="flexRadioDefault2" checked="checked">
                                                            </div>

                                                            <div class="label">
                                                                <label>Office</label>
                                                            </div>

                                                            <ul class="delivery-address-detail">
                                                                <li>
                                                                    <h4 class="fw-500">Jack Jennas</h4>
                                                                </li>

                                                                <li>
                                                                    <p class="text-content"><span
                                                                            class="text-title">Address
                                                                            :</span>Nakhimovskiy R-N / Lastovaya Ul.,
                                                                        bld. 5/A, appt. 12
                                                                    </p>
                                                                </li>

                                                                <li>
                                                                    <h6 class="text-content"><span
                                                                            class="text-title">Pin Code :</span>
                                                                        +380</h6>
                                                                </li>

                                                                <li>
                                                                    <h6 class="text-content mb-0"><span
                                                                            class="text-title">Phone
                                                                            :</span> + 380 (0564) 53 - 29 - 68</h6>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/oaflahpk.json"
                                            trigger="loop-on-hover" colors="primary:#0baf9a" class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Delivery Option</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="row g-4">
                                                <div class="col-xxl-6">
                                                    <div class="delivery-option">
                                                        <div class="delivery-category">
                                                            <div class="shipment-detail">
                                                                <div
                                                                    class="form-check custom-form-check hide-check-box">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="standard" id="standard" checked>
                                                                    <label class="form-check-label"
                                                                        for="standard">Standard
                                                                        Delivery Option</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-6">
                                                    <div class="delivery-option">
                                                        <div class="delivery-category">
                                                            <div class="shipment-detail">
                                                                <div
                                                                    class="form-check mb-0 custom-form-check show-box-checked">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="standard" id="future">
                                                                    <label class="form-check-label" for="future">Future
                                                                        Delivery Option</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 future-box">
                                                    <div class="future-option">
                                                        <div class="row g-md-0 gy-4">
                                                            <div class="col-md-6">
                                                                <div class="delivery-items">
                                                                    <div>
                                                                        <h5 class="items text-content"><span>3
                                                                                Items</span>@
                                                                            $693.48</h5>
                                                                        <h5 class="charge text-content">Delivery Charge
                                                                            $34.67
                                                                            <button type="button" class="btn p-0"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top"
                                                                                title="Extra Charge">
                                                                                <i
                                                                                    class="fa-solid fa-circle-exclamation"></i>
                                                                            </button>
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <form
                                                                    class="form-floating theme-form-floating date-box">
                                                                    <input type="date" class="form-control">
                                                                    <label>Select Date</label>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right-side-summery-box">
                        <div class="summery-box-2">
                            <div class="summery-header">
                                <h3>Order Summery</h3>
                            </div>
                            <?php
                            foreach ($cartlist as $oneproduct) {
                                $product_id = $oneproduct['product_id'];
                                $product_title = $oneproduct['product_title'];
                                $product_price = $oneproduct['product_price'];
                                $product_image = $oneproduct['product_image'];
                                $product_qty = $oneproduct['qty'];
                                $itemtotal_price = $product_price * $product_qty;
                                echo
                                    "
                                <ul class='summery-contain'>
                                    <li>
                                        <img src='../images/$product_image'
                                            class='img-fluid blur-up lazyloaded checkout-image' alt=''>
                                        <h4>$product_title <span>X $product_qty</span></h4>
                                        <h4 class='price'>$itemtotal_price</h4>
                                    </li>
                                </ul>
                                ";
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
                            <ul class="summery-total">
                                <li>
                                    <h4>Subtotal</h4>
                                    <?php echo "<h4 class='price'>GHS $grandtotal1</h4>"; ?>
                                <li class="list-total">
                                    <h4>Total</h4>
                                    <?php echo "<h4 class='price'>GHS $grandtotal1</h4>"; ?>
                                </li>
                            </ul>
                        </div>
                        <form action="" method="POST">
                            <input type="hidden" id="email" name="email" value="<?php echo $email; ?>">
                            <input type="hidden" id="amount" name="amount" value="<?php echo $grandtotal1; ?>">
                            <input type="hidden" name="customerid" value="<?php echo $c_id; ?>">
                            <button class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold" type="submit"
                                name="pay_now" id="pay-now" title="Pay now" onclick=payWithPaystack()>Place
                                Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout section End -->

    <!-- Footer Section Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer Section End -->



    <!-- Add address modal box start -->
    <div class="modal fade theme-modal" id="add-address" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Add a new address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                            <label for="fname">First Name</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                            <label for="lname">Last Name</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                            <label for="email">Email Address</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="address"
                                style="height: 100px"></textarea>
                            <label for="address">Enter Address</label>
                        </div>
                    </form>

                    <form>
                        <div class="form-floating mb-4 theme-form-floating">
                            <input type="email" class="form-control" id="pin" placeholder="Enter Pin Code">
                            <label for="pin">Pin Code</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn theme-bg-color btn-md text-white" data-bs-dismiss="modal">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add address modal box end -->


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

    <!-- Lordicon Js -->
    <script src="../assets/js/lusqsztk.js"></script>

    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- feather icon js-->
    <script src="../assets/js/feather/feather.min.js"></script>
    <script src="../assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="../assets/js/lazysizes.min.js"></script>

    <!-- Delivery Option js -->
    <script src="../assets/js/delivery-option.js"></script>

    <!-- Slick js-->
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/slick/custom_slick.js"></script>

    <!-- Quantity js -->
    <script src="../assets/js/quantity.js"></script>

    <!-- script js -->
    <script src="../assets/js/script.js"></script>
    <script>

        function payWithPaystack() {

            var one = document.getElementById("email").value;
            var two = document.getElementById("amount").value;

            event.preventDefault();

            let handler = PaystackPop.setup({

                key: 'pk_test_fc63fd0470087f47218edb66bb0da49c85a8d3ce', // Replace with your public key
                email: document.getElementById("email").value,
                amount: document.getElementById("amount").value * 100,
                currency: 'GHS',
                ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"

                onClose: function () {
                    alert('Window closed.');
                },
                callback: function (response) {
                    //let message = 'Payment complete! Reference: ' + response.reference;
                    //alert(message);
                    // window.location='payment_sucess.php?email='+one+'&amount='+two;
                    $.ajax({
                        url: '../functions/payment_proc.php?reference=' + response.reference + '&email=' + one + '&amount=' + two,
                        method: 'get',
                        success: function (response) {
                            // the transaction status is in response.data.status
                            alert(response);
                            window.location = 'homepage.php';
                        }
                    });
                }

            });
            handler.openIframe();
        }
    </script>
</body>

</html>