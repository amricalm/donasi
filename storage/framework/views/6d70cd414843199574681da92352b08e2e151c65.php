<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('fisik.create.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-4">
                <label>Pilihlah satu pekerjaan dari tabel berikut yang paling mewakili pekerjaan anda sehari-hari di perusahaan</label>
            </div>
            <div class="form-group mb-4">
                <label>1. Posisi dan Gerakan Tubuh Saat Bekerja (pilih salah satu)</label>
                <?php echo Form::select('PosisiKerja', ['' => '', 'Duduk' => 'Duduk', 'Berdiri' => 'Berdiri', 'Berjalan' => 'Berjalan', 'Berjalan mendaki' => 'Berjalan mendaki'], $data->PosisiKerja ?? '', ['class' => 'form-control', 'id' => 'PosisiKerja', 'required']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Seberapa besar ukuran porsi makanan pokok yang konsumsi dalam sekali makan?</label>
                <?php echo Form::select('TipeKerja', ['' => '', 'Bekerja dengan menggunakan pergelangan tangan' => 'Bekerja dengan menggunakan pergelangan tangan', 'Bekerja dengan menggunakan 1 lengan' => 'Bekerja dengan menggunakan 1 lengan', 'Bekerja dengan menggunakan 2 lengan' => 'Bekerja dengan menggunakan 2 lengan', 'Bekerja dengan seluruh tubuh' => 'Bekerja dengan seluruh tubuh'], $data->TipeKerja ?? '', ['class' => 'form-control', 'id' => 'TipeKerja', 'required']);; ?>

            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.pageslayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>