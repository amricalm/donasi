<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->make('templates/headerdonate', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body <?php echo $__env->yieldContent('theme-pattern'); ?>>
        <?php echo $__env->yieldContent('body'); ?>
        <?php echo $__env->make('templates/footerdonate', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>