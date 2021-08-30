<!doctype html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="generator" content="">
	<title>Si Kesjaor - Mobile</title>

	<!-- manifest meta -->
	<meta name="apple-mobile-web-app-capable" content="yes">

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="img/favicon180.png" sizes="180x180">
	<link rel="icon" href="img/favicon32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="img/favicon16.png" sizes="16x16" type="image/png">

	<!-- Material icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- swiper CSS -->
	<link href="<?php echo e(asset('vendor/finwallapp/vendor/swiper/css/swiper.min.css')); ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo e(asset('vendor/finwallapp/css/style.css')); ?>" rel="stylesheet" id="style">
</head>

<body class="body-scroll d-flex flex-column h-100 menu-overlay">
	<!-- screen loader -->
	<div class="container-fluid h-100 loader-display">
		<div class="row h-100">
			<div class="align-self-center col">
				<div class="logo-loading">
					<div class="icon icon-100 mb-4 rounded-circle">
						<img src="img/favicon144.png" alt="" class="w-100">
					</div>
					<h4 class="text-default">Finwallapp</h4>
					<p class="text-secondary">Mobile HTML template</p>
					<div class="loader-ellipsis">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Begin page content -->
	<main class="flex-shrink-0 main">
		<!-- Fixed navbar -->
		<header class="header">
			<div class="row">
				<div class="col-auto px-0">
					<button class="btn btn-40 btn-link back-btn" type="button">
						<span class="material-icons">keyboard_arrow_left</span>
					</button>
				</div>
				<div class="text-left col align-self-center">
					<a class="navbar-brand" href="#">
						<h5 class="mb-0">Form</h5>
					</a>
				</div>
				<div class="ml-auto col-auto">
					<a href="profile.html" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
						<figure class="m-0 background">
							<img src="img/user1.png" alt="">
						</figure>
					</a>
				</div>
			</div>
		</header>

		<!-- page content start -->

		<div class="main-container">
			<div class="container">
				<?php echo $__env->yieldContent('content'); ?>
			</div>
		</div>
	</main>


	<!-- Required jquery and libraries -->
	<script src="<?php echo e(asset('vendor/finwallapp/js/jquery-3.3.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/finwallapp/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/finwallapp/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>

	<!-- cookie js -->
	<script src="<?php echo e(asset('vendor/finwallapp/js/jquery.cookie.js')); ?>"></script>

	<!-- Swiper slider  js-->
	<script src="<?php echo e(asset('vendor/finwallapp/vendor/swiper/js/swiper.min.js')); ?>"></script>

	<!-- Customized jquery file  -->
	<script src="<?php echo e(asset('vendor/finwallapp/js/main.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/finwallapp/js/color-scheme-demo.js')); ?>"></script>


	<!-- page level custom script -->
	<script src="<?php echo e(asset('vendor/finwallapp/js/app.js')); ?>"></script>
</body>

</html>