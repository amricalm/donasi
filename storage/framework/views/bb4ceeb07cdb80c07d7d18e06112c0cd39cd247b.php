<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Manage Product</div>

                <div class="card-body">
                    
                    <a href="<?php echo e(route('products.create.step.one')); ?>" class="btn btn-primary pull-right">Create Product</a>

                    <?php if(Session::has('message')): ?>
                        <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
                    <?php endif; ?>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($product->id); ?></th>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->description); ?></td>
                                <td><?php echo e($product->stock); ?></td>
                                <td><?php echo e($product->amount); ?></td>
                                <td><?php echo e($product->status ? 'Active' : 'DeActive'); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>