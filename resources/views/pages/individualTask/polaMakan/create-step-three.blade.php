@extends('templates.mobile.pageslayout')

@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ $judul }}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('polamakan.create.step.three.post') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda, berapa kali anda mengkonsumsi minuman dalam kemasan yang manis? Contoh: <b>kopi atau teh dalam botol atau kotak, juice, susu dalam kotak, dll</b></label>
                <div class="input-group mb-2">
                    <input type="number" id="MinumanKemasanHari" name="MinumanKemasanHari" class="form-control" value="{{ $data->MinumanKemasanHari ?? '' }}" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/hari</span>
                    </div>
                </div>
                <div class="input-group">
                    <input type="number" id="MinumanKemasanMinggu" name="MinumanKemasanMinggu" class="form-control" value="{{ $data->MinumanKemasanMinggu ?? '' }}" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali/minggu</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda mengonsumsi cemilan asin?</label>
                <div class="input-group">
                    <input type="number" id="CemilanAsin" name="CemilanAsin" class="form-control" value="{{ $data->CemilanAsin ?? '' }}" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa rata-rata pangan digoreng yang Anda konsumsi dalam sehari baik di menu utama atau cemilan?</label>
                <div class="input-group">
                    <input type="number" id="Gorengan" name="Gorengan" class="form-control" value="{{ $data->Gorengan ?? '' }}" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">potong atau porsi/hari</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Dalam satu minggu terakhir, berapa kali Anda sarapan pagi?</label>
                <div class="input-group">
                    <input type="number" id="Sarapan" name="Sarapan" class="form-control" value="{{ $data->Sarapan ?? '' }}" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">kali</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Dalam seminggu terakhir, berapa rata-rata air putih yang Anda konsumsi?</label>
                <div class="mx-auto">
                    <img src="{{ url('img/assets/air-195ml.jpg') }}" alt="Air Putih" class="mw-100" />
                </div>
                <div class="input-group">
                    <input type="number" id="AirPutih" name="AirPutih" class="form-control" value="{{ $data->AirPutih ?? '' }}" autocomplete="off" required>
                    <div class="input-group-append">
                        <span class="input-group-text">gelas/hari</span>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label>Apakah Anda membaca label di kemasan pangan sebelum membeli/mengonsumsi?</label>
                {!! Form::select('LabelKemasan', ['' => '', 'Ya' => 'Ya', 'Tidak' => 'Tidak'], $data->LabelKemasan ?? '', ['class' => 'form-control', 'id' => 'LabelKemasan', 'required']); !!}
            </div>
            <div class="col-auto align-self-center  pl-0">
                <button type="button" onclick="window.location='{{ route("polamakan.create.step.two") }}'" class="btn btn-danger rounded">Kembali</button>
                <button type="submit" class="btn btn-default rounded">Selanjutnya</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        //Menampilkan detail pertanyaan jika merokok
        if ($('#Rokok option').filter(':selected').text() === "Ya") {
            $("#rokokdtl").show();
            $('.dtl').prop('required', true);
        } else {
            $("#rokokdtl").hide();
            $(".dtl").val("");
        }
        $("#Rokok").change(function() {
            if ($(this).val() == "Ya") {
                $("#rokokdtl").show();
                $('.dtl').prop('required', true);
            } else {
                $("#rokokdtl").hide();
                $('.dtl').prop('required', false);
                $(".dtl").val("");
            }
        });

        //Pilih salah satu opsi jika value tidak sama dengan opsi
        var isi = "{{!empty($data->TempatRokok) ? $data->TempatRokok : ''}}";
        switch (isi) {
            case "":
                opt = "";
                break;
            case "Di rumah":
                opt = "Di rumah";
                break;
            case "Di tempat kerja":
                opt = "Di tempat kerja";
                break;
            default:
                opt = "Lainnya";
        }
        if (opt === "Lainnya") {
            $('#TempatRokok option[value=Lainnya]').attr('selected', 'selected');
        } else {
            $('#TempatRokok option[value=opt]').attr('selected', 'selected');
        }

        //Menampilkan detail pertanyaan jika tempat merokok lainnya
        if ($('#TempatRokok option').filter(':selected').text() === "Lainnya") {
            $(".dtl2").show();
            $('#TempatRokokLain').prop('required', true);
            $('#TempatRokokLain').attr('name', 'TempatRokok');
            $('#TempatRokok').prop('required', false);
        } else {
            $(".dtl2").hide();
            $('#TempatRokokLain').attr('name', '');
            $("#TempatRokokLain").val("");
        }
        $("#TempatRokok").change(function() {
            if ($(this).val() == "Lainnya") {
                $(".dtl2").show();
                $('#TempatRokokLain').prop('required', true);
                $('#TempatRokokLain').attr('name', 'TempatRokok');
                $('#TempatRokok').prop('required', false);
                $('#TempatRokok').attr('name', '');
            } else {
                $(".dtl2").hide();
                $('#TempatRokokLain').prop('required', false);
                $('#TempatRokokLain').attr('name', '');
                $("#TempatRokokLain").val("");
            }
        });
    });
</script>
@endsection