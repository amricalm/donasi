<?php $__env->startComponent('templates.widgets'); ?>
    <?php $__env->slot('header'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/assets/pages/data-table/css/buttons.dataTables.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>">
    <?php $__env->endSlot(); ?>
    <?php $__env->slot('footer'); ?>
    <script src="<?php echo e(asset('files/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('files/assets/pages/data-table/js/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('files/assets/pages/data-table/js/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('files/assets/pages/data-table/js/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('files/bower_components/datatables.net-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.table-dt').DataTable({
                // fixedHeader: true,
                'ordering' : false
            });
        });
    </script>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

