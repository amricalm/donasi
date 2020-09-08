<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
        
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/bootstrap-datepicker/css/bootstrap-datepicker3.css')); ?>"/>
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
        
        <script type="text/javascript" src="<?php echo e(asset('files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js')); ?>"></script>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

