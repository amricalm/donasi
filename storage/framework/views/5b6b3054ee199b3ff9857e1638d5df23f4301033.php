<?php echo $__env->make('templates.komponen.sweetalert', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('templates.komponen.tinymce', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('templates.komponen.tanggal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('body'); ?>
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        <?php echo $__env->make('templates.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <?php echo $__env->make('templates.menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="pcoded-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h4 class="m-b-10">Program</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo e(url('/home')); ?>">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a href="<?php echo e(url('/program')); ?>">Program</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a>Edit Program</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <!-- [ page content ] start -->
                                    <div class="row">
                                    <div class="col-sm-12">
                                    
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Edit Program</h5>
                                            </div>
                                            <div class="card-block">
                                                <form method="post" id="form" action="<?php echo e(url('program/update')); ?>" class="form-material" enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="hidden" name="ID" value="<?php echo e($program->ID); ?>">
                                                        <input type="text" name="Name" class="form-control" value="<?php echo e($program->Name); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Nama Program</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Summary" class="form-control" value="<?php echo e($program->Summary); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Ringkasan Program</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Description" class="form-control" value="<?php echo e($program->Description); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Deskripsi</label>
                                                    </div>
                                                    <!-- <div class="col-md-12">
                                                        <label>Deskripsi</label>
                                                        <div class="form-group form-editor-tinymce">
                                                        <textarea id="editor2" name="Description" class="form-control my-editor"><?php echo e($program->Description); ?></textarea>
                                                        </div>
                                                    </div> -->
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Url" class="form-control" value="<?php echo e($program->Url); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Url</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="number" id="DonationTarget" name="DonationTarget" class="form-control" value="<?php echo e($program->DonationTarget); ?>" autocomplete="off">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Target Donasi</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label>
                                                                    <input type="checkbox" id="unlimitedDonations">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                    </span>
                                                                    <span>Donasi Tidak Terbatas</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input name="StartDate" id="dropper-animation" class="form-control tanggal" value="<?php echo e($program->StartDatedmY); ?>" type="text" autocomplete="off" />
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Program Dimulai</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input name="EndDate" id="dropper-animation" class="form-control tanggal" value="<?php echo e($program->EndDatedmY); ?>" type="text" autocomplete="off" />
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Program Ditutup</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label>
                                                                    <input type="checkbox" id="unlimited">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                    </span>
                                                                    <span>Program tidak terbatas waktu</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <?php if(!empty($program->Banner)): ?>
                                                                    <img src="<?php echo e(url('photos/program/'.$program->Banner)); ?>" style="max-height: 70px; max-width: 70px;">
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="file" name="Banner" id="Banner" class="form-control" onchange="Filevalidation()">
                                                                <input type="hidden" name="nonBanner" class="form-control" value="<?php echo e($program->Banner); ?>" accept="image/gif, image/jpeg, image/png">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Banner</label>
                                                                <span><code id="fo_warning"></code></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <select type="text" name="Active" class="form-control" value="<?php echo e($program->Active); ?>">
                                                            <option value=""  <?php echo e($program->Active == '' ? 'selected' : ''); ?>></option>
                                                            <option value="1" <?php echo e($program->Active == 1 ? 'selected' : ''); ?>>Aktif</option>
                                                            <option value="0" <?php echo e($program->Active == 0 ? 'selected' : ''); ?>>Tidak Aktif</option>
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Status Program</label>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button id="simpan" type="button" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title data-original-title="Simpan"><i class="icofont icofont-save"></i> | Simpan</button>
                                                        <a href="<?php echo e(URL::previous()); ?>" class="btn waves-effect waves-light btn-danger btn-outline-danger float-right"  data-toggle="tooltip" data-placement="bottom" title data-original-title="Kembali" style="margin-right: 10px;"><i class="icofont icofont-undo"> | Kembali</i></a>                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </div>


                                    </div>
                                    </div>
                                    <!-- [ page content ] end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script type="text/javascript">
    $( document ).ready(function() {
        $(document).delegate("#simpan","click",function(){
            var formData = new FormData($("#form")[0]);

            $.ajax({
                url:"<?php echo e(url('/program/update')); ?>",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(hasil) {
                    if(hasil)
                    { 
                        respon('success','Update Berhasil');
                        window.location = '<?php echo e(url('program')); ?>';
                    }else
                    {
                        respon('error','Update Gagal');
                    }
                },
                error: function (hasil)
                {
                    var errors = hasil.responseJSON;
                    respon('error','Update Gagal',errors.message);
                }
            });
        });

        $('.tanggal').datepicker({
            autoclose: true,
            format:"dd-mm-yyyy"
        });

        var valDonationTarget = document.getElementById('DonationTarget').value;
        if(valDonationTarget == '') {
            document.getElementById('unlimitedDonations').checked = true;
            document.getElementsByName('DonationTarget')[0].value='';
            document.getElementsByName('DonationTarget')[0].disabled = true;
        }

        var valStartDate = document.getElementsByName('StartDate')[0].value;
        var valEndDate = document.getElementsByName('EndDate')[0].value;
        if(valStartDate == "00-00-0000" || valEndDate == "00-00-0000") {
            document.getElementById('unlimited').checked = true;
            document.getElementsByName('StartDate')[0].value='';
            document.getElementsByName('EndDate')[0].value='';
            document.getElementsByName('StartDate')[0].disabled = true;
            document.getElementsByName('EndDate')[0].disabled = true;
        }
    });

    document.getElementById('unlimited').onchange = function() {
        var x = document.getElementsByName('StartDate');
        x[0].disabled = this.checked;
        var y = document.getElementsByName('EndDate');
        y[0].disabled = this.checked;
    };

    document.getElementById('unlimitedDonations').onchange = function() {
        var x = document.getElementsByName('DonationTarget');
        x[0].disabled = this.checked;
        document.getElementById("DonationTarget").value='';
    };

    Filevalidation = () => {
		const fo = document.getElementById('Banner'); 

        // Check if any file banner is selected
        if (fo.files.length > 0) { 
			for (const i = 0; i <= fo.files.length - 1; i++) { 
				const fsize = fo.files.item(i).size; 
				const file = Math.round((fsize / 1024));
                var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
                var allowed = $.inArray($(fo).val().split('.').pop().toLowerCase(), fileExtension);

				// The size of the file. 
				if (file >= 50000) {
                    document.getElementById('Banner').value = "";
                    document.getElementById('Banner').style.border = "solid red 1px";
                    if (allowed == -1) {
                        document.getElementById('fo_warning').innerHTML = 'File terlalu besar, silakan pilih file kurang dari 50MB dan Format file yang yang diperbolehkan : '+fileExtension.join(', '); 
                    } else {
                        document.getElementById('fo_warning').innerHTML = 'File terlalu besar, silakan pilih file kurang dari 50MB'; 
                    }
                } else {
                    if (allowed == -1) {
                        document.getElementById('Banner').value = "";
                        document.getElementById('Banner').style.border = "solid red 1px";
                        document.getElementById('fo_warning').innerHTML = "Format file yang yang diperbolehkan : "+fileExtension.join(', '); 
                    } else {
                        document.getElementById('Banner').style.border = "none";
                        document.getElementById('fo_warning').style.visibility = "hidden";
                    }
				}
			} 
		}
	}
</script>
<?php $__env->stopSection(); ?>                 

<?php echo $__env->make('templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>