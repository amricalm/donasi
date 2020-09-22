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
                                        <h4 class="m-b-10">Rencana Donasi</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/home') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                                <a href="{{ url('/donate-plan') }}">Rencana Donasi</a>
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
                                                <form method="post" id="form" action="{{ url('danate-plan/update') }}" class="form-material" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="hidden" name="id" value="{{ $donate->ID }}">
                                                        <input type="text" name="Invoice" class="form-control" value="{{ $donate->Invoice }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Invoice</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Name" class="form-control" value="{{ $donate->Name }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Nama Donatur</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="number" name="Phone" class="form-control" value="{{ $donate->Phone }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Telepon</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="email" name="Email" class="form-control" value="{{ $donate->Email }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Email</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <select name="AccountNumber" class="form-control">
                                                            <option></option>                                                
                                                            @foreach($bank as $row)
                                                                <option value="{{$row->Number}}"
                                                                    @if(old('AccountNumber',$donate->AccountNumber) ==  $row->Number )
                                                                        selected
                                                                    @endif
                                                                >{{$row->Label}}, acc {{ $row->Number }} a/n {{ $row->Name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Donasi ke Rekening</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Amount" class="form-control" value="{{ $donate->Amount }}" required="required">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Jumlah Donasi</label>
                                                    </div>
                                                    <div class="form-group form-primary form-static-label">
                                                        <input type="text" name="Message" class="form-control" value="{{ $donate->Message }}">
                                                        <span class="form-bar"></span>
                                                        <label class="float-label">Pesan dan Do'a</label>
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
                url:"{{ url('/donate-plan/update') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(hasil) {
                    if(hasil)
                    { 
                        respon('success','Update Berhasil');
                        window.location = '{{ url('donate-plan')}}';
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
@endsection                 
