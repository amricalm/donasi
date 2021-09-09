<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('imt.create.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="form-group mb-4">
                <label>Usia :</label>
                <div class="input-group">
                    <input type="text" id="Usia" name="Usia" class="form-control" value="<?php echo e($data->Usia ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">tahun</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Tinggi badan :</label>
                <div class="input-group">
                    <input type="text" id="TinggiBadan" name="TinggiBadan" class="form-control" value="<?php echo e($data->TinggiBadan ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">m</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Berat badan :</label>
                <div class="input-group">
                    <input type="text" id="BeratBadan" name="BeratBadan" class="form-control" value="<?php echo e($data->BeratBadan ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">kg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>IMT: Berat Badan/tinggi badan<sup>2</sup> :</label>
                <div class="input-group">
                    <input type="text" id="MassaTubuh" name="MassaTubuh" class="form-control" value="<?php echo e($data->MassaTubuh ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg/m<sup>2</sup></span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Lemak tubuh total :</label>
                <div class="input-group">
                    <input type="text" id="LemakTotal" name="LemakTotal" class="form-control" value="<?php echo e($data->LemakTotal ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Lemak viseral :</label>
                <div class="input-group">
                    <input type="text" id="LemakViseral" name="LemakViseral" class="form-control" value="<?php echo e($data->LemakViseral ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Tekanan darah sistol :</label>
                <div class="input-group">
                    <input type="text" id="Sistol" name="Sistol" class="form-control" value="<?php echo e($data->Sistol ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">MmHg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Tekanan darah diastol :</label>
                <div class="input-group">
                    <input type="text" id="Diastol" name="Diastol" class="form-control" value="<?php echo e($data->Diastol ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">MmHg</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Kadar gula darah sesaat (setelah makan) :</label>
                <div class="input-group">
                    <input type="text" id="GulaDarah" name="GulaDarah" class="form-control" value="<?php echo e($data->GulaDarah ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">mg/dL</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Kadar Hb darah :</label>
                <div class="input-group">
                    <input type="text" id="HbDarah" name="HbDarah" class="form-control" value="<?php echo e($data->HbDarah ?? ''); ?>" autocomplete="off">
                    <div class="input-group-append">
                        <span class="input-group-text">g/dL</span>
                    </div>
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.pageslayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>