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
                                        <h4 class="m-b-10">User</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/dashboard') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a href="{{ url('/user') }}">User</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a>Tambah User</a>
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
                                                <h5>Tambah User</h5>
                                            </div>
                                            <div class="card-block">
                                                <form method="POST" id="form" onsubmit="return checkadd()" class="form-material" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="form-group form-primary">
                                                        <label class="label"><font color="red">* Wajib diisi</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <input type="text" name="nama" class="form-control" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Nama <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <input type="text" name="EmployeeName" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Nama Karyawan</label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <input type="text" name="login" class="form-control" required="required" maxlength="20">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Username <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <input type="password" name="password" class="form-control" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Password <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <input type="number" name="hp" class="form-control">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Hp</label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <input type="text" name="email" class="form-control" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Email <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <select name="unit" class="form-control" required="required">
                                                            <option selected="selected"></option>                                                
                                                            @foreach($isi['unit'] as $row)
                                                                <option value="{{$row->ID}}">{{$row->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Unit <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <select name="group" class="form-control" required="required">
                                                            <option selected="selected"></option>                                                
                                                            @foreach($isi['group'] as $row)
                                                                <option value="{{$row->ID}}">{{$row->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Group <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <select name="posisi" class="form-control" required="required">
                                                            <option selected="selected"></option>                                                
                                                            @foreach($isi['position'] as $row)
                                                                <option value="{{$row->ID}}">{{$row->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Posisi <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <select name="reportto" class="form-control" required="required">
                                                            <option selected="selected"></option>                                                
                                                            @foreach($isi['reportto'] as $row)
                                                                <option value="{{$row->ID}}">{{$row->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Atasan <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary">
                                                        <select name="status" class="form-control" required="required">
                                                            <option></option>
                                                            <option value="1">Aktif</option>
                                                            <option value="0">Tidak Aktif</option>
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Status <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="file" name="paraf" id="paraf" class="form-control" accept="image/gif, image/jpeg, image/png" onchange="Filevalidation()">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Paraf</label>
                                                        <span><code id="pa_warning"></code></span>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="file" name="signature" id="signature" class="form-control" accept="image/gif, image/jpeg, image/png" onchange="Filevalidation()">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Tanda Tangan</label>
                                                        <span><code id="si_warning"></code></span>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="file" name="foto" id="foto" class="form-control" accept="image/gif, image/jpeg, image/png" onchange="Filevalidation()">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Foto</label>
                                                        <span><code id="fo_warning"></code></span>
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
    document.getElementById("form").action = "{{ url('/user/tambah/exec') }}"; 
    document.getElementById("form").submit();
    var hasil = false;
    Swal.fire({
        title: 'Sukses',
        text: "User berhasil disimpan",
        type: 'success',
        showConfirmButton: false
        }).then((result) => {
        if (result.value) {
            hasil = true;
        }
    })
    return hasil;
}

Filevalidation = () => { 
    const pa = document.getElementById('paraf'); 
    const si = document.getElementById('signature'); 
    const fo = document.getElementById('foto'); 

    // Check if any file paraf is selected
    if (pa.files.length > 0) { 
        for (const i = 0; i <= pa.files.length - 1; i++) { 

            const fsize = pa.files.item(i).size; 
            const file = Math.round((fsize / 1024)); 
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
            var allowed = $.inArray($(pa).val().split('.').pop().toLowerCase(), fileExtension);
            // The size of the file. 
            if (file >= 50000) {
                document.getElementById('paraf').value = "";
                document.getElementById('paraf').style.border = "solid red 1px";
                if (allowed == -1) {
                    document.getElementById('pa_warning').innerHTML = 'File terlalu besar, silakan pilih file kurang dari 50MB dan Format file yang yang diperbolehkan : '+fileExtension.join(', '); 
                } else {
                    document.getElementById('pa_warning').innerHTML = 'File terlalu besar, silakan pilih file kurang dari 50MB'; 
                }
            } else {
                if (allowed == -1) {
                    document.getElementById('paraf').value = "";
                    document.getElementById('paraf').style.border = "solid red 1px";
                    document.getElementById('pa_warning').innerHTML = "Format file yang yang diperbolehkan : "+fileExtension.join(', '); 
                } else {
                    document.getElementById('paraf').style.border = "none";
                    document.getElementById('pa_warning').style.visibility = "hidden";
                }
            } 
        } 
    }

    // Check if any file signature is selected
    if (si.files.length > 0) { 
        for (const i = 0; i <= si.files.length - 1; i++) { 
            const fsize = si.files.item(i).size; 
            const file = Math.round((fsize / 1024)); 
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
            var allowed = $.inArray($(si).val().split('.').pop().toLowerCase(), fileExtension);

            // The size of the file. 
            if (file >= 50000) {
                document.getElementById('signature').value = "";
                document.getElementById('signature').style.border = "solid red 1px";
                if (allowed == -1) {
                    document.getElementById('si_warning').innerHTML = 'File terlalu besar, silakan pilih file kurang dari 50MB dan Format file yang yang diperbolehkan : '+fileExtension.join(', '); 
                } else {
                    document.getElementById('si_warning').innerHTML = 'File terlalu besar, silakan pilih file kurang dari 50MB'; 
                }
            } else {
                if (allowed == -1) {
                    document.getElementById('signature').value = "";
                    document.getElementById('signature').style.border = "solid red 1px";
                    document.getElementById('si_warning').innerHTML = "Format file yang yang diperbolehkan : "+fileExtension.join(', '); 
                } else {
                    document.getElementById('signature').style.border = "none";
                    document.getElementById('si_warning').style.visibility = "hidden";
                }
            } 
        } 
    }

    // Check if any file foto is selected
    if (fo.files.length > 0) { 
        for (const i = 0; i <= fo.files.length - 1; i++) { 
            const fsize = fo.files.item(i).size; 
            const file = Math.round((fsize / 1024));
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
            var allowed = $.inArray($(fo).val().split('.').pop().toLowerCase(), fileExtension);
            // The size of the file. 
            if (file >= 50000) {
                document.getElementById('foto').value = "";
                document.getElementById('foto').style.border = "solid red 1px";
                if (allowed == -1) {
                    document.getElementById('fo_warning').innerHTML = 'File terlalu besar, silakan pilih file kurang dari 50MB dan Format file yang yang diperbolehkan : '+fileExtension.join(', '); 
                } else {
                    document.getElementById('fo_warning').innerHTML = 'File terlalu besar, silakan pilih file kurang dari 50MB'; 
                }
            } else {
                if (allowed == -1) {
                    document.getElementById('foto').value = "";
                    document.getElementById('foto').style.border = "solid red 1px";
                    document.getElementById('fo_warning').innerHTML = "Format file yang yang diperbolehkan : "+fileExtension.join(', '); 
                } else {
                    document.getElementById('foto').style.border = "none";
                    document.getElementById('fo_warning').style.visibility = "hidden";
                }
            }
        } 
    }
}
</script>
@endsection
                