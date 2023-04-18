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
        <form class="theme-form theme-form-2 mega-form" action="../functions/update_product.php" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-8 m-auto">
                                <div class="card">
                                    <div class="card-body">
                                      <?php 
                                      $get_id = $_GET['pid']; 

                                      $one_product = get_one_product_ctr($get_id);
                                      // print_r($one_brand);
                                      ?>
                                      <div class="card-header-2">
                                        <h5>Update Product Information</h5>
                                    </div>

                                    <div hidden class="mb-4 row align-items-center">
                                        <label hidden class="form-label-title col-sm-3 mb-0">Product ID</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value = "<?php echo $one_product['product_id']; ?>" type="hidden" name="pidd">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">New Product
                                        Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value = "<?php echo $one_product['product_title']; ?>" type="text" placeholder="Enter Product Name" name="ptitle"required>
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

                                        <!-- <div class="mb-4 row align-items-center">
                                            <label
                                            class="col-sm-3 col-form-label form-label-title">Exchangeable</label>
                                            <div class="col-sm-9">
                                                <label class="switch">
                                                    <input type="checkbox"><span class="switch-state"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <label
                                            class="col-sm-3 col-form-label form-label-title">Refundable</label>
                                            <div class="col-sm-9">
                                                <label class="switch">
                                                    <input type="checkbox" checked=""><span
                                                    class="switch-state"></span>
                                                </label>
                                            </div>
                                        </div> -->
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
                                                <input class="form-control" value = "<?php echo $one_product['product_desc']; ?>" type="text" placeholder="Enter Product Description" name="pdesc" required>
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

                                        <!-- <div class="row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                            Image</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-choose" type="file"
                                                id="formFileMultiple1" multiple>
                                            </div>
                                        </div> -->

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
                                                <input class="form-control" alue = "<?php echo $one_product['product_price']; ?>" type="text" placeholder="Enter Product Price (Ghana Cedi)" name="pprice"required>
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
                                                <input class="form-control" value = "<?php echo $one_product['product_qty']; ?>" type="text" placeholder="Enter Product Quantity" name="pqty"required>
                                            </div>
                                        </div>
                                        <!-- <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Stock
                                            Status</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100" name="state">
                                                    <option>In Stock</option>
                                                    <option>Out Of Stock</option>
                                                    <option>On Backorder</option>
                                                </select>
                                            </div>
                                        </div> -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-animation w-100 justify-content-center" type="submit" name="update_product" value="add_product">Update Product</button>
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