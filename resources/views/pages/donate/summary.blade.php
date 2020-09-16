
<div class="mb-4 mx-auto">
    <div class="flex flex-wrap">
        <div class="w-full w-3/4 px-4 sm:px-0">
        <i class="icofont icofont-clock-time text-yellow-500"></i>
        <span class="text-black truncate text-sm">Selesaikan pembayaran donasi sebelum <span class="font-bold">besok</span> jam <span class="font-bold">11:34, 16 Sep 2020</span></span>
        </div>
    </div>
</div>
<div class="card">
<form method="post" class="j-pro" id="j-pro">
{{ csrf_field() }}
    <div class="j-content">
        <div class="j-unit">
            <div class="text-center">
                    <p class="text-black text-sm">Total Pembayaran Donasi</p>
                    <h2 class="text-xl md:text-3xl font-bold text-black mb-3 mt-2">
                    @php
                        $format_rupiah = "Rp. " . number_format($donate->Amount,0,',','.');
                        echo $format_rupiah;
                    @endphp
                    <span class="text-yellow-600 font-bold"></span>&nbsp;
                    <a href="javascript:;" class="copy-amount text-blue-400 text-sm btn-copy font-bold" data-clipboard-text="10717">SALIN</a>
                </h2>
            </div>
            <div class="flex items-center bg-gray-700 shadow text-white text-xs sm:text-sm font-bold p-2" role="alert">
                <i class="icofont icofont-info-circle fill-current w-10 h-10 mr-2"></i>
                <p class="font-bold"><span class="text-yellow-500">PENTING</span> Mohon transfer tepat sampai 3 angka terakhir agar donasi Anda dapat diproses secara otomatis.</p>
            </div>
            <div class="text-center mt-2">
                <h3 class="text-black mb-1 text-sm">No Pembayaran</h3>
                <h2 class="font-semibold text-black mb-4">INV-200914440519</h2>
            </div>
            <div class="text-center mt-4">
                <span class="text-xs text-center italic text-gray-600">Menunggu pembayaran..</span>
                <div class="loader-wrapper text-center">
                    <div class="preloader3 loader-block">
                        <div class="circ1 loader-warning"></div>
                        <div class="circ2 loader-warning"></div>
                        <div class="circ3 loader-warning"></div>
                        <div class="circ4 loader-warning"></div>
                    </div>
                </div>
            </div>
            <div class="w-full my-6">
                <p class="mb-2 text-sm text-black">Silahkan Transfer ke:</p>
                <div class="border rounded border-custom bg-gray-custom p-2 mb-2 text-center flex">
                    <img class="w-20" src="{{ url('img/payments/'.$donate->AccountImage) }}" alt="icon Transfer BNI Syariah">
                    <div class="flex-grow text-lg font-semibold text-black block">{{ $donate->AccountNumber }}</div>
                    <div class="flex-grow"><a href="javascript:;" class="copy-amount text-blue-600 font-bold text-sm btn-copy" data-clipboard-text="1708201902">SALIN</a></div>
                </div>
                <span class="text-xs text-black">an. <span class="font-bold">{{ $donate->AccountName }}</span></span> - <span class="text-xs text-black">{{ $donate->BranchOffice }}</span>
            </div>
            <h3 class="text-black mb-1 text-sm">Rincian:</h3>
            <div class="table-price bg-gray-custom rounded border-custom text-gray-600 text-xs text-black">
                <div class="p-3 clear border-b-custom text-black">Jumlah donasi <span class="float-right font-bold" text-black="">
                    @php
                        $format_rupiah = "Rp. " . number_format($donate->Amount,0,',','.');
                        echo $format_rupiah;
                    @endphp
                </span></div>
                <div class="p-3 clear text-black">Kode unik <span class="float-right font-bold text-black">717</span></div>
            </div>
            <p class="text-xs italic color-gray mt-2">*Kode unik akan didonasikan</p>
                    
        </div>
    </div>
</form>
</div>
<div class="card">
<form method="post" class="j-pro" id="j-pro">
    <div class="j-content">
        <div class="j-unit">
            <div class="program-share"><h3 class="text-black text-center mb-4">Bantu <span class="font-bold">Badan Wakaf Al Quran</span> mencapai targetnya</h3>
                <a href="#" class="btn waves-effect waves-light btn-primary btn-block"><i class="icofont icofont-social-facebook"></i> Share ke facebook</a>
                <a href="#" class="btn waves-effect waves-light btn-success btn-block"><i class="icofont icofont-social-whatsapp"></i> Share ke WhatsApp</a>
            </div>
        </div>
    </div>
</form>
</div>
