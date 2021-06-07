<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/c3/css/c3.css')); ?>" media="all">
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
    <!-- FLOT CHART -->
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/chart/float/jquery.flot.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/chart/float/jquery.flot.categories.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/chart/float/curvedLines.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/chart/float/jquery.flot.tooltip.min.js')); ?>"></script>
    <!-- AMCHART -->
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/widget/amchart/amcharts.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/widget/amchart/serial.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/assets/pages/widget/amchart/light.js')); ?>"></script>
    <!-- C3 CHART -->
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/d3/js/d3.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/c3/js/c3.js')); ?>"></script>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

