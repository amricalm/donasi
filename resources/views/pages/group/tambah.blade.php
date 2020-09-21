@extends('templates.index')
@include('templates.komponen.datatable')
@include('templates.komponen.sweetalert')
@section('body')
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        @include('templates.navbar')
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('templates.menu')
                <div class="pcoded-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h4 class="m-b-10">Tambah Group (Role Aplikasi)</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/home') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="group">Group</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a>Tambah Group</a>
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
                                                    <h5>Tambah Group</h5>
                                                </div>
                                                <div class="card-block">
                                                    <form id="form" onsubmit="return checkadd()" method="post" class="form-material">
                                                        {{ csrf_field() }}
                                                        <div class="form-group form-primary">
                                                            <label class="label"><font color="red">* Wajib diisi</font></label>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="nama" class="form-control" required="required">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Nama Group <font color="red">*</font></label>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title data-original-title="Simpan"><i class="icofont icofont-save"></i> | Simpan</button>
                                                            <a href="{{ URL::previous() }}" class="btn waves-effect waves-light btn-danger btn-outline-danger float-right"  data-toggle="tooltip" data-placement="bottom" title data-original-title="Kembali" style="margin-right: 10px;"><i class="icofont icofont-undo"> | Kembali</i></a>                                                        
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
@endsection
@section('footer')
<script type="text/javascript">
$(document).ready( function () {
    $('.table').DataTable();
} );
function checkadd()
{
    document.getElementById("form").action = "{{ url('/group/tambah/exec') }}"; 
    document.getElementById("form").submit();
    var hasil = false;
    Swal.fire({
        title: 'Sukses',
        text: "Group berhasil disimpan",
        type: 'success',
        showConfirmButton: false
        }).then((result) => {
        if (result.value) {
            hasil = true;
        }
    })
    return hasil;
}
</script>
@endsection               