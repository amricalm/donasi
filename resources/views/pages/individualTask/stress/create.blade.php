@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('stress.create.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="TidakAmanKerja">Kondisi di tempat kerja tidak menyenangkan atau kadang-kadang bahkan tidak aman</label>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="TidakAmanKerja" value="1" {{($data->TidakAmanKerja ?? '') == '1' ? 'checked' : ''}}>Tidak pernah
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="TidakAmanKerja" value="2" {{($data->TidakAmanKerja ?? '') == '2' ? 'checked' : ''}}>Sangat jarang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="TidakAmanKerja" value="3" {{($data->TidakAmanKerja ?? '') == '3' ? 'checked' : ''}}>Kadang-kadang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="TidakAmanKerja" value="4" {{($data->TidakAmanKerja ?? '') == '4' ? 'checked' : ''}}>Sering
                    </label>
                </div>
                <div class="input-group mb-2">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="TidakAmanKerja" value="5" {{($data->TidakAmanKerja ?? '') == '5' ? 'checked' : ''}}>Sangat sering
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="PengaruhNegatif">Saya merasa pekerjaan saya memberi pengaruh negatif pada fisik atau emosi saya</label>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="PengaruhNegatif" value="1" {{($data->PengaruhNegatif ?? '') == '1' ? 'checked' : ''}}>Tidak pernah
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="PengaruhNegatif" value="2" {{($data->PengaruhNegatif ?? '') == '2' ? 'checked' : ''}}>Sangat jarang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="PengaruhNegatif" value="3" {{($data->PengaruhNegatif ?? '') == '3' ? 'checked' : ''}}>Kadang-kadang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="PengaruhNegatif" value="4" {{($data->PengaruhNegatif ?? '') == '4' ? 'checked' : ''}}>Sering
                    </label>
                </div>
                <div class="input-group mb-2">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="PengaruhNegatif" value="5" {{($data->PengaruhNegatif ?? '') == '5' ? 'checked' : ''}}>Sangat sering
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="BanyakKerja">Saya memiliki terlalu banyak pekerjaan yang harus dilakukan dan/atau terlalu banyak yang tidak masuk akal tenggat waktunya.</label>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="BanyakKerja" value="1" {{($data->BanyakKerja ?? '') == '1' ? 'checked' : ''}}>Tidak pernah
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="BanyakKerja" value="2" {{($data->BanyakKerja ?? '') == '2' ? 'checked' : ''}}>Sangat jarang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="BanyakKerja" value="3" {{($data->BanyakKerja ?? '') == '3' ? 'checked' : ''}}>Kadang-kadang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="BanyakKerja" value="4" {{($data->BanyakKerja ?? '') == '4' ? 'checked' : ''}}>Sering
                    </label>
                </div>
                <div class="input-group mb-2">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="BanyakKerja" value="5" {{($data->BanyakKerja ?? '') == '5' ? 'checked' : ''}}>Sangat sering
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="SulitBeraspirasi">Saya merasa sulit untuk menyampaikan pendapat atau perasaan tentang kondisi kerja saya kepada atasan saya.</label>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="SulitBeraspirasi" value="1" {{($data->SulitBeraspirasi ?? '') == '1' ? 'checked' : ''}}>Tidak pernah
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="SulitBeraspirasi" value="2" {{($data->SulitBeraspirasi ?? '') == '2' ? 'checked' : ''}}>Sangat jarang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="SulitBeraspirasi" value="3" {{($data->SulitBeraspirasi ?? '') == '3' ? 'checked' : ''}}>Kadang-kadang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="SulitBeraspirasi" value="4" {{($data->SulitBeraspirasi ?? '') == '4' ? 'checked' : ''}}>Sering
                    </label>
                </div>
                <div class="input-group mb-2">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="SulitBeraspirasi" value="5" {{($data->SulitBeraspirasi ?? '') == '5' ? 'checked' : ''}}>Sangat sering
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="Tertekan">Saya merasa tekanan pekerjaan saya telah mengganggu keluarga atau kehidupan pribadi saya</label>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Tertekan" value="1" {{($data->Tertekan ?? '') == '1' ? 'checked' : ''}}>
                        Tidak pernah
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Tertekan" value="2" {{($data->Tertekan ?? '') == '2' ? 'checked' : ''}}>Sangat jarang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Tertekan" value="3" {{($data->Tertekan ?? '') == '3' ? 'checked' : ''}}>Kadang-kadang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Tertekan" value="4" {{($data->Tertekan ?? '') == '4' ? 'checked' : ''}}>Sering
                    </label>
                </div>
                <div class="input-group mb-2">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Tertekan" value="5" {{($data->Tertekan ?? '') == '5' ? 'checked' : ''}}>Sangat sering
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="Beraspirasi">Saya memiliki cukup kontrol atau keleluasaan memberikan masukan terhadap tugas pekerjaan saya</label>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Beraspirasi" value="5" {{($data->Beraspirasi ?? '') == '5' ? 'checked' : ''}}>Tidak pernah
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Beraspirasi" value="4" {{($data->Beraspirasi ?? '') == '4' ? 'checked' : ''}}>Sangat jarang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Beraspirasi" value="3" {{($data->Beraspirasi ?? '') == '3' ? 'checked' : ''}}>Kadang-kadang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Beraspirasi" value="2" {{($data->Beraspirasi ?? '') == '2' ? 'checked' : ''}}>Sering
                    </label>
                </div>
                <div class="input-group mb-2">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Beraspirasi" value="1" {{($data->Beraspirasi ?? '') == '1' ? 'checked' : ''}}>Sangat sering
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="Penghargaan">Saya menerima pengakuan atau penghargaan yang sesuai untuk performa kerja saya yang baik.</label>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Penghargaan" value="5" {{($data->Penghargaan ?? '') == '5' ? 'checked' : ''}}>Tidak pernah
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Penghargaan" value="4" {{($data->Penghargaan ?? '') == '4' ? 'checked' : ''}}>Sangat jarang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Penghargaan" value="3" {{($data->Penghargaan ?? '') == '3' ? 'checked' : ''}}>Kadang-kadang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Penghargaan" value="2" {{($data->Penghargaan ?? '') == '2' ? 'checked' : ''}}>Sering
                    </label>
                </div>
                <div class="input-group mb-2">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="Penghargaan" value="1" {{($data->Penghargaan ?? '') == '1' ? 'checked' : ''}}>Sangat sering
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="MaanfaatBakat">Saya dapat memanfaatkan keterampilan dan bakat saya sepenuhnya pada pekerjaan di perusahaan.</label>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="MaanfaatBakat" value="5" {{($data->MaanfaatBakat ?? '') == '5' ? 'checked' : ''}}>Tidak pernah
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="MaanfaatBakat" value="4" {{($data->MaanfaatBakat ?? '') == '4' ? 'checked' : ''}}>Sangat jarang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="MaanfaatBakat" value="3" {{($data->MaanfaatBakat ?? '') == '3' ? 'checked' : ''}}>Kadang-kadang
                    </label>
                </div>
                <div class="input-group">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="MaanfaatBakat" value="2" {{($data->MaanfaatBakat ?? '') == '2' ? 'checked' : ''}}>Sering
                    </label>
                </div>
                <div class="input-group mb-2">
                    <label class="m-2">
                        <input type="radio" class="m-2" name="MaanfaatBakat" value="1" {{($data->MaanfaatBakat ?? '') == '1' ? 'checked' : ''}}>Sangat sering
                    </label>
                </div>
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="submit" class="btn btn-default rounded">Selesai</button>
            </div>
        </form>
    </div>
</div>
@endsection