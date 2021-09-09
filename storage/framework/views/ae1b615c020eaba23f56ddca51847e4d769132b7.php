<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="h-100">

<head>
	<?php echo $__env->make('templates/mobile/header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body <?php echo $__env->yieldContent('theme-pattern'); ?> class="body-scroll d-flex flex-column h-100 menu-overlay">
	<!-- screen loader -->
	<?php echo $__env->make('templates/mobile/screenloader', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Begin page content -->
	<main class="flex-shrink-0 main">
		<!-- Fixed navbar -->
		<header class="header">
			<div class="row">
				<a href="<?php echo e(url()->previous()); ?>">
					<div class="col-auto px-0">
						<button class="btn btn-40 btn-link back-btn" type="button">
							<span class="material-icons">keyboard_arrow_left</span>
						</button>
					</div>
				</a>
				<div class="text-left col align-self-center">
					<a class="navbar-brand" href="#">
						<h5 class="mb-0"><?php echo e($judul); ?></h5>
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
	<?php echo $__env->make('templates/mobile/footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>