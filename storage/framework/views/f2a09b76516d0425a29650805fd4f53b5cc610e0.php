<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="<?php echo e(route('products.create.step.two.post')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-header">Step 2: Status & Stock</div>

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
                                <label for="description">Product Status</label><br/>
                                <label class="radio-inline"><input type="radio" name="status" value="1" <?php echo e((isset($product->status) && $product->status == '1') ? "checked" : ""); ?>> Active</label>
                                <label class="radio-inline"><input type="radio" name="status" value="0" <?php echo e((isset($product->status) && $product->status == '0') ? "checked" : ""); ?>> DeActive</label>
                            </div>

                            <div class="form-group">
                                <label for="description">Product Stock</label>
                                <input type="text"  value="<?php echo e($product->stock ?? ''); ?>" class="form-control" id="productAmount" name="stock"/>
                            </div>

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="<?php echo e(route('products.create.step.one')); ?>" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>