<?php echo $__env->make('templates.komponen.datatable', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                                            <a>Rencana Donasi</a>
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
                                                <div class="card-header icon-list-demo">
                                                    <!-- <a href="<?php echo e(url('/donate-plan/tambah')); ?>" class="btn btn-sm waves-effect waves-light btn-primary" data-toggle="tooltip" data-placement="bottom" title data-original-title="Tambah"><i class="icofont icofont-ui-add"></i> | Tambah</a>  -->
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="row-delete" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th width="21px">No</th>
                                                                    <th>Nomor Invoice</th>
                                                                    <th>Nama Donatur</th>
                                                                    <th>Telepon</th>
                                                                    <th>Email</th>
                                                                    <th>Jumlah Donasi</th>
                                                                    <th width="120px">Opsi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php $__currentLoopData = $DonatePlan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td><?php echo e($loop->iteration); ?></td>                                                                    
                                                                    <td><?php echo e($row->Invoice); ?></td>
                                                                    <td><?php echo e($row->Name); ?></td>
                                                                    <td><?php echo e($row->Phone); ?></td>
                                                                    <td><?php echo e($row->Email); ?></td>
                                                                    <td><?php echo e($row->Amount); ?></td>
                                                                    <td>
                                                                        <!-- <a href="donate-plan/edit/<?php echo e($row->ID); ?>" class="btn btn-mini waves-effect waves-light btn-warning" data-toggle="tooltip" data-placement="bottom" title data-original-title="Edit"><i class="icofont icofont-ui-edit"></i> | Edit</a> -->
                                                                        <button type="button" class="btn btn-mini waves-effect waves-light btn-danger" onclick="return checkdelete(<?php echo e($row->ID); ?>)" data-toggle="tooltip" data-placement="bottom" title data-original-title="Hapus"><i class="icofont icofont-ui-delete"></i> | Hapus</button>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
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
$(document).ready( function () {
    $('.table').DataTable();
} );
function checkdelete(id)
{   
    Swal.fire({
            title: 'Yakin?',
            text: "Anda yakin ingin menghapus group ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
            }).then((result) => {
            if (result.value) {
                $.ajax({
                    url:"<?php echo e(url('donate-plan/hapus')); ?>/"+id,
                    success: function(data){
                        window.location.reload();
                    }, 
                    error: function(req, err){ 
                        console.log('my message' + err); 
                    }
                });

            }
        })
}
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>