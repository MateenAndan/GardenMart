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

            <!-- Menu List Table Start -->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <!-- Table Start -->
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Menu List</h5>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="user-table menu-list-table table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <span class="form-check user-checkbox">
                                                                <input class="checkbox_animated checkall"
                                                                    type="checkbox" value="">
                                                            </span>
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Status</th>
                                                        <th>Created On</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check user-checkbox">
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" value="">
                                                            </div>
                                                        </td>
                                                        <td>Product Menu</td>
                                                        <td class="menu-status">
                                                            <span class="warning">Restitute</span>
                                                        </td>
                                                        <td>2018-04-18T00:00:00</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check user-checkbox">
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" value="">
                                                            </div>
                                                        </td>
                                                        <td>Category Menu</td>
                                                        <td class="menu-status">
                                                            <span class="success">Success</span>
                                                        </td>
                                                        <td>2018-04-18T00:00:00</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check user-checkbox">
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" value="">
                                                            </div>
                                                        </td>
                                                        <td>Subcategory Menu</td>
                                                        <td class="menu-status">
                                                            <span class="success">Success</span>
                                                        </td>
                                                        <td>2018-04-18T00:00:00</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check user-checkbox">
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" value="">
                                                            </div>
                                                        </td>
                                                        <td>Sales Menu</td>
                                                        <td class="menu-status">
                                                            <span class="warning">Restitute</span>
                                                        </td>
                                                        <td>2018-04-18T00:00:00</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check user-checkbox">
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" value="">
                                                            </div>
                                                        </td>
                                                        <td>Vendor Menu</td>
                                                        <td class="menu-status">
                                                            <span class="success">Success</span>
                                                        </td>
                                                        <td>2018-04-18T00:00:00</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check user-checkbox">
                                                                <input class="checkbox_animated check-it"
                                                                    type="checkbox" value="">
                                                            </div>
                                                        </td>
                                                        <td>Category Menu</td>
                                                        <td class="menu-status">
                                                            <span class="success">Success</span>
                                                        </td>
                                                        <td>2018-04-18T00:00:00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table End -->

                                <!-- Pagination Box Start -->
                                <!-- <div class="pagination-box">
                                    <nav class="ms-auto me-auto" aria-label="...">
                                        <ul class="pagination pagination-primary">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)">Previous</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="javascript:void(0)">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> -->
                                <!-- Pagination Box End -->
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
                                <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- Menu List Table End -->
        </div>

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

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- all checkbox select js -->
    <script src="assets/js/checkbox-all-check.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>