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
                                        <h4 class="m-b-10">{{ $judul }} {{ $ProgramByID->Name }}</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                            <a href="{{ url('/admin-home') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/program') }}">
                                                Program
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a>{{ $judul }}</a>
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
                                                    <h5>{{ $judul }}</h5>
                                                </div>
                                                <div class="card-block">
                                                    <form method="post" id="form" action="{{ url('program/updateprogress')}}" class="form-material" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                        <input type="hidden" name="ID" value="{{ $Progress->ID }}">
                                                        <div class="form-group form-primary form-static-label">
                                                            <input type="text" name="Summary" class="form-control" value="{{ $Progress->Summary }}" autocomplete="off">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Judul</label>
                                                        </div>
                                                        <div class="form-group form-primary form-static-label">
                                                            <input name="ProgressDate" id="dropper-animation" class="form-control tanggal" type="text" value="{{ $Progress->ProgressDate }}" autocomplete="off" />
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Tanggal</label>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>Isi</label>
                                                            <div class="form-group form-editor-tinymce">
                                                            <textarea id="editor2" name="Description" class="form-control my-editor">{{ $Progress->Description }}</textarea>
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
            tinymce.triggerSave(true, true); //Simpan isi editor tinymce
            var formData = new FormData($("#form")[0]);
            
            $.ajax({
                url:"{{url('program/updateprogress')}}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(hasil) {
                    if(hasil.status)
                    { 
                        respon('success','Berhasil','Simpan Berhasil');
                        window.location = '{{ url('program/progresslist').'/'.$Progress->ProgramID }}';
                    }
                },
                error: function (hasil)
                {
                    var errors = hasil.responseJSON;
                    respon('error','Simpan Gagal','Data Harus Diisi');
                }
            });
            return false;
        });

        tinymce.init(editor_config); //Menampilkan editor tinymce

        $('.tanggal').datepicker({
            autoclose: true,
            format:"dd-mm-yyyy"
        });
    });
</script>
@endsection                 
