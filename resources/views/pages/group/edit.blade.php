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
                                        <h4 class="m-b-10">Edit Group (Role Aplikasi)</h4>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/home') }}">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/group') }}">Group</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a>Edit Group</a>
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
                                                    <h5>Edit Group</h5>
                                                </div>
                                                <div class="card-block">
                                                @foreach($isi['group'] as $g)
                                                    <form id="form" onsubmit="return checkedit()" method="post" class="form-material">
                                                        {{ csrf_field() }}
                                                        <div class="form-group form-primary">
                                                            <label class="label"><font color="red">* Wajib diisi</font></label>
                                                        </div>
                                                        <div class="form-group form-primary form-static-label">
                                                            <input type="hidden" name="id" value="{{ $g->ID }}">
                                                            <input type="text" name="nama" class="form-control" required="required" value="{{ $g->Name }}">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Nama Group <font color="red">*</font></label>
                                                        </div>
                                                        <div class="form-group">
                                                            {{-- <div class="col m3"> --}}
                                                                <h6 style="padding:10px;background-color: #f4f4f4;">Hak Akses</h6>
                                                                <div class="row">
                                                                @for($i=0;$i<count($module);$i++)
                                                                    @if($module[$i]->ParentID=='')
                                                                    <div class="col-md-6">
                                                                        <div class="card border-checkbox-section">
                                                                    <ul class="treeview card-header borderless">
                                                                        <li id="li_{{$i}}" class="contains-items">
                                                                            <div class="checkbox border-checkbox-group border-checkbox-group-primary">
                                                                                @php
                                                                                $selected1 = '';
                                                                                for($x=0;$x<count($detailgroup);$x++)
                                                                                {
                                                                                    if($detailgroup[$x]->ID==$module[$i]->ID)
                                                                                    {
                                                                                          $selected1='checked="checked"';
                                                                                    }
                                                                                }
                                                                                @endphp
                                                                                <input class="border-checkbox" name="cekbox[]" type="checkbox" id="checkbox{{$module[$i]->ID}}" value="{{$module[$i]->ID}}" {{$selected1}}>
                                                                                <label for="checkbox{{$module[$i]->ID}}" class="border-checkbox-label">MENU : {{$module[$i]->Name}}</label>
                                                                            </div>
                                                                            @for($j=0;$j<count($module);$j++)
                                                                            @if($module[$j]->ParentID==$module[$i]->ID)
                                                                                <div class="card-block" style="border-bottom:1px solid #ededed;">
                                                                                    <div class="border-checkbox-section">
                                                                                        <div class="border-checkbox-group border-checkbox-group-primary">
                                                                                            @php
                                                                                            $selected = '';
                                                                                            for($x=0;$x<count($detailgroup);$x++)
                                                                                            {
                                                                                                if($detailgroup[$x]->ID==$module[$j]->ID)
                                                                                                {
                                                                                                    $selected='checked="checked"';
                                                                                                }
                                                                                            }
                                                                                            @endphp
                                                                                            <ul>
                                                                                                <li class="li_{{$i}}{{$j}}">
                                                                                                    <div class="checkbox">
                                                                                                        <input class="border-checkbox" name="cekbox[]" type="checkbox" id="checkbox{{$module[$j]->ID}}" value="{{$module[$j]->ID}}" {{$selected}}>
                                                                                                        <label class="border-checkbox-label" for="checkbox{{$module[$j]->ID}}">
                                                                                                            {{$module[$j]->Name}}, <i>url</i> : <code>{{$module[$j]->Url}}</code>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                    @for($k=0;$k<count($module);$k++)
                                                                                                    @if($module[$k]->ParentID==$module[$j]->ID)
                                                                                                        <div class="card-block">
                                                                                                            <div class="border-checkbox-section">
                                                                                                                <div class="border-checkbox-group border-checkbox-group-primary">
                                                                                                                @php
                                                                                                                $selected = '';
                                                                                                                for($y=0;$y<count($detailgroup);$y++)
                                                                                                                {
                                                                                                                    if($detailgroup[$y]->ID==$module[$k]->ID)
                                                                                                                    {
                                                                                                                        $selected='checked="checked"';
                                                                                                                    }
                                                                                                                }
                                                                                                                @endphp
                                                                                                                <ul>
                                                                                                                    <li class="li_{{$i}}{{$j}}{{$k}}">
                                                                                                                        <div class="checkbox">
                                                                                                                            <input class="border-checkbox" name="cekbox[]" type="checkbox" id="checkbox{{$module[$k]->ID}}" value="{{$module[$k]->ID}}" {{$selected}}>
                                                                                                                            <label class="border-checkbox-label" for="checkbox{{$module[$k]->ID}}">
                                                                                                                                {{$module[$k]->Name}}, <i>url</i> : <code>{{$module[$k]->Url}}</code>
                                                                                                                            </label>
                                                                                                                        </div>
                                                                                                                        @for($l=0;$l<count($module);$l++)
                                                                                                                        @if($module[$l]->ParentID==$module[$k]->ID)
                                                                                                                            <div class="card-block">
                                                                                                                                <div class="border-checkbox-section">
                                                                                                                                    <div class="border-checkbox-group border-checkbox-group-primary">
                                                                                                                                    @php
                                                                                                                                    $selected = '';
                                                                                                                                    for($y=0;$y<count($detailgroup);$y++)
                                                                                                                                    {
                                                                                                                                        if($detailgroup[$y]->ID==$module[$l]->ID)
                                                                                                                                        {
                                                                                                                                            $selected='checked="checked"';
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                    @endphp
                                                                                                                                    <ul>
                                                                                                                                        <li class="li_{{$i}}{{$j}}{{$k}}{{$l}}">
                                                                                                                                            <div class="checkbox">
                                                                                                                                                <input class="border-checkbox" name="cekbox[]" type="checkbox" id="checkbox{{$module[$l]->ID}}" value="{{$module[$l]->ID}}" {{$selected}}>
                                                                                                                                                <label class="border-checkbox-label" for="checkbox{{$module[$l]->ID}}">
                                                                                                                                                    {{$module[$l]->Name}}, <i>url</i> : <code>{{$module[$l]->Url}}</code>
                                                                                                                                                </label>
                                                                                                                                            </div>
                                                                                                                                        </li>
                                                                                                                                    </ul>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        @endif
                                                                                                                        @endfor
                                                                                                                    </li>
                                                                                                                </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @endfor
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            @endfor
                                                                        </li>
                                                                    </ul>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                @endfor
                                                                {{-- </div> --}}
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="submit" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title data-original-title="Simpan"><i class="icofont icofont-save"></i> | Simpan</button>
                                                            <a href="{{ url('group') }}" class="btn waves-effect waves-light btn-danger btn-outline-danger float-right"  data-toggle="tooltip" data-placement="bottom" title data-original-title="Kembali" style="margin-right: 10px;"><i class="icofont icofont-undo"> | Kembali</i></a>                                                        
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
$(document).ready( function () {
    $('.table').DataTable();
    $('input[type=checkbox]').change(function(){
        // if is checked
        if(this.checked){
            // check all children
            var lenchk = $(this).closest('ul').find(':checkbox');
            var lenchkChecked = $(this).closest('ul').find(':checkbox:checked');

            //if all siblings are checked, check its parent checkbox
            if (lenchk.length == lenchkChecked.length) {
                $(this).closest('ul').siblings().find(':checkbox').prop('checked', true);
            }else{
                $(this).closest('.checkbox').siblings().find(':checkbox').prop('checked', true);
            }
        } else {
            // uncheck all children
            $(this).closest('.checkbox').siblings().find(':checkbox').prop('checked', false);
            $(this).closest('ul').siblings().find(':checkbox').prop('checked', false);
        }
    });
} );

function checkedit()
{
    document.getElementById("form").action = "{{ url('/group/edit/exec') }}"; 
    document.getElementById("form").submit();
    var hasil = false;
    Swal.fire({
        title: 'Sukses',
        text: "Group berhasil diubah",
        type: 'success',
        showConfirmButton: false
        }).then((result) => {
        if (result.value) {
            hasil = true;
        }
    })
    return hasil;
}
</script>
@endsection                 