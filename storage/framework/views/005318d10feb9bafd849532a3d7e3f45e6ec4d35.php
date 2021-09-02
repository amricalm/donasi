<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('individualtask.create.step.three.post')); ?>" method="POST">
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
                <label for="Rokok">Apakah anda pernah merokok? </label>
                <?php echo Form::select('Rokok', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->Rokok ?? '', ['class' => 'form-control', 'id' => 'Rokok']);; ?>

            </div>
            <div id="rokokdtl">
                <div class="form-group mb-4" tabindex="-999">
                    <label>Sudah berapa lama anda merokok?</label>
                    <div class="input-group">
                        <input type="number" id="LamaRokok" name="LamaRokok" class="form-control" value="<?php echo e($data->LamaRokok ?? ''); ?>" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">Tahun</span>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label>Berapa banyak rokok yang anda habiskan setiap hari (rata-rata)?</label>
                    <div class="input-group">
                        <input type="number" id="BanyakRokok" name="BanyakRokok" class="form-control" value="<?php echo e($data->BanyakRokok ?? ''); ?>" autocomplete="off">
                        <div class="input-group-append">
                            <span class="input-group-text">Batang</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group mb-4">
                <label>Indek keparahan merokok</label>
                <input type="text" id="IndexRokok" name="IndexRokok" class="form-control" value="<?php echo e($data->IndexRokok ?? ''); ?>" readonly>
                </div> -->
                <div class="form-group mb-4">
                    <label>Dimana biasanya anda merokok?</label>
                    <?php echo Form::select('TempatRokok', ['' => '', 'Di rumah' => 'Di rumah', 'Di tempat kerja' => 'Di tempat kerja', 'Lainnya' => 'Lainnya'], $data->TempatRokok ?? '', ['class' => 'form-control']);; ?>

                </div>
                <div class="form-group mb-4">
                    <label>Sebutkan</label>
                    <input type="text" id="" name="" class="form-control" value="">
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='<?php echo e(route("individualtask.create.step.two")); ?>'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<!-- <script>
    $(document).ready(function() {
        $("#Rokok").change(function() {
            if ($(this).val() == "Ya") {
                $("#rokokdtl").show();
            } else {
                $("#rokokdtl").hide();
            }
        });
        $("#rokokdtl").hide();
    });
</script> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>