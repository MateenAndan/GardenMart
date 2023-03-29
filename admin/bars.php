<?php
include("../settings/core.php");
// include("../controllers/product_controller.php");
check_login();
$adminn = check_admin();
if ($adminn == 1) {
	// code...
}else{
	// echo "no access";
}
// echo "this is the admin page";
// echo "this is the homepage";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description"
	content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
	<meta name="keywords"
	content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
	<meta name="author" content="pixelstrap">
	<link rel="icon" href="../assets/images/favicon/logo.png" type="image/x-icon">
	<link rel="shortcut icon" href="../assets/images/favicon/logo.png" type="image/x-icon">
	<title>GardenMart - Dashboard</title>

	<!-- Google font-->
	<link
	href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
	rel="stylesheet">

	<!-- Linear Icon css -->
	<link rel="stylesheet" href="assets/css/linearicon.css">

	<!-- fontawesome css -->
	<link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

	<!-- Themify icon css-->
	<link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

	<!-- ratio css -->
	<link rel="stylesheet" type="text/css" href="assets/css/ratio.css">

	<!-- remixicon css -->
	<link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">

	<!-- Feather icon css-->
	<link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

	<!-- Plugins css -->
	<link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
	<link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

	<!-- Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

	<!-- vector map css -->
	<link rel="stylesheet" type="text/css" href="assets/css/vector-map.css">

	<!-- Slick Slider Css -->
	<link rel="stylesheet" href="assets/css/vendors/slick.css">

	<!-- App css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	<!-- page-wrapper Start-->
	<div class="page-wrapper compact-wrapper" id="pageWrapper">
		<!-- Page Header Start-->
		<div class="page-header">
			<div class="header-wrapper m-0">
				<div class="header-logo-wrapper p-0">
					<div class="logo-wrapper">
						<a href="admin.php">
							<img class="img-fluid main-logo" src="../assets/images/logo/glogo1.png" alt="logo">
							<img class="img-fluid white-logo" src="../assets/images/logo/glogo1.png" alt="logo">
						</a>
					</div>
					<div class="toggle-sidebar">
						<i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
						<a href="admin.php">
							<img src="../assets/images/logo/glogo.png" class="img-fluid" alt="">
						</a>
					</div>
				</div>

				<form class="form-inline search-full" action="javascript:void(0)" method="get">
					<div class="form-group w-100">
						<div class="Typeahead Typeahead--twitterUsers">
							<div class="u-posRelative">
								<input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
								placeholder="Search..." name="q" title="" autofocus>
								<i class="close-search" data-feather="x"></i>
								<div class="spinner-border Typeahead-spinner" role="status">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
							<div class="Typeahead-menu"></div>
						</div>
					</div>
				</form>
				<div class="nav-right col-6 pull-right right-header p-0">
					<ul class="nav-menus">
						<li>
							<span class="header-search">
								<i class="ri-search-line"></i>
							</span>
						</li>
						<li class="onhover-dropdown">
							<div class="notification-box">
								<i class="ri-notification-line"></i>
								<span class="badge rounded-pill badge-theme">4</span>
							</div>
							<ul class="notification-dropdown onhover-show-div">
								<li>
									<i class="ri-notification-line"></i>
									<h6 class="f-18 mb-0">Notitications</h6>
								</li>
								<li>
									<p>
										<i class="fa fa-circle me-2 font-primary"></i>Delivery processing <span
										class="pull-right">10 min.</span>
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-circle me-2 font-success"></i>Order Complete<span
										class="pull-right">1 hr</span>
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-circle me-2 font-info"></i>Tickets Generated<span
										class="pull-right">3 hr</span>
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-circle me-2 font-danger"></i>Delivery Complete<span
										class="pull-right">6 hr</span>
									</p>
								</li>
								<li>
									<a class="btn btn-primary" href="javascript:void(0)">Check all notification</a>
								</li>
							</ul>
						</li>

						<li>
							<div class="mode">
								<i class="ri-moon-line"></i>
							</div>
						</li>
						<li class="profile-nav onhover-dropdown pe-0 me-0">
							<div class="media profile-media">
								<div class="user-name-hide media-body">
									<span>Emay Walter</span>
									<p class="mb-0 font-roboto">Admin<i class="middle ri-arrow-down-s-line"></i></p>
								</div>
							</div>
							<ul class="profile-dropdown onhover-show-div">
								<li>
									<a href="all-users.php">
										<i data-feather="users"></i>
										<span>Users</span>
									</a>
								</li>
								<li>
									<a href="order-list.php">
										<i data-feather="archive"></i>
										<span>Orders</span>
									</a>
								</li>
								<li>
									<a href="support-ticket.php">
										<i data-feather="phone"></i>
										<span>Spports Tickets</span>
									</a>
								</li>
								<li>
									<a href="profile-setting.php">
										<i data-feather="settings"></i>
										<span>Settings</span>
									</a>
								</li>
								<li>
									<a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
									href="../login/logout.php">
									<i data-feather="log-out"></i>
									<span>Log out</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Page Header Ends-->

	<!-- Page Body Start-->
	<div class="page-body-wrapper">
		<!-- Page Sidebar Start-->
		<div class="sidebar-wrapper">
			<div id="sidebarEffect"></div>
			<div>
				<div class="logo-wrapper logo-wrapper-center">
					<a href="admin.php" data-bs-original-title="" title="">
						<img class="img-fluid for-white" src="../assets/images/logo/glogo1.png" alt="logo">
					</a>
					<div class="back-btn">
						<i class="fa fa-angle-left"></i>
					</div>
					<div class="toggle-sidebar">
						<i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
					</div>
				</div>
				<div class="logo-icon-wrapper">
					<a href="admin.php">
						<img class="img-fluid main-logo main-white" src="../assets/images/logo/glogo1.png" alt="logo">
						<img class="img-fluid main-logo main-dark" src="../assets/images/logo/glogo1.png"
						alt="logo">
					</a>
				</div>
				<nav class="sidebar-main">
					<div class="left-arrow" id="left-arrow">
						<i data-feather="arrow-left"></i>
					</div>

					<div id="sidebar-menu">
						<ul class="sidebar-links" id="simple-bar">
							<li class="back-btn"></li>

							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="admin.php">
									<i class="ri-home-line"></i>
									<span>Dashboard</span>
								</a>
							</li>

							<li class="sidebar-list">
								<a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
									<i class="ri-store-3-line"></i>
									<span>Product</span>
								</a>
								<ul class="sidebar-submenu">
									<li>
										<a href="products.php">Prodcts</a>
									</li>

									<li>
										<a href="add-new-product.php">Add New Products</a>
									</li>
								</ul>
							</li>

							<li class="sidebar-list">
								<a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
									<i class="ri-list-check-2"></i>
									<span>Category</span>
								</a>
								<ul class="sidebar-submenu">
									<li>
										<a href="category.php">Category List</a>
									</li>

									<li>
										<a href="add-new-category.php">Add New Category</a>
									</li>
								</ul>
							</li>

							<li class="sidebar-list">
								<a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
									<i class="ri-list-settings-line"></i>
									<span>Brands</span>
								</a>
								<ul class="sidebar-submenu">
									<li>
										<a href="brands.php">Brand List</a>
									</li>

									<li>
										<a href="add-new-brand.php">Add Brand</a>
									</li>
								</ul>
							</li>

							<!-- <li class="sidebar-list">
								<a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
									<i class="ri-list-settings-line"></i>
									<span>Attributes</span>
								</a>
								<ul class="sidebar-submenu">
									<li>
										<a href="attributes.php">Attributes</a>
									</li>

									<li>
										<a href="add-new-attributes.php">Add Attributes</a>
									</li>
								</ul>
							</li> -->

							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title" href="javascript:void(0)">
									<i class="ri-user-3-line"></i>
									<span>Users</span>
								</a>
								<ul class="sidebar-submenu">
									<li>
										<a href="all-users.php">All users</a>
									</li>
									<li>
										<a href="add-new-user.php">Add new user</a>
									</li>
								</ul>
							</li>


							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title" href="javascript:void(0)">
									<i class="ri-archive-line"></i>
									<span>Orders</span>
								</a>
								<ul class="sidebar-submenu">
									<li>
										<a href="order-list.php">Order List</a>
									</li>
									<li>
										<a href="order-detail.php">Order Detail</a>
									</li>
									<li>
										<a href="order-tracking.php">Order Tracking</a>
									</li>
								</ul>
							</li>

							<li class="sidebar-list">
								<a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
									<i class="ri-price-tag-3-line"></i>
									<span>Coupons</span>
								</a>
								<ul class="sidebar-submenu">
									<li>
										<a href="coupon-list.php">Coupon List</a>
									</li>

									<li>
										<a href="create-coupon.php">Create Coupon</a>
									</li>
								</ul>
							</li>

							<!-- <li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="taxes.php">
									<i class="ri-price-tag-3-line"></i>
									<span>Tax</span>
								</a>
							</li> -->

							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="product-review.php">
									<i class="ri-star-line"></i>
									<span>Product Review</span>
								</a>
							</li>

							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="support-ticket.php">
									<i class="ri-phone-line"></i>
									<span>Support Ticket</span>
								</a>
							</li>

							<li class="sidebar-list">
								<a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
									<i class="ri-settings-line"></i>
									<span>Settings</span>
								</a>
								<ul class="sidebar-submenu">
									<li>
										<a href="profile-setting.php">Profile Setting</a>
									</li>
								</ul>
							</li>

							<li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="reports.php">
									<i class="ri-file-chart-line"></i>
									<span>Reports</span>
								</a>
							</li>

							<!-- <li class="sidebar-list">
								<a class="sidebar-link sidebar-title link-nav" href="list-page.php">
									<i class="ri-list-check"></i>
									<span>List Page</span>
								</a>
							</li> -->
						</ul>
					</div>

					<div class="right-arrow" id="right-arrow">
						<i data-feather="arrow-right"></i>
					</div>
				</nav>
			</div>
		</div>
		<!-- Page Sidebar Ends-->
		
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
						<button type="button" class="btn  btn--yes btn-primary" href="../login/logout.php">Yes</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		document.querySelector('.btn--yes').addEventListener('click', function() {
			window.location.href = this.getAttribute('href');
		});
	</script>

	<!-- Modal End -->
</body>
</html>




