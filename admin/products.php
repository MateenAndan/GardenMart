<?php
include("bars.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

    <!-- Container-fluid starts-->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Products List</h5>
                                <div class="right-options">
                                    <ul>

                                        <a class="btn btn-solid" href="add-new-product.php">Add Product</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Current Qty</th>
                                                <th>Price</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $product_list = get_all_product_ctr();
                                            foreach ($product_list as $aproduct) {
                                                // code...
                                                $pid = $aproduct['product_id'];
                                                $pname = $aproduct['product_title'];
                                                $pcat = $aproduct['product_cat'];
                                                $pprice = $aproduct['product_price'];
                                                $pqty = $aproduct['product_qty'];
                                                $pimage = $aproduct['product_image'];
                                                $pdesc = $aproduct['product_desc'];
                                                $pkey = $aproduct['product_keywords'];

                                                echo "
                                            <tr>
                                            <td>
                                            <div class='table-image'>
                                            <img src='../images/$pimage' class='img-fluid'
                                            alt=''>
                                            </div>
                                            </td>

                                            <td>$pname</td>

                                            <td>$pcat</td>

                                            <td>$pqty</td>

                                            <td class='td-price'>GHS $pprice</td>

                                            <td>
                                            <ul>

                                            <li>
                                            <a href='update-product.php?pid=$pid'>
                                            <i class='ri-pencil-line'></i>
                                            </a>
                                            </li>

                                            <li>
                                            <a href='' data-bs-toggle='modal'
                                            data-bs-target='#exampleModalToggle'>
                                            <i class='ri-delete-bin-line'></i>
                                            </a>
                                            </li>
                                            </ul>
                                            </td>
                                            </tr>
                                            ";
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    </div>
    </div>
    <!-- page-wrapper End-->



    <!-- Delete Modal Box Start -->
    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box">
                        <p>The permission for the use/group, preview is inherited from the object, object will create a
                            new permission for this object</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-animation btn-md fw-bold btn--yes" data-bs-dismiss="modal"
                        data-bs-toggle="modal" data-bs-target="#exampleModalToggle2">Yes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="remove-box text-center">
                        <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                        </div>
                        <h4 class="text-content">It's Removed.</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Modal Box End -->

    <script>
        document.querySelector('.btn--yes').addEventListener('click', function () {
            window.location.href = '../functions/add_product.php?delete=<?php $pid; ?>;'; // Replace this URL with the URL you want to redirect the user to
        });
    </script>


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

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- Data table js -->
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/custom-data-table.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>