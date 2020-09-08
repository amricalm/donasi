<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/select2/css/select2.min.css')); ?>" >
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #448aff;
        }
    </style>
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
    <script type="text/javascript" src="<?php echo e(asset('files/bower_components/select2/js/select2.full.min.js')); ?>"></script>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

