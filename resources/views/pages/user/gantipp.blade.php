<div id="GantiPp" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="card">
            <div class="card-block">
                <form id="ganti_pp" class="md-float-material form-material" method="POST" action="{{ route('ganti.pp') }}">
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-center">Ganti Foto Profil</h3>
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input type="file" name="foto" class="form-control" accept="image/gif, image/jpeg, image/png">
                    </div>
                    <div class="col-md-12">
                        <button id="simpan_pp" type="button" class="btn btn-primary waves-effect waves-light text-center m-l-5 float-right">Simpan</button>
                        <button type="button" class="btn btn-default waves-effect waves-light text-center float-right m-r-5" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>