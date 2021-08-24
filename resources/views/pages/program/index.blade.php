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
                                        <h4 class="m-b-10">Program</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/home') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a>Program</a>
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
                                                    <a href="{{ url('/program/tambah') }}" class="btn btn-sm waves-effect waves-light btn-primary" data-toggle="tooltip" data-placement="bottom" title data-original-title="Tambah"><i class="icofont icofont-ui-add"></i> | Tambah</a> 
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="row-delete" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th width="21px">No</th>
                                                                    <th>Nama Program</th>
                                                                    <!-- <th>Url</th> -->
                                                                    <th>Status</th>
                                                                    <th width="120px">Opsi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($Program as $row)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>                                                                    
                                                                    <td>{{ $row->Name }}</td>
                                                                    <!-- <td>{{ url('') }}/{{ $row->Url }}</td> -->
                                                                    <td>{{ $row->Active == 1 ? 'Aktif' : 'Tidak Aktif' }}</td>
                                                                    <td>
                                                                        <a href="{{ url('program/progresslist').'/'.$row->ID }}" class="btn btn-mini waves-effect waves-light btn-info" data-toggle="tooltip" data-placement="bottom" title data-original-title="Progres"><i class="icofont icofont-growth"></i> | Progres</a>
                                                                        <a href="{{ url('program/edit').'/'.$row->ID }}" class="btn btn-mini waves-effect waves-light btn-warning" data-toggle="tooltip" data-placement="bottom" title data-original-title="Edit"><i class="icofont icofont-ui-edit"></i> | Edit</a>
                                                                        <button type="button" class="btn btn-mini waves-effect waves-light btn-danger" onclick="return checkdelete({{$row->ID}})" data-toggle="tooltip" data-placement="bottom" title data-original-title="Hapus"><i class="icofont icofont-ui-delete"></i> | Hapus</button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
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
@endsection
@section('footer')
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
                    url:"{{url('program/hapus')}}/"+ID
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
@endsection

