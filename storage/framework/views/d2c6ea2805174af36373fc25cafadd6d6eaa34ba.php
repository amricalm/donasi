<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="h-100">

<head>
	<?php echo $__env->make('templates/mobile/header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body <?php echo $__env->yieldContent('theme-pattern'); ?> class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
	<!-- screen loader -->
	<?php echo $__env->make('templates/mobile/screenloader', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- menu main -->
	<?php echo $__env->make('templates/mobile/menumain', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- Begin page content -->
	<main class="flex-shrink-0 main has-footer">
		<!-- Fixed navbar -->
		<?php echo $__env->make('templates/mobile/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="main-container">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
	</main>
	<!-- footer-->
	<?php echo $__env->make('templates/mobile/menufooter', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('templates/mobile/footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>