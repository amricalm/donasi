<div class="dt-responsive table-responsive">
    <table id="row-delete" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th width="21px">No</th>
                <th width="84px">Foto Profile</th>
                <th>Nama</th>
                <th>Login</th>
                <th>Email</th>
                <th>Status</th>
                <th width="120px">Opsi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($isi['user'] as $usr)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td style="text-align:center;"><img class="img-menu-user img-radius" width="30px" src="{{ $usr->getAvatar() }}" alt="profile"></td>
                <td>{{ $usr->Name }}</td>
                <td>{{ $usr->Login }}</td>
                <td>{{ $usr->Email }}</td>
                <td>
                    @if($usr->Active == 1)
                        Aktif
                    @else
                        Tidak Aktif
                    @endif
                </td>
                <td>
                        <a href="{{ url('/user/edit/'.$usr->ID) }}" class="btn btn-mini waves-effect waves-light btn-warning" data-toggle="tooltip" data-placement="bottom" title data-original-title="Edit"><i class="icofont icofont-ui-edit"></i> | Edit</a>
                    @if($usr->ID != 10)
                        <button type="button" class="btn btn-mini waves-effect waves-light btn-danger" onclick="checkdelete({{$usr->ID}})" data-toggle="tooltip" data-placement="bottom" title data-original-title="Hapus"><i class="icofont icofont-ui-delete"></i> | Hapus</button>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script type="text/javascript">
$(document).ready( function () {
    $('.table').DataTable();
} );
</script>
