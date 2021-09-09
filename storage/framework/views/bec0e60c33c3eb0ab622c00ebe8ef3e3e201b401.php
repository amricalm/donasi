<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('polamakan.create.step.two.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda mengonsumsi makanan pokok selain nasi? Contoh: <b>ubi jalar, singkong, sagu, jagung, talas, ganyong, kentang, sukun, mie, bihun, roti, dll.</b></label>
                <div class="input-group mb-2">
                    <input type="number" id="SelainNasiHari" name="SelainNasiHari" class="form-control" value="<?php echo e($data->SelainNasiHari ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
                <div class="input-group">
                    <input type="number" id="SelainNasiMinggu" name="SelainNasiMinggu" class="form-control" value="<?php echo e($data->SelainNasiMinggu ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/minggu</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda mengonsumsi makanan pokok (nasi dan selain nasi) dalam sehari?</label>
                <div class="input-group">
                    <input type="number" id="MakananPokok" name="MakananPokok" class="form-control" value="<?php echo e($data->MakananPokok ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Seberapa besar ukuran porsi makanan pokok yang konsumsi dalam sekali makan?</label>
                <div class="mx-auto">
                    <img src="<?php echo e(url('img/assets/isi-piringku-makanan-pokok.jpg')); ?>" alt="isi piringku porsi makanan pokok" class="mw-100" />
                </div>
                <?php echo Form::select('PorsiMakananPokok', ['' => '', 'Sama dengan gambar' => 'Sama dengan gambar', 'Lebih besar' => 'Lebih besar', 'Lebih kecil' => 'Lebih kecil'], $data->PorsiMakananPokok ?? '', ['class' => 'form-control', 'id' => 'PorsiMakananPokok', 'required']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda mengonsumsi cemilan manis atau minuman manis?</label>
                <div class="input-group mb-2">
                    <input type="number" id="CemilanManisHari" name="CemilanManisHari" class="form-control" value="<?php echo e($data->CemilanManisHari ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
                <div class="input-group">
                    <input type="number" id="CemilanManisMinggu" name="CemilanManisMinggu" class="form-control" value="<?php echo e($data->CemilanManisMinggu ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/minggu</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda minum minuman manis yang dibuat sendiri? Contoh: <b>kopi/teh manis</b></label>
                <div class="input-group mb-2">
                    <input type="number" id="MinumanManisHari" name="MinumanManisHari" class="form-control" value="<?php echo e($data->MinumanManisHari ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
                <div class="input-group">
                    <input type="number" id="MinumanManisMinggu" name="MinumanManisMinggu" class="form-control" value="<?php echo e($data->MinumanManisMinggu ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/minggu</span>
                    </div>
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='<?php echo e(route("polamakan.create.step.one")); ?>'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
    $(document).ready(function() {
        //Menampilkan detail pertanyaan jika merokok
        if ($('#Rokok option').filter(':selected').text() === "Ya") {
            $("#rokokdtl").show();
            $('.dtl').prop('required', true);
        } else {
            $("#rokokdtl").hide();
            $(".dtl").val("");
        }
        $("#Rokok").change(function() {
            if ($(this).val() == "Ya") {
                $("#rokokdtl").show();
                $('.dtl').prop('required', true);
            } else {
                $("#rokokdtl").hide();
                $('.dtl').prop('required', false);
                $(".dtl").val("");
            }
        });

        //Pilih salah satu opsi jika value tidak sama dengan opsi
        var isi = "<?php echo e(!empty($data->TempatRokok) ? $data->TempatRokok : ''); ?>";
        switch (isi) {
            case "":
                opt = "";
                break;
            case "Di rumah":
                opt = "Di rumah";
                break;
            case "Di tempat kerja":
                opt = "Di tempat kerja";
                break;
            default:
                opt = "Lainnya";
        }
        if (opt === "Lainnya") {
            $('#TempatRokok option[value=Lainnya]').attr('selected', 'selected');
        } else {
            $('#TempatRokok option[value=opt]').attr('selected', 'selected');
        }

        //Menampilkan detail pertanyaan jika tempat merokok lainnya
        if ($('#TempatRokok option').filter(':selected').text() === "Lainnya") {
            $(".dtl2").show();
            $('#TempatRokokLain').prop('required', true);
            $('#TempatRokokLain').attr('name', 'TempatRokok');
            $('#TempatRokok').prop('required', false);
        } else {
            $(".dtl2").hide();
            $('#TempatRokokLain').attr('name', '');
            $("#TempatRokokLain").val("");
        }
        $("#TempatRokok").change(function() {
            if ($(this).val() == "Lainnya") {
                $(".dtl2").show();
                $('#TempatRokokLain').prop('required', true);
                $('#TempatRokokLain').attr('name', 'TempatRokok');
                $('#TempatRokok').prop('required', false);
                $('#TempatRokok').attr('name', '');
            } else {
                $(".dtl2").hide();
                $('#TempatRokokLain').prop('required', false);
                $('#TempatRokokLain').attr('name', '');
                $("#TempatRokokLain").val("");
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mobile.pageslayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>