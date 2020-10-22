<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/css/widget.css')); ?>">
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

