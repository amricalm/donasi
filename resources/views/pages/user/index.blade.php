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
                                            <a href="{{ url('/home') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a>User</a>
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
                                                    <a href="{{ url('user/tambah') }}" class="btn btn-sm waves-effect waves-light btn-primary" data-toggle="tooltip" data-placement="bottom" title data-original-title="Tambah"><i class="icofont icofont-ui-add"></i> | Tambah</a> 
                                                </div>
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label>Bagian</label>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-primary">
                                                                <select name="unit" id="unit" class="form-control">
                                                                    <option value="0"></option>                                                
                                                                    @foreach($isi['unit'] as $row)
                                                                        <option value="{{$row->ID}}">{{$row->Name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group form-primary">
                                                                <button type="button" name="filter" id="filter" class="btn btn-sm waves-effect waves-light btn-primary">Filter</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="daftarUser"></div>
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
    
    var filterUnit = $('#unit').val();
    $('#daftarUser').html('<i class="fa fa-spinner"></i>');
    $.ajax({
        url:"{{url('user/filter')}}/"+filterUnit
    }).done(function(view) {
        $('#daftarUser').html(view);
    });
} );

$('#filter').click(function(){
    var filterUnit = $('#unit').val();
    $('#daftarUser').html('<i class="fa fa-spinner"></i>');
    $.ajax({
        url:"{{url('user/filter')}}/"+filterUnit
    }).done(function(view) {
        $('#daftarUser').html(view);
    });
});

function checkdelete(id)
    {
        Swal.fire({
                title: 'Yakin?',
                text: "Anda yakin ingin menghapus user ini?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
                }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url:"{{url('user/hapus')}}/"+id
                    }).done(function(view) {
                            window.location.reload();
                    });

                }
            })
    }
</script>
@endsection