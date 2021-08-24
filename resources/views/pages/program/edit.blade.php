@extends('templates.index')
@include('templates.komponen.sweetalert')
@include('templates.komponen.tinymce')
@include('templates.komponen.tanggal')
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
                                                    <div class="col-md-12">
                                                        <label>Deskripsi</label>
                                                        <div class="form-group form-editor-tinymce">
                                                        <textarea id="editor2" name="Description" class="form-control my-editor">{{ $program->Description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Url" class="form-control" value="{{ $program->Url }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Url</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input type="number" id="DonationTarget" name="DonationTarget" class="form-control" value="{{ $program->DonationTarget }}" autocomplete="off">
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
                                                                <input name="StartDate" id="dropper-animation" class="form-control tanggal" value="{{ $program->StartDatedmY }}" type="text" autocomplete="off" />
                                                                <span class="form-bar"></span>
                                                                <label class="float-label">Program Dimulai</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group form-primary form-static-label">
                                                                <input name="EndDate" id="dropper-animation" class="form-control tanggal" value="{{ $program->EndDatedmY }}" type="text" autocomplete="off" />
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
                                                    <div class="form-group form-primary form-static-label">
                                                        <select type="text" name="Active" class="form-control" value="{{ $program->Active }}">
                                                            <option value=""  {{ $program->Active == '' ? 'selected' : '' }}></option>
                                                            <option value="1" {{ $program->Active == 1 ? 'selected' : '' }}>Aktif</option>
                                                            <option value="0" {{ $program->Active == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Status Program</label>
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
            tinymce.triggerSave(true, true); //Simpan isi editor tinymce
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
                        respon('error','Update Gagal',errors.message);
                    }
                },
                error: function (hasil)
                {
                    var errors = hasil.responseJSON;
                    respon('error','Update Gagal',errors.message);
                }
            });
        });
        
        tinymce.init(editor_config); //Menampilkan Editor tinymce

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
</script>
@endsection                 
