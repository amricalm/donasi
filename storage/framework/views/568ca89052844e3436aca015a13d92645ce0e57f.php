<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="h-100">

<head>
	<?php echo $__env->make('layout/header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body <?php echo $__env->yieldContent('theme-pattern'); ?> class="body-scroll d-flex flex-column h-100 menu-overlay">
	<!-- screen loader -->
	<div class="container-fluid h-100 loader-display">
		<div class="row h-100">
			<div class="align-self-center col">
				<div class="logo-loading">
					<div class="icon icon-100 mb-4 rounded-circle">
						<img src="img/favicon144.png" alt="" class="w-100">
					</div>
					<h4 class="text-default">Si Kesjaor</h4>
					<p class="text-secondary">Mobile</p>
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
	<?php echo $__env->make('layout/footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>