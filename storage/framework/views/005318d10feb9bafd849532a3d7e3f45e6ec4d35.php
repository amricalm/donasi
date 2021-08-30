<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="<?php echo e(route('individualtask.create.step.three.post')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>

                    <div class="card-body">

                        <table class="table">
                            <tr>
                                <td>Product Name:</td>
                                <td><strong><?php echo e($product->name); ?></strong></td>
                            </tr>
                            <tr>
                                <td>Product Amount:</td>
                                <td><strong><?php echo e($product->amount); ?></strong></td>
                            </tr>
                            <tr>
                                <td>Product status:</td>
                                <td><strong><?php echo e($product->status ? 'Active' : 'DeActive'); ?></strong></td>
                            </tr>
                            <tr>
                                <td>Product Description:</td>
                                <td><strong><?php echo e($product->description); ?></strong></td>
                            </tr>
                            <tr>
                                <td>Product Stock:</td>
                                <td><strong><?php echo e($product->stock); ?></strong></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="<?php echo e(route('individualtask.create.step.two')); ?>" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>