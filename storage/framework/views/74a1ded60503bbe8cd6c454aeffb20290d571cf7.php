<?php echo $__env->make('templates.komponen.datatable', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('templates.komponen.sweetalert', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('templates.komponen.timeline-social', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                        <h4 class="m-b-10"><?php echo e($judul); ?> <?php echo e($ProgramByID->Name); ?></h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo e(url('/admin-home')); ?>">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="<?php echo e(url('/program')); ?>">
                                                Program
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a><?php echo e($judul); ?></a>
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
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div>
                                                <div class="content social-timeline">
                                                    <div class="">
                                                        <!-- Row Starts -->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <!-- Timeline button start -->
                                                                    <a href="<?php echo e(url('/program/addprogress').'/'.$ProgramByID->ID); ?>" class="btn btn-primary waves-effect waves-light m-b-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tambah"><i class="icofont icofont-ui-add"></i> | Tambah</a>
                                                                <!-- Timeline button end -->
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                        <!-- Timeline tab start -->
                                                        <div class="row">
                                                            <div class="col-md-12 timeline-dot">
                                                                <?php $__currentLoopData = $Progress; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="social-timelines p-relative">
                                                                    <div class="row timeline-right p-t-35">
                                                                        <div class="col-2 col-sm-2 col-xl-1">
                                                                            <div class="social-timelines-left">
                                                                                <button class="btn waves-effect waves-light btn-success timeline-icon btn-icon"><i class="icofont icofont-ui-check"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-10 col-sm-10 col-xl-11 p-l-5 p-b-35">
                                                                            <div class="card">
                                                                                <div class="card-block post-timelines">
                                                                                    <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip"></span>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                        <a class="dropdown-item" href="<?php echo e(url('program/editprogress').'/'.$row->ID); ?>">Edit</a>
                                                                                        <a class="dropdown-item" href="#" onclick="return checkdelete(<?php echo e($row->ID); ?>)">Hapus</a>
                                                                                    </div>
                                                                                    <div class="chat-header f-w-600"><?php echo e($row->Summary); ?></div>
                                                                                    <div class="social-time text-muted"><?php echo e($row->ProgressDate); ?></div>
                                                                                </div>
                                                                                <div class="card-block">
                                                                                    <div class="timeline-details">
                                                                                        <?php echo $row->Description; ?>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        </div>
                                                        <!-- Timeline tab end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-body end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script type="text/javascript">
$(document).ready( function () {
    $('.table').DataTable();
} );
function checkdelete(ID)
{   
    Swal.fire({
            title: 'Yakin?',
            text: "Anda yakin ingin menghapus data ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
            }).then((result) => {
            if (result.value) {
                $.ajax({
                    url:"<?php echo e(url('program/deleteprogress')); ?>/"+ID
                }).done(function(hasil) {
                    if(hasil.status)
                    {
                        respon('success','Berhasil dihapus');
                        window.location.reload();
                    }
                });

            }
        })
}
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>