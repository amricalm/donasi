<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h6 class="mb-0"><?php echo e($judul); ?></h6>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('polamakan.create.step.one.post')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <!-- 1 -->
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda mengonsumsi buah-buahan segar per hari?</label>
                <div class="input-group">
                    <input type="number" id="Buah" name="Buah" class="form-control" value="<?php echo e($data->Buah ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Seberapa besar ukuran porsi buah yang konsumsi dalam sekali makan?</label>
                <div class="mx-auto">
                    <img src="<?php echo e(url('img/assets/isi-piringku-buah-buahan.jpg')); ?>" alt="isi piringku porsi buah-buahan" class="mw-100" />
                </div>
                <?php echo Form::select('PorsiBuah', ['' => '', 'Sama dengan gambar' => 'Sama dengan gambar', 'Lebih besar' => 'Lebih besar', 'Lebih kecil' => 'Lebih kecil'], $data->PorsiBuah ?? '', ['class' => 'form-control', 'id' => 'PorsiBuah', 'required']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali sehari Anda mengonsumsi sayur-sayuran?</label>
                <div class="input-group">
                    <input type="number" id="Sayur" name="Sayur" class="form-control" value="<?php echo e($data->Sayur ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Seberapa besar ukuran porsi sayur yang konsumsi dalam sekali makan?</label>
                <div class="mx-auto">
                    <img src="<?php echo e(url('img/assets/isi-piringku-sayuran.jpg')); ?>" alt="isi piringku porsi sayuran" class="mw-100" />
                </div>
                <?php echo Form::select('PorsiSayur', ['' => '', 'Sama dengan gambar' => 'Sama dengan gambar', 'Lebih besar' => 'Lebih besar', 'Lebih kecil' => 'Lebih kecil'], $data->PorsiSayur ?? '', ['class' => 'form-control', 'id' => 'PorsiSayur', 'required']);; ?>

            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda mengonsumsi sumber protein hewani dalam sehari? Contoh: <b>ikan, telur, ayam, daging, seafood, dll, atau 1 gelas susu</b></label>
                <div class="input-group">
                    <input type="number" id="ProteinHewani" name="ProteinHewani" class="form-control" value="<?php echo e($data->ProteinHewani ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda mengonsumsi sumber protein nabati dalam sehari? Contoh: <b>tempe, tahu, kacang edamame, kacang hijau, susu kedelai, dll</b></label>
                <div class="input-group">
                    <input type="number" id="ProteinNabati" name="ProteinNabati" class="form-control" value="<?php echo e($data->ProteinNabati ?? ''); ?>" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Seberapa besar ukuran porsi pangan sumber protein hewani ditambah protein nabati yang anda konsumsi dalam sekali makan?</label>
                <div class="mx-auto">
                    <img src="<?php echo e(url('img/assets/isi-piringku-lauk-pauk.jpg')); ?>" alt="isi piringku porsi lauk pauk" class="mw-100" />
                </div>
                <?php echo Form::select('PorsiProtein', ['' => '', 'Sama dengan gambar' => 'Sama dengan gambar', 'Lebih besar' => 'Lebih besar', 'Lebih kecil' => 'Lebih kecil'], $data->PorsiProtein ?? '', ['class' => 'form-control', 'id' => 'PorsiProtein', 'required']);; ?>

            </div>
            <div class="col-auto align-self-center  pl-0">
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