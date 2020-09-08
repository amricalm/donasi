<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/sweetalert2/sweetalert2.css')); ?>" media="all">
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
    <!-- SWEETALERT -->
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/sweetalert2/sweetalert2.all.js')); ?>"></script>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

