@extends('templates.indexlanding')
@section('body')
<header id="header" class="bg-orange-900">
    <nav class="flex items-center px-4 md:px-16 py-4 text-center">
    <a href="{{ url('/') }}" class="mx-auto">
    <img class="h-6" src="{{ url('img/logo.png') }}"></a></nav>
</header>
<main class="main-content">
    <div class="flex items-center py-4">
        <div class="form-auth xs:px-2 mx-auto w-full max-w-xl text-gray-700" id="blokDonasi">
            <form method="POST" class="j-pro" id="j-pro">
                <input type="hidden" name="total" value="" id="nominal">
                <input type="hidden" name="type" value="" id="type">
                <input type="hidden" name="program" value="{{ $program->ID }}" id="program">
                <div id="NominalArea">
                    <div class="mb-4 mx-auto">
                        <div class="flex flex-wrap">
                            <div class="w-full w-3/4 px-4 sm:px-0">
                                <p class="text-gray-600 text-sm">Anda akan berdonasi untuk program:</p>
                                <h3 class="text-black font-semibold truncate">{{ $program->Name }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-none p-4 border-t border-b border-l-0 border-r-0 sm:border sm:border-r sm:border-l bg-white">
                        <div id="amount" class="card-body">
                            <h3 class="text-gray-800 font-bold mb-4">Nominal Donasi</h3>
                            @foreach($amount as $row)
                            <a href="javascript:getPayment({{$row->ID}});" data-nominal="{{$row->Amount}}" class="flex items-center justify-between border-custom p-2 sm:p-3 mb-4 fix-nominal hover:bg-blue-100 rounded">
                                <div class="">
                                    <span class="text-xs block">{{$row->Information}}</span>
                                    <span class="text-black font-semibold">
                                        @php
                                            $format_rupiah = "Rp " . number_format($row->Amount,0,',','.');
                                            echo $format_rupiah;
                                        @endphp
                                    </span>
                                </div>
                                <div>
                                    <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 14.25a.75.75 0 01-.578-1.23L10.282 9l-3.24-4.027a.75.75 0 01.113-1.058.75.75 0 011.095.113l3.623 4.5a.75.75 0 010 .952l-3.75 4.5a.75.75 0 01-.623.27z" fill="#000"></path>
                                    </svg>
                                </div>
                            </a>
                            @endforeach
                            <hr class="mb-6 mt-6">
                            <h3 class="text-gray-800 font-bold">Nominal Donasi Lainnya</h3>
                            <div class="form-group input-amount mt-2 flex items-center">
                                <span class="font-semibold text-lg text-black">Rp</span>
                                <input type="text" class="form-control bg-white text-right amount pl-10 h-57px text-black border-custom bg-gray-custom rounded" name="amount-first" id="amount-input" placeholder="0" data-mask="000.000.000.000.000" data-mask-reverse="true" autocomplete="off" maxlength="19">
                            </div>
                        </div>
                    </div>
                    <div class="py-6 px-4">
                        <button type="button" id="custom-submit" onclick="javascript:getPayment();" class="rounded bg-blue-500 hover:bg-blue-600 py-3 px-2 sm:py-6 sm:px-4 text-white font-bold text-center border-b-4 border-blue-700">Lanjutkan Donasi</button>
                    </div>
                </div>
            </form>
            <div id="blokMetodeBayar"></div>
        </div>
    </div>
</main>
<div id="popup" class="popper bg-green-200 fixed text-green-700 rounded border border-green-400 py-2 px-4" x-placement="top" style="position: absolute; display: none; will-change: transform; top: 0px; left: 0px;"><span>Berhasil disalin!</span></div>
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        $(document).delegate("#save","click",function(){
            var formData = new FormData($("#form-conf")[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:"{{ url('/donate/save') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#blokDonasi').html(data);
                },
                error: function(req, err){
                    console.log('my message' + err);
                }
            });
        });
    });

    function getPayment(q){
        if(q !== undefined) {
            var getClassFix = document.getElementsByClassName('fix-nominal');
            var amount      = getClassFix[q-1].getAttribute('data-nominal');
        } else {
            var amount      = document.getElementById('amount-input').value;
        }
        var program = document.getElementById('program').value;

        //ambil URL
        var url = window.location.toString();
        //ambil bagian parameternya
        url.match(/\?(.+)$/);
        var params = RegExp.$1;
        // pisahkan parameter URL ke associative array
        var params = params.split("&");
        var queryStringList = {};
        for(var i=0;i<params.length;i++)
        {   var tmp = params[i].split("=");
            queryStringList[tmp[0]] = unescape(tmp[1]);
        }
        // tampilkan isi associative array
        for(var i in queryStringList)
        {   
            var ref = queryStringList[i].replace(/[+]/g, " ");
        }
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"{{url('donate/payment-method')}}",
            data: {'program':program,'amount':amount,'ref':ref},
            type: 'POST',

            success: function(data){
                $('#blokDonasi').html(data);
            }, 
            error: function(req, err){
                console.log('my message' + err);
            }
        });
    }
    function Confirmation(payID){
        var program   = document.getElementById("program").value;
        var amount    = document.getElementById("amount").value;
        var ref       = document.getElementById("ref").value;
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"{{url('donate/confirmation')}}",
            data: {'program':program,'payID':payID,'amount':amount,'ref':ref},
            type: 'POST',

            success: function(data){
                $('#blokDonasi').html(data);
            }, error: function(req, err){ console.log('my message' + err); }
        });
    }

    var rupiah = document.getElementById('amount-input');
    rupiah.addEventListener('keyup', function(e){
        rupiah.value = formatRupiah(this.value);
    });

    var rupiahLast = document.getElementById('amount-input-last');
    rupiahLast.addEventListener('keyup', function(e){
        rupiahLast.value = formatRupiah(this.value);
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return rupiah;
    }

    var btnCopy = new ClipboardJS('.btn-copy');
    var popup = $('#popup');
    var popper = new Popper(btnCopy, popup,{placement: 'top',});
    popup.hide();
    btnCopy.on('success', function(e){
        popup.show();
        setTimeout(function(){popup.hide(); }, 2000);
        e.clearSelection();
    });
    /* function getStatus(){
        $.ajax({ url: "https://www.amalsholeh.com/status/GOMd536ZXoD7",})
        .done(function(data){if (data.status == 'paid'){// location.reload();
            window.location.replace(data.redirect);
        }});
    };
    setInterval(function(){ 
        getStatus(); 
    }, 5000); */
</script>
@endsection