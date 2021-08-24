@extends('templates.index')
@include('templates.komponen.datatable')
@include('templates.komponen.sweetalert')
@include('templates.komponen.timeline-social')
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
                                <!-- Page-body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div>
                                                <div class="content social-timeline">
                                                    <div class="">
                                                        <!-- Row Starts -->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <!-- Timeline button start -->
                                                                    <a href="{{ url('/program/addprogress').'/'.$ProgramByID->ID }}" class="btn btn-primary waves-effect waves-light m-b-10" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tambah"><i class="icofont icofont-ui-add"></i> | Tambah</a>
                                                                <!-- Timeline button end -->
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                        <!-- Timeline tab start -->
                                                        <div class="row">
                                                            <div class="col-md-12 timeline-dot">
                                                                @foreach($Progress as $row)
                                                                <div class="social-timelines p-relative">
                                                                    <div class="row timeline-right p-t-35">
                                                                        <div class="col-2 col-sm-2 col-xl-1">
                                                                            <div class="social-timelines-left">
                                                                                <button class="btn waves-effect waves-light btn-success timeline-icon btn-icon"><i class="icofont icofont-ui-check"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-10 col-sm-10 col-xl-11 p-l-5 p-b-35">
                                                                            <div class="card">
                                                                                <div class="card-block post-timelines">
                                                                                    <span class="dropdown-toggle addon-btn text-muted float-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip"></span>
                                                                                    <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                                        <a class="dropdown-item" href="{{ url('program/editprogress').'/'.$row->ID }}">Edit</a>
                                                                                        <a class="dropdown-item" href="#" onclick="return checkdelete({{$row->ID}})">Hapus</a>
                                                                                    </div>
                                                                                    <div class="chat-header f-w-600">{{ $row->Summary }}</div>
                                                                                    <div class="social-time text-muted">{{ $row->ProgressDate }}</div>
                                                                                </div>
                                                                                <div class="card-block">
                                                                                    <div class="timeline-details">
                                                                                        {!! $row->Description !!}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <!-- Timeline tab end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-body end -->
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
                    url:"{{url('program/deleteprogress')}}/"+ID
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

