<?php
include("bars.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- index body start -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <!-- chart caard section start -->
                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 border-0 card-hover card o-hidden">
                        <div class="custome-1-bg b-r-4 card-body">
                            <div class="media align-items-center static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Overall Revenue</span>
                                    <h4 class="mb-0 counter">GHS
                                        <?php echo number_format(get_total_revenue_ctr(), 2); ?>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-database-2-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 border-0 card-hover card o-hidden">
                        <div class="custome-1-bg b-r-4 card-body">
                            <div class="media align-items-center static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Total Revenue (Today)</span>
                                    <h4 class="mb-0 counter">GHS
                                        <?php echo number_format(get_today_revenue_ctr(), 2); ?>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-database-2-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-2-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Total Orders</span>
                                    <h4 class="mb-0 counter">
                                        <?php echo get_total_orders_ctr(); ?>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-shopping-bag-3-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                        <div class="custome-3-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Total Products</span>
                                    <?php
                                    // $products = get_all_product_ctr();
                                    // $total_products = count($products);
                                    ?>
                                    <h4 class="mb-0 counter">
                                        <?php //echo $total_products; ?>
                                        <a href="add-new-product.php" class="badge badge-light-secondary grow">
                                            ADD NEW</a>
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-chat-3-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-4-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Total Customers</span>
                                    <?php
                                    $customers = get_all_customer_ctr();
                                    $total_customers = count($customers);
                                    ?>
                                    <h4 class="mb-0 counter">
                                        <?php echo $total_customers; ?>
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-user-add-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ˝

                <div class="col-12">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0 pb-1">
                            <div class="card-header-title p-0">
                                <h4>Category</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="category-slider no-arrow">

                                <?php
                                $cat_list = get_all_category_ctr();
                                foreach ($cat_list as $acategory) {
                                    // code...
                                    $cid = $acategory['cat_id'];
                                    $cname = $acategory['cat_name'];
                                    $cimage = $acategory['cat_image'];

                                    echo "
                                                <div>
                                                <div class='dashboard-category'>
                                                <a href='javascript:void(0)'' class='category-image'>
                                                <img src='../assets/svg/1/$cimage' class='img-fluid' alt=''>
                                                </a>
                                                <a href='javascript:void(0)' class='category-name'>
                                                <h6>$cname</h6>
                                                </a>
                                                </div>
                                                </div>
                                                ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- chart card section End -->


                <!-- Earning chart star-->
                <div class="col-xl-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0 pb-1">
                            <div class="card-header-title">
                                <h4>Revenue Report</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="report-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- Earning chart  end-->

                <!-- Best Selling Product Start -->
                <div class="col-xl-6 col-md-12">
                    <div class="card o-hidden card-hover">
                        <div class="card-header card-header-top card-header--2 px-0 pt-0">
                            <div class="card-header-title">
                                <h4>Best Selling Product</h4>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div>
                                <div class="table-responsive">
                                    <table class="best-selling-table w-image w-image w-image table border-0">
                                        <tbody>
                                            <?php
                                            $top_selling_products = get_top_selling_products_ctr($limit = 5);
                                            foreach ($top_selling_products as $product) {
                                                $product_id = $product['product_id'];
                                                $product_title = $product['product_title'];
                                                $product_price = $product['product_price'];
                                                $product_image = $product['product_image'];
                                                $total_orders = $product['total_orders'];
                                                $total_qty = $product['total_qty'];
                                                $total_price = $product['total_price'];
                                                ?>
                                                <tr>
                                                    <td>
                                                        <div class="best-product-box">
                                                            <div class="product-image">
                                                                <img src="../images/<?php echo $product_image; ?>"
                                                                    class="img-fluid" alt="Product">
                                                            </div>
                                                            <div class="product-name">
                                                                <h5>
                                                                    <?php echo $product_title; ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Price</h6>
                                                            <h5>GHS
                                                                <?php echo $product_price; ?>
                                                            </h5>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Total Orders</h6>
                                                            <h5>
                                                                <?php echo $total_orders; ?>
                                                            </h5>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Quantity</h6>
                                                            <h5>
                                                                <?php echo $total_qty; ?>
                                                            </h5>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Total Amount</h6>
                                                            <h5>GHS
                                                                <?php echo $total_price; ?>
                                                            </h5>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Best Selling Product End -->

                <!-- Recent orders start-->
                <div class="col-xl-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header card-header-top card-header--2 px-0 pt-0">
                            <div class="card-header-title">
                                <h4>Recent Orders</h4>
                            </div>

                            <div class="best-selling-box d-sm-flex d-none">
                                <span>Today</span>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div>
                                <div class="table-responsive">
                                    <table class="best-selling-table table border-0">
                                        <tbody>
                                            <?php
                                            $recent_orders = get_recent_orders_ctr($limit = 4);
                                            foreach ($recent_orders as $order): ?>
                                                <tr>
                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Product Name</h6>
                                                            <h5>
                                                                <?php echo $order['product_title']; ?>
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Date Placed</h6>
                                                            <h5>
                                                                <?php echo $order['order_date']; ?>
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Price</h6>
                                                            <h5>GHS
                                                                <?php echo $order['product_price']; ?>
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Order Status</h6>
                                                            <h5>
                                                                <?php echo $order['order_status']; ?>
                                                            </h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-detail-box">
                                                            <h6>Payment</h6>
                                                            <h5 class="theme-color">
                                                                Paid
                                                            </h5>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent orders end-->

                <!-- Earning chart star-->
                <div class="col-xl-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0 mb-0">
                            <div class="card-header-title">
                                <h4>Earning</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="bar-chart-earning"></div>
                        </div>
                    </div>
                </div>
                <!-- Earning chart end-->


                <!-- Transactions start-->
                <div class="col-xxl-4 col-md-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0">
                            <div class="card-header-title">
                                <h4>Transactions</h4>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div>
                                <div class="table-responsive">
                                    <table class="user-table transactions-table table border-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="transactions-icon">
                                                        <i class="ri-shield-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Wallets</h6>
                                                        <p>Starbucks</p>
                                                    </div>
                                                </td>

                                                <td class="lost">-$74</td>
                                            </tr>
                                            <tr>
                                                <td class="td-color-1">
                                                    <div class="transactions-icon">
                                                        <i class="ri-check-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Bank Transfer</h6>
                                                        <p>Add Money</p>
                                                    </div>
                                                </td>

                                                <td class="success">+$125</td>
                                            </tr>
                                            <tr>
                                                <td class="td-color-2">
                                                    <div class="transactions-icon">
                                                        <i class="ri-exchange-dollar-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Paypal</h6>
                                                        <p>Add Money</p>
                                                    </div>
                                                </td>

                                                <td class="lost">-$50</td>
                                            </tr>
                                            <tr>
                                                <td class="td-color-3">
                                                    <div class="transactions-icon">
                                                        <i class="ri-bank-card-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Mastercard</h6>
                                                        <p>Ordered Food</p>
                                                    </div>
                                                </td>

                                                <td class="lost">-$40</td>
                                            </tr>
                                            <tr>
                                                <td class="td-color-4 pb-0">
                                                    <div class="transactions-icon">
                                                        <i class="ri-bar-chart-grouped-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Transfer</h6>
                                                        <p>Refund</p>
                                                    </div>
                                                </td>

                                                <td class="success pb-0">+$90</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Transactions end-->

                <!-- To Do List start-->
                <div class="col-xxl-4 col-md-6">

                </div>
                <!-- To Do List end-->

                <!-- visitors chart start-->
                <div class="col-xxl-4 col-md-6">
                    <div class="h-100">
                        <div class="card o-hidden card-hover">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="card-header-title">
                                        <h4>Visitors</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="pie-chart">
                                    <div id="pie-chart-visitors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- visitors chart end-->
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2023 © GardenMart</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer End-->
    </div>
    <!-- index body end -->

    </div>
    <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->
</body>

</html>
<!-- latest js -->
<script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap js -->
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- feather icon js -->
<script src="assets/js/icons/feather-icon/feather.min.js"></script>
<script src="assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- scrollbar simplebar js -->
<script src="assets/js/scrollbar/simplebar.js"></script>
<script src="assets/js/scrollbar/custom.js"></script>

<!-- Sidebar jquery -->
<script src="assets/js/config.js"></script>

<!-- tooltip init js -->
<script src="assets/js/tooltip-init.js"></script>

<!-- Plugins JS -->
<script src="assets/js/sidebar-menu.js"></script>
<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<script src="assets/js/notify/index.js"></script>

<!-- Apexchar js -->
<script src="assets/js/chart/apex-chart/apex-chart1.js"></script>
<script src="assets/js/chart/apex-chart/moment.min.js"></script>
<script src="assets/js/chart/apex-chart/apex-chart.js"></script>
<script src="assets/js/chart/apex-chart/stock-prices.js"></script>
<script src="assets/js/chart/apex-chart/chart-custom1.js"></script>


<!-- slick slider js -->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/custom-slick.js"></script>

<!-- customizer js -->
<script src="assets/js/customizer.js"></script>

<!-- ratio js -->
<script src="assets/js/ratio.js"></script>

<!-- sidebar effect -->
<script src="assets/js/sidebareffect.js"></script>

<!-- Theme js -->
<script src="assets/js/script.js"></script>