<div id="GantiPassword" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="card">
            <div class="card-block">
                <form id="ganti_password" class="md-float-material form-material" method="POST" action="{{ route('ganti.password') }}">
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-center">Ganti Password</h3>
                        </div>
                    </div>
                    <div class="form-group form-primary{{ $errors->has('PasswordLama') ? ' has-error' : '' }}">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input type="password" id="PasswordLama" name="PasswordLama" class="form-control" required>
                        @if ($errors->has('PasswordLama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('PasswordLama') }}</strong>
                            </span>
                        @endif
                        <span class="form-bar"></span>
                        <label class="float-label">Password Lama</label>
                    </div>
                    <div class="form-group form-primary{{ $errors->has('PasswordBaru') ? ' has-error' : '' }}">
                        <input type="password" id="PasswordBaru" name="PasswordBaru" class="form-control" required>
                        @if ($errors->has('PasswordBaru'))
                            <span class="help-block">
                                <strong>{{ $errors->first('PasswordBaru') }}</strong>
                            </span>
                        @endif
                        <span class="form-bar"></span>
                        <label class="float-label">Password Baru</label>
                    </div>
                    <div class="form-group form-primary">
                        <input type="password" name="KonfirmasiBaru" class="form-control" required>
                        <span class="form-bar"></span>
                        <label class="float-label">Konfirmasi Password Baru</label>
                    </div>
                    <div class="col-md-12">
                        <button id="simpan_password" type="button" class="btn btn-primary waves-effect waves-light text-center m-l-5 float-right">Simpan</button>
                        <button type="button" class="btn btn-default waves-effect waves-light text-center float-right m-r-5" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>