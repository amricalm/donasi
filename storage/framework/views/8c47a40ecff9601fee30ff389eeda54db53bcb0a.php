<?php echo $__env->make('templates.komponen.sweetalert', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                        <h4 class="m-b-10">Rencana Donasi</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo e(url('/home')); ?>">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a href="<?php echo e(url('/donate-plan')); ?>">Rencana Donasi</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a>Edit Rencana Donasi</a>
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
                                                <h5>Edit Rencana Donasi</h5>
                                            </div>
                                            <div class="card-block">
                                                <form method="post" id="form" action="<?php echo e(url('danate-plan/update')); ?>" class="form-material" enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="hidden" name="id" value="<?php echo e($donate->ID); ?>">
                                                        <input type="text" name="Invoice" class="form-control" value="<?php echo e($donate->Invoice); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Invoice</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Name" class="form-control" value="<?php echo e($donate->Name); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Nama Donatur</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="number" name="Phone" class="form-control" value="<?php echo e($donate->Phone); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Telepon</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="email" name="Email" class="form-control" value="<?php echo e($donate->Email); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Email</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <select name="AccountNumber" class="form-control">
                                                            <option></option>                                                
                                                            <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($row->Number); ?>"
                                                                    <?php if(old('AccountNumber',$donate->AccountNumber) ==  $row->Number ): ?>
                                                                        selected
                                                                    <?php endif; ?>
                                                                ><?php echo e($row->Label); ?>, acc <?php echo e($row->Number); ?> a/n <?php echo e($row->Name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Donasi ke Rekening</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Amount" class="form-control" value="<?php echo e($donate->Amount); ?>" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Jumlah Donasi</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Message" class="form-control" value="<?php echo e($donate->Message); ?>">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Pesan dan Do'a</label>
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
                url:"<?php echo e(url('/donate-plan/update')); ?>",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(hasil) {
                    if(hasil)
                    { 
                        respon('success','Update Berhasil');
                        window.location = '<?php echo e(url('donate-plan')); ?>';
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
    });
</script>
<?php $__env->stopSection(); ?>                 

<?php echo $__env->make('templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>