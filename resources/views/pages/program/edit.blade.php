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
                                        <h4 class="m-b-10">Program</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/home') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a href="{{ url('/program') }}">Program</a>
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
                                                <form method="post" id="form" action="{{ url('program/update') }}" class="form-material" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="hidden" name="ID" value="{{ $program->ID }}">
                                                        <input type="text" name="Name" class="form-control" value="{{ $program->Name }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Nama Program</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Summary" class="form-control" value="{{ $program->Summary }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Ringkasan Program</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Description" class="form-control" value="{{ $program->Description }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Deskripsi</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Url" class="form-control" value="{{ $program->Url }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Url</label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                @if(!empty($program->Banner))
                                                                    <img src="{{ url('photos/program/'.$program->Banner) }}" style="max-height: 70px; max-width: 70px;">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="file" name="Banner" id="Banner" class="form-control" onchange="Filevalidation()">
                                                                <input type="hidden" name="nonBanner" class="form-control" value="{{ $program->Banner }}" accept="image/gif, image/jpeg, image/png">
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Banner</label>
                                                                <span><code id="fo_warning"></code></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button id="simpan" type="button" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title data-original-title="Simpan"><i class="icofont icofont-save"></i> | Simpan</button>
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
    $( document ).ready(function() {
        $(document).delegate("#simpan","click",function(){
            var formData = new FormData($("#form")[0]);

            $.ajax({
                url:"{{ url('/program/update') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(hasil) {
                    if(hasil)
                    { 
                        respon('success','Update Berhasil');
                        window.location = '{{ url('program')}}';
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
@endsection                 
