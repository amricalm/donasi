<?php $__env->startSection('content'); ?>
<div class="container mb-4">
    <div class="card">
        <div class="card-body text-center ">
            <div class="row justify-content-equal no-gutters">
                <div class="col-4 col-md-2 mb-3">
                    <a href="<?php echo e(url('task/create-step-one')); ?>">
                        <div class="icon icon-50 rounded-circle mb-1 bg-default-light text-default"><span class="material-icons">receipt</span></div>
                    </a>
                    <p class="text-secondary"><small>Kespro</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>