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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-8 col-lg-10 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Add Attribute</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Attribute
                                            Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text"
                                                placeholder="Attribute Name">
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-start">
                                            <label class="col-sm-3 col-form-label form-label-title">Attribute
                                            Value</label>
                                            <div class="col-sm-9">
                                                <div class="row g-sm-4 g-3">
                                                    <div class="col-sm-10 col-9">
                                                        <input class="form-control" type="text"
                                                        placeholder="Attribute Value">
                                                    </div>

                                                    <div class="col-sm-2 col-3">
                                                        <button
                                                        class="btn text-danger h-100 w-100">Remove</button>
                                                    </div>

                                                    <div class="col-xxl-4">
                                                        <button class="btn text-white theme-bg-color">Add
                                                        Value</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <button class="btn ms-auto theme-bg-color text-white">Add Attribute</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer End -->
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

<!-- select2 js -->
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/select2-custom.js"></script>

<!-- sidebar effect -->
<script src="assets/js/sidebareffect.js"></script>

<!-- Theme js -->
<script src="assets/js/script.js"></script>

</body>

</html>