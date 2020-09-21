<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/j-pro/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/j-pro/css/j-pro-modern.css')); ?>">
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/j-pro/js/jquery.ui.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/j-pro/js/jquery.maskedinput.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/j-pro/js/jquery.j-pro.js')); ?>"></script>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

