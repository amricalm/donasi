<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="<?php echo e(route('products.create.step.one.post')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="card">
                    <div class="card-header">Step 1: Basic Info</div>

                    <div class="card-body">

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <div class="form-group">
                                <label for="title">Product Name:</label>
                                <input type="text" value="<?php echo e($product->name ?? ''); ?>" class="form-control" id="taskTitle"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Product Amount:</label>
                                <input type="text"  value="<?php echo e($product->amount ?? ''); ?>" class="form-control" id="productAmount" name="amount"/>
                            </div>
                            <div class="form-group">
                                <label for="description">Product Description:</label>
                                <textarea type="text"  class="form-control" id="taskDescription" name="description"><?php echo e($product->description ?? ''); ?></textarea>
                            </div>

                        
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>