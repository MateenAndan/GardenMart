<?php
include("bars.php");
echo"hello";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- Page Sidebar Start -->
    <div class="page-body">
        <!-- New User start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Add New User</h5>
                                    </div>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-home"
                                            type="button">Account</button>
                                        </li>
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-profile"
                                            type="button">Pernission</button>
                                        </li> -->
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                            <form class="theme-form theme-form-2 mega-form" action="../login/admin-signup.php" method="post">
                                                <div class="card-header-1">
                                                    <h5>Product Information</h5>
                                                </div>

                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label
                                                        class="form-label-title col-lg-2 col-md-3 mb-0">First Name</label>
                                                    <div class="col-md-9 col-lg-10">
                                                        <input class="form-control" type="text" name="admin_name" placeholder="Enter name">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                Address</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="email" name="admin_email" placeholder="Enter email">
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label
                                                class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                <div class="col-md-9 col-lg-10">
                                                    <input class="form-control" type="password" name="admin_password" placeholder="Enter password">
                                                </div>
                                            </div>

                                            <!-- <div class="row align-items-center">
                                                <label
                                                class="col-lg-2 col-md-3 col-form-label form-label-title">Confirm
                                            Password</label>
                                            <div class="col-md-9 col-lg-10">
                                                <input class="form-control" type="password">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-animation w-100 justify-content-center" type="submit" name="admin_regis" value="add_admin">Add Administrator</button>
                                    </div>
                                </form>
                            </div>

<!--                             <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                <div class="card-header-1">
                                    <h5>Product Related Permition</h5>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="col-md-2 mb-0">Add Product</label>
                                    <div class="col-md-9">
                                        <form class="radio-section">
                                            <label>
                                                <input type="radio" name="opinion" checked>
                                                <i></i>
                                                <span>Allow</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="opinion" />
                                                <i></i>
                                                <span>Deny</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-md-2 mb-0">Update Product</label>
                                    <div class="col-md-9">
                                        <form class="radio-section">
                                            <label>
                                                <input type="radio" name="opinion" />
                                                <i></i>
                                                <span>Allow</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="opinion" checked>
                                                <i></i>
                                                <span>Deny</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-md-2 mb-0">Delete Product</label>
                                    <div class="col-md-9">
                                        <form class="radio-section">
                                            <label>
                                                <input type="radio" name="opinion" checked>
                                                <i></i>
                                                <span>Allow</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="opinion" />
                                                <i></i>
                                                <span>Deny</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-md-2 mb-0">Apply Discount</label>
                                    <div class="col-md-9">
                                        <form class="radio-section">
                                            <label>
                                                <input type="radio" name="opinion" />
                                                <i></i>
                                                <span>Allow</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="opinion" checked>
                                                <i></i>
                                                <span>Deny</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <div class="card-header-1">
                                    <h5>Category Related Permition</h5>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="col-md-2 mb-0">Add Product</label>
                                    <div class="col-md-9">
                                        <form class="radio-section">
                                            <label>
                                                <input type="radio" name="opinion" checked>
                                                <i></i>
                                                <span>Allow</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="opinion" />
                                                <i></i>
                                                <span>Deny</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-md-2 mb-0">Update Product</label>
                                    <div class="col-md-9">
                                        <form class="radio-section">
                                            <label>
                                                <input type="radio" name="opinion" />
                                                <i></i>
                                                <span>Allow</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="opinion" checked>
                                                <i></i>
                                                <span>Deny</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-md-2 mb-0">Delete Product</label>
                                    <div class="col-md-9">
                                        <form class="radio-section">
                                            <label>
                                                <input type="radio" name="opinion" />
                                                <i></i>
                                                <span>Allow</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="opinion" checked>
                                                <i></i>
                                                <span>Deny</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-md-2 mb-0">Apply Discount</label>
                                    <div class="col-md-9">
                                        <form class="radio-section">
                                            <label>
                                                <input type="radio" name="opinion" checked>
                                                <i></i>
                                                <span>Allow</span>
                                            </label>

                                            <label>
                                                <input type="radio" name="opinion" />
                                                <i></i>
                                                <span>Deny</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- New User End -->

<!-- footer start -->
<div class="container-fluid">
    <footer class="footer">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
            </div>
        </div>
    </footer>
</div>
<!-- footer end -->
</div>
<!-- Page Sidebar End -->
</div>
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

<!-- customizer js -->
<script src="assets/js/customizer.js"></script>

<!-- Sidebar js-->
<script src="assets/js/config.js"></script>

<!-- Plugins JS -->
<script src="assets/js/sidebar-menu.js"></script>
<script src="assets/js/notify/bootstrap-notify.min.js"></script>
<script src="assets/js/notify/index.js"></script>

<!--Dropzon js -->
<script src="assets/js/dropzone/dropzone.js"></script>
<script src="assets/js/dropzone/dropzone-script.js"></script>

<!-- sidebar effect -->
<script src="assets/js/sidebareffect.js"></script>

<!-- Theme js -->
<script src="assets/js/script.js"></script>
</body>

</html>