@extends('templates.index')
@include('templates.komponen.j-pro')
@section('body')
<div id="pcoded" class="pcoded">
    <div class="pcoded-container navbar-wrapper">
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <header id="header" class="bg-header">
                                        <nav class="flex items-center px-2 py-2 text-center">
                                            <a href="/" class="mx-auto">
                                                <img class="h-6" src="{{ url('img/logo.png') }}">
                                            </a>
                                        </nav>
                                    </header>
                                    <div class="j-wrapper j-wrapper-550" id="blokDonasi">
                                        <div class="mb-4 mx-auto">
                                            <div class="flex flex-wrap">
                                                <div class="w-full w-3/4 px-4 sm:px-0">
                                                    <p class="text-gray-600 text-sm">Anda akan berdonasi untuk program:</p>
                                                    <h3 class="text-black font-semibold truncate">Gotong Royong Bangun Pesantren Hafizh Al Quran</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="j-pro/php/action.php" method="post" class="j-pro" id="j-pro" novalidate>
                                            <div class="j-content">
                                                <div class="j-unit">
                                                    <h3 class="text-gray-800 font-bold mb-4">Nominal Donasi</h3>
                                                    @foreach($amount as $row)
                                                        <div class="j-input">
                                                            <a href="javascript:getPayment({{$row->ID}});" data-nominal="{{$row->Amount}}" class="flex items-center justify-between border-custom p-2 sm:p-3 mb-3 fix-nominal hover:bg-blue-100 rounded">
                                                                <div class="">
                                                                    <span class="text-xs block text-gray-600">{{$row->Information}}</span>
                                                                    <span class="text-black font-semibold text-lg" id="fix-nominal">
                                                                        @php
                                                                            $format_rupiah = "Rp " . number_format($row->Amount,0,',','.');
                                                                            echo $format_rupiah;
                                                                        @endphp
                                                                    </span>
                                                                </div>
                                                                <div>
                                                                    <svg width="18" height="14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M7.5 14.25a.75.75 0 01-.578-1.23L10.282 9l-3.24-4.027a.75.75 0 01.113-1.058.75.75 0 011.095.113l3.623 4.5a.75.75 0 010 .952l-3.75 4.5a.75.75 0 01-.623.27z" fill="#000"></path>
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                    <hr class="mb-6 mt-6">
                                                    <h3 class="text-gray-800 font-bold">Nominal Donasi Lainnya</h3>
                                                    <div class="form-group input-amount mt-2 flex items-center">
                                                        <span class="font-semibold text-lg text-black">Rp</span>
                                                        <input type="text" class="form-control bg-white text-right amount pl-10 h-57px text-black border-custom bg-gray-custom rounded" name="amount-first" id="amount-input" placeholder="0" data-mask="000.000.000.000.000" data-mask-reverse="true" autocomplete="off" maxlength="19">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end /.content -->
                                            <div class="j-footer">
                                                <button type="button" id="custom-submit" onclick="javascript:getPayment();" class="rounded btn-primary bg-blue-500 hover:bg-blue-600 py-3 px-2 sm:py-6 sm:px-4 text-white font-bold text-center border-b-4 border-blue-700 btn-block">Lanjutkan Donasi</button>
                                            </div>
                                            <!-- end /.footer -->
                                        </form>
                                        <div id="blokMetodeBayar"></div>
                                    </div>
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
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"{{url('donate/payment-method')}}",
            data: {'amount':amount},
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
        var amount    = document.getElementById("amount").value;
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"{{url('donate/confirmation')}}",
            data: {'payID':payID,'amount':amount},
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
</script>
@endsection
