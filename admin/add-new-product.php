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

    <div class="page-body">

        <!-- New Product Add Start -->
        <form class="theme-form theme-form-2 mega-form" action="../functions/add_product.php" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-8 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Information</h5>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product
                                            Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                placeholder="Product Name" name="ptitle"required>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label
                                            class="col-sm-3 col-form-label form-label-title">Category</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name = "pcat">
                                                    <option > -Category Menu- </option>
                                                    <?php 
                                                    $cat_list = get_all_category_ctr();
                                                    if ($cat_list) {
                                                        // categories found
                                                        foreach ($cat_list as $one_cat) {
                                                            $cat_id = $one_cat['cat_id'];
                                                            $cat_name = $one_cat['cat_name'];
                                                            // code...
                                                            echo "<option value='$cat_id'>$cat_name</option>";
                                                        }
                                                    }else{
                                                        //no categories found
                                                        echo "<option value='no_found'>No Category found</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label
                                            class="col-sm-3 col-form-label form-label-title">Brand</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name = "pbrand">
                                                    <option> -Brand Menu- </option>
                                                    <?php 
                                                    $brand_list = get_all_brand_ctr();
                                                    if ($brand_list) {
                                                        // brand found
                                                        foreach ($brand_list as $one_brand) {
                                                            $brand_id = $one_brand['brand_id'];
                                                            $brand_name = $one_brand['brand_name'];
                                                            // code...
                                                            echo "<option value='$brand_id' >$brand_name</option>";
                                                        }
                                                    }else{
                                                        //no brand found
                                                        echo "<option value='no_found'>No Brand found</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Description</h5>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product
                                            Description</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                placeholder="Product Name" name="pdesc"required>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Product
                                            Keywords</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                placeholder="Product Name" name="pkey"required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Images</h5>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label
                                            class="col-sm-3 col-form-label form-label-title">Images</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file"
                                                name="pimage" id="formFile">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Price</h5>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 form-label-title">price</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="number" placeholder="GHS 0" name="pprice"required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-2">
                                            <h5>Product Inventory</h5>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Quantity</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" name="pqty"required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-animation w-100 justify-content-center" type="submit" name="add_product" value="add_product">Add Product</button>
            </div>
        </form>

        <!-- New Product Add End -->

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
    <!-- Container-fluid End -->
</div>
<!-- Page Body End -->
</div>
<!-- page-wrapper End -->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
            <p>Are you sure you want to log out?</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="button-box">
                <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn  btn--yes btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Modal End -->

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

<!-- bootstrap tag-input js -->
<script src="assets/js/bootstrap-tagsinput.min.js"></script>
<script src="assets/js/sidebar-menu.js"></script>

<!-- customizer js -->
<script src="assets/js/customizer.js"></script>

<!--Dropzon js -->
<script src="assets/js/dropzone/dropzone.js"></script>
<script src="assets/js/dropzone/dropzone-script.js"></script>

<!-- Plugins js -->
<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<script src="assets/js/notify/index.js"></script>

<!-- ck editor js -->
<script src="assets/js/ckeditor.js"></script>
<script src="assets/js/ckeditor-custom.js"></script>

<!-- select2 js -->
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/select2-custom.js"></script>

<!-- sidebar effect -->
<script src="assets/js/sidebareffect.js"></script>

<!-- Theme js -->
<script src="assets/js/script.js"></script>

</body>

</html>
