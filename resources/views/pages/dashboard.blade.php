@extends('templates.index')
@include('templates.komponen.chart')
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
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h4 class="m-b-10">{{ $judul }}</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                                <i class="feather icon-home"></i>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">{{ $judul }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="card-block">
                                                    <div class="mail-body">
                                                        <div class="mail-body-header">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <a href="{{ url('surat') }}" class="btn-xlg waves-effect waves-light btn-grd-info btn-block"><i class="icofont icofont-inbox"></i> Surat Internal</a>
                                                                </div>
                                                            </div>
                                                         <!--   <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                   <a href="{{ url('surat-eksternal') }}" class="btn-xlg waves-effect waves-light btn-grd-warning btn-block"><i class="icofont icofont-external-link"></i> Surat Eksternal</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-6">
                                                                <div class="form-group">
                                                                    <a href="{{ url('surat-internal-upload') }}" class="btn-xlg waves-effect waves-light btn-grd-danger btn-block"><i class="icofont icofont-inbox"></i> Surat Internal Upload</a>
                                                                </div> -->
                                                                <div class="col-md-12 col-lg-4">
                                                                    <div class="card">
                                                                        <div class="card-block">
                                                                            <div id="jenisSurat"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-lg-4">
                                                                    <div class="card">
                                                                        <div class="card-block">
                                                                            <div id="statusSurat"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- </div><div class="col-md-12 col-lg-4">
                                                                    <div class="card">
                                                                        <div class="card-block">
                                                                            <div id="disposisiSurat"></div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
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
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: 'beranda/chart',
        type: "POST",
        contentType: "application/json",
        dataType:'JSON',
        data: null,
        async: "true",
        cache: "false",
        success: function(result){
            var jenisSurat = result.jenissurat;
            var data = {};
            var value = [];
            jenisSurat.forEach(function(d) {
                data[d.Description] = d.TotalMail;
                value.push(d.Description);
            });

            c3.generate({
                bindto: '#jenisSurat',
                data: {
                    json: [data],
                    keys: {
                        value : value
                    },
                    type: 'donut'
                },
                donut: {
                    title: "Jenis Surat"
                },
                color: {
                    pattern: ['#11c15b', '#536dfe','#ff9800', '#78c350', '#f7531f', '#ffbb78', '#2ca02c', '#98df8a', '#d62728', '#ff9896', '#9467bd', '#c5b0d5', '#8c564b', '#c49c94', '#e377c2', '#f7b6d2', '#7f7f7f', '#c7c7c7', '#bcbd22', '#dbdb8d', '#17becf', '#9edae5']
                }
            })
        },
        error: function (xhr, status, error) {
            alert(error);
        }
    });

    $.ajax({
        url: 'beranda/chart',
        type: "POST",
        contentType: "application/json",
        dataType:'JSON',
        data: null,
        async: "true",
        cache: "false",
        success: function(result){
            var statusSurat = result.statussurat;
            var data = {};
            var value = [];
            statusSurat.forEach(function(d) {
                data[d.Status] = d.TotalMail;
                value.push(d.Status);
            });

            c3.generate({
                bindto: '#statusSurat',
                data: {
                    json: [data],
                    keys: {
                        value : value
                    },
                    type: 'donut'
                },
                donut: {
                    title: "Status Surat"
                },
                color: {
                    pattern: ['#11c15b', '#536dfe','#ff9800', '#78c350', '#f7531f', '#ffbb78', '#2ca02c', '#98df8a', '#d62728', '#ff9896', '#9467bd', '#c5b0d5', '#8c564b', '#c49c94', '#e377c2', '#f7b6d2', '#7f7f7f', '#c7c7c7', '#bcbd22', '#dbdb8d', '#17becf', '#9edae5']
                }
            })
        },
        error: function (xhr, status, error) {
            alert(error);
        }
    });
});
</script>
@endsection
