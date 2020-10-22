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
                                        <h4 class="m-b-10">Rencana Donasi</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/home') }}">
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
                                                    <!-- <a href="{{ url('/donate-plan/tambah') }}" class="btn btn-sm waves-effect waves-light btn-primary" data-toggle="tooltip" data-placement="bottom" title data-original-title="Tambah"><i class="icofont icofont-ui-add"></i> | Tambah</a>  -->
                                                </div>
                                                <div class="card-block">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="row-delete" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th width="21px">No</th>
                                                                    <th>Invoice</th>
                                                                    <th>Nama Donatur</th>
                                                                    <th>Telepon</th>
                                                                    <th>Rekening</th>
                                                                    <th>Donasi</th>
                                                                    <th width="120px">Opsi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($DonatePlan as $row)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>                                                                    
                                                                    <td>{{ $row->Invoice }}</td>
                                                                    <td>{{ $row->Name }}</td>
                                                                    <td>{{ $row->Phone }}</td>
                                                                    <td>{{ $row->Bank }} - {{ $row->AccountNumber }}</td>
                                                                    <td>
                                                                        @php
                                                                            $format_rupiah = "Rp " . number_format($row->AmountUnique,0,',','.');
                                                                            echo $format_rupiah;
                                                                        @endphp
                                                                    </td>
                                                                    <td>
                                                                        <a href="donate-plan/edit/{{ $row->ID }}" class="btn btn-mini waves-effect waves-light btn-warning" data-toggle="tooltip" data-placement="bottom" title data-original-title="Edit"><i class="icofont icofont-ui-edit"></i> | Edit</a>
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
                    url:"{{url('donate-plan/hapus')}}/"+id
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

