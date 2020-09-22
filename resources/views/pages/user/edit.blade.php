@extends('templates.index')
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
                                            <a href="{{ url('/home') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a href="{{ url('/daftar-user') }}">User</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a>Edit User</a>
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
                                                <h5>Edit User</h5>
                                                <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                            </div>
                                            <div class="card-block">
                                            @foreach($isi['user'] as $u)
                                                <form method="post" id="form" action="{{ url('/user/edit/exec') }}" class="form-material" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="form-group form-primary">
                                                        <label class="label"><font color="red">* Wajib diisi</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="hidden" name="id" value="{{ $u->ID }}">
                                                        <input type="text" name="nama" class="form-control" value="{{ $u->Name }}" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Nama<font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="EmployeeName" class="form-control" value="{{ $u->EmployeeName }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Nama Karyawan</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="login" class="form-control" value="{{ $u->Login }}" maxlength="20" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Username <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="password" name="password" class="form-control" value="{{ $u->Password }}" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Password <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="number" name="hp" class="form-control" value="{{ $u->Hp }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Hp</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="email" class="form-control" value="{{ $u->Email }}" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Email <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <select name="unit" class="form-control" required="required">
                                                            <option></option>                                                
                                                            @foreach($isi['unit'] as $row)
                                                                <option value="{{$row->ID}}"
                                                                    @if(old('unit',$u->UnitID) ==  $row->ID )
                                                                        selected
                                                                    @endif
                                                                >{{$row->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Unit <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <select name="group" class="form-control" required="required">
                                                            <option></option>                                                
                                                            @foreach($isi['group'] as $row)
                                                                <option value="{{$row->ID}}"
                                                                    @if(old('group',$u->GroupID) ==  $row->ID )
                                                                        selected
                                                                    @endif
                                                                >{{$row->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Group <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <select name="posisi" class="form-control" required="required">
                                                            <option></option>                                                
                                                            @foreach($isi['position'] as $row)
                                                                <option value="{{$row->ID}}"
                                                                    @if(old('posisi',$u->PositionID) ==  $row->ID )
                                                                        selected
                                                                    @endif
                                                                >{{$row->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Posisi <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <select name="reportto" class="form-control" required="required">
                                                            <option></option>                                                
                                                            @foreach($isi['reportto'] as $row)
                                                                <option value="{{$row->ID}}"
                                                                    @if(old('reportto',$u->ReportTo) ==  $row->ID )
                                                                        selected
                                                                    @endif
                                                                >{{$row->Name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Atasan <font color="red">*</font></label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <select name="status" class="form-control" value="{{ $u->Active }}" required="required">
                                                            <option></option>
                                                            <option value="1" @if($u->Active == '1') selected @endif>Aktif</option>
                                                            <option value="0" @if($u->Active == '0') selected @endif>Tidak Aktif</option>
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Status <font color="red">*</font></label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                @if(!empty($u->Paraf))
                                                                    <img src="{{ url('photos/paraf/'.$u->Paraf) }}" style="max-height: 70px; max-width: 70px;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="file" name="paraf" id="paraf" class="form-control" onchange="Filevalidation()">
                                                                <input type="hidden" name="nonparaf" class="form-control" value="{{$u->Paraf}}" accept="image/gif, image/jpeg, image/png">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Paraf</label>
                                                                <span><code id="pa_warning"></code></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                            @if(!empty($u->Signature))
                                                                <img src="{{ url('photos/signature/'.$u->Signature) }}" style="max-height: 70px; max-width: 70px;">
                                                            @endif                                                            
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="file" name="signature" id="signature" class="form-control" onchange="Filevalidation()">
                                                                <input type="hidden" name="nonsignature" class="form-control" value="{{$u->Signature}}" accept="image/gif, image/jpeg, image/png">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Tanda Tangan</label>
                                                                <span><code id="si_warning"></code></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <img src="{{ url('photos/photo/'.$u->File) }}" style="max-height: 70px; max-width: 70px;">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="file" name="foto" id="foto" class="form-control" onchange="Filevalidation()">
                                                                <input type="hidden" name="nonfoto" class="form-control" value="{{ $u->File }}" accept="image/gif, image/jpeg, image/png">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Foto</label>
                                                                <span><code id="fo_warning"></code></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button id="simpan" type="button" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title data-original-title="Simpan"><i class="icofont icofont-save"></i> | Simpan</button>
                                                        <a href="{{ URL::previous() }}" class="btn waves-effect waves-light btn-danger btn-outline-danger float-right"  data-toggle="tooltip" data-placement="bottom" title data-original-title="Kembali" style="margin-right: 10px;"><i class="icofont icofont-undo"> | Kembali</i></a>                                                        
                                                    </div>
                                                </form>
                                            @endforeach
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
    $( document ).ready(function() {
        $(document).delegate("#simpan","click",function(){
            var formData = new FormData($("#form")[0]);

            $.ajax({
                url:"{{ url('/user/edit/exec') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(hasil) {
                    if(hasil)
                    { 
                        respon('success','Berhasil','Update User Berhasil');
                        window.location = '{{ url('user')}}';
                    }else
                    {
                        respon('error','Update Gagal','Update User Gagal');
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
