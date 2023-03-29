<?php
include("bars.php");
?>

ƒ<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->
            <!-- Create Menu Table Start-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="title-header option-title">
                                                <h5>Create Menu</h5>
                                            </div>
                                            <div class="tab-content" id="pills-tabContent">
                                                <form class="theme-form theme-form-2 mega-form">
                                                    <div class="row">
                                                        <div class="mb-3 row align-items-center">
                                                            <label class="form-label-title col-lg-2 col-md-3 mb-0">Menu
                                                                Name</label>
                                                            <div class="col-md-9 col-lg-10">
                                                                <input class="form-control" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label
                                                                class="form-label-title col-sm-2 mb-0">Description</label>
                                                            <div class="col-sm-10">
                                                                <div id="editor"></div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row align-items-center">
                                                            <label
                                                                class="col-sm-2 col-form-label form-label-title">Dimensions
                                                                <span class="theme-color">(cm)</span></label>
                                                            <div class="col-sm-10">
                                                                <select class="js-example-basic-single" name="state">
                                                                    <option>Public</option>
                                                                    <option>Private</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row align-items-center">
                                                            <label
                                                                class="form-label-title col-lg-2 col-md-3 mb-0">Permanlink</label>
                                                            <div class="col-md-9 col-lg-10">
                                                                <input class="form-control" type="url">
                                                            </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label
                                                                class="form-label-title col-lg-2 col-md-3 mb-0">Status</label>
                                                            <div class="col-md-9">
                                                                <div class="form-check user-checkbox ps-0">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="" id="flexCheckDefault">
                                                                    <label class="form-label-title col-md-2 mb-0">Enable
                                                                        the Menu</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Create Menu Table End-->

            <!-- footer start-->
            <div class="container-fluid">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- footer end-->
        </div>
        <!-- Page Body end-->
    </div>
    <!-- Page wrapper end -->

    <!-- Modal start -->
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
    <!-- Modal end -->

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

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- ck editor js -->
    <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/ckeditor-custom.js"></script>

    <!-- select 2 js -->
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/select2-custom.js"></script>

    <!--Dropzon js -->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>