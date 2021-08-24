<div class="form-auth xs:px-2 mx-auto w-full max-w-xl text-gray-700">
    <div class="p-2 text-center text-xs text-black mb-2">
        <svg class="inline-block mr-2" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 0C4.037 0 0 4.037 0 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9zm3.577 12.952a.748.748 0 01-1.06 0L8.47 9.905a.747.747 0 01-.22-.53V4.5a.75.75 0 111.5 0v4.565l2.827 2.827a.75.75 0 010 1.06z" fill="#FF7600"></path>
        </svg> Selesaikan pembayaran donasi sebelum <b>besok</b> jam <b>{{ $MaxConfDate }}</b>
    </div>
    <div class="card mb-4">
        <div class="flex flex-wrap">
        <form method="post" class="j-pro" id="j-pro">
        {{ csrf_field() }}
            <div class="w-full">
                <div class="text-center">
                    <p class="text-black text-sm">Total Pembayaran Donasi</p>
                    <h2 class="text-xl md:text-3xl font-bold text-black mb-3 mt-2">
                        @php
                            $format_rupiah = "Rp ".number_format($donate->AmountUnique,0,',','.');
                            echo $format_rupiah;
                        @endphp    
                        &nbsp;<a href="javascript:();" class="copy-amount text-blue-400 text-sm btn-copy" data-clipboard-text="{{ $donate->AmountUnique }}">SALIN</a>
                    </h2>
                </div>
                <div class="flex items-center bg-gray-700 shadow text-white text-xs sm:text-sm font-bold p-2" role="alert">
                    <svg class="fill-current w-10 h-10 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"></path>
                    </svg>
                    <p><strong class="text-yellow-500">PENTING</strong> Mohon transfer tepat sampai 3 angka terakhir agar donasi Anda dapat diproses secara otomatis.</p>
                </div>
                <div class="text-center mt-2">
                    <h3 class="text-black mb-1 text-sm">No Pembayaran</h3>
                    <h2 class="text-sm font-semibold text-black mb-4">{{ $donate->Invoice }}</h2>
                </div>
                <div class="text-center mt-4">
                    <span class="text-xs text-center italic text-gray-600">Menunggu pembayaran..</span>
                    <div class="loader-wrapper text-center">
                        <div class="lds-ellipsis">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <p class="mb-2 text-sm">Silahkan Transfer ke:</p>
                    <div class="border rounded border-custom bg-gray-custom p-2 mb-2 text-center flex">
                        <div class="flex-none">
                            <img class="w-20" src="{{ url('img/payments/'.$donate->AccountImage) }}" alt="icon bank">
                        </div>
                        <div class="flex-grow">
                            <span class="text-sm font-semibold text-black block">{{ $donate->AccountNumber }}</span>
                        </div>
                        <div class="flex-grow">
                            <a href="javascript:();" class="copy-amount text-blue-600 font-bold text-sm btn-copy" data-clipboard-text="{{ $donate->AccountNumber }}">SALIN</a>
                        </div>
                    </div>
                    <span class="text-xs text-black">an. <strong>{{ $donate->AccountName }}</strong></span> - <span class="text-xs text-black">{{ $donate->BranchOffice }}</span>
                </div>
                <h3 class="text-black mb-1 text-sm">Rincian:</h3>
                <div class="table-price bg-gray-custom rounded border-custom text-gray-600 text-xs text-black">
                    <div class="p-4 clear border-b-custom text-black">Jumlah donasi 
                        <span class="float-right font-semibold" text-black="">
                            @php
                                $format_rupiah = "Rp. " . number_format($donate->Amount,0,',','.');
                                echo $format_rupiah;
                            @endphp
                        </span>
                    </div>
                    <div class="p-4 clear text-black">Kode unik 
                        <span class="float-right font-bold text-black">{{ $donate->Uniques }}</span>
                    </div>
                </div>
                <p class="text-xs italic color-gray mt-2">*Kode unik akan didonasikan</p>
            </div>
        </form>
        </div>
    </div>
    <div class="card mb-4">
        <div class="flex flex-wrap">
            <div class="w-full">
                <div class="program-share">
                    <h3 class="text-black text-center mb-4">Bantu <strong>Yayasan Mafatih Global</strong> mencapai targetnya</h3>
                    <a class="bg-blue-800 hover:bg-blue-900 text-white font-bold block text-center p-3 rounded share-link-popup" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}?ref=Exm02"><svg class="inline-block mr-1" width="17" height="17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.042 2.48a.354.354 0 00-.354-.355H9.916a3.379 3.379 0 00-3.542 3.188v1.912h-1.77a.354.354 0 00-.355.354v1.842a.354.354 0 00.354.354h1.771v4.746a.354.354 0 00.354.354h2.125a.354.354 0 00.354-.354V9.775h1.856a.354.354 0 00.347-.262l.51-1.841a.355.355 0 00-.34-.447H9.208V5.313a.708.708 0 01.709-.638h1.77a.354.354 0 00.355-.354V2.48z" fill="#fff"></path></svg> Share ke facebook
                    </a>
                    <a class="bg-green-600 hover:bg-green-700 text-white font-bold block text-center p-3 rounded mt-2 share-link-popup" href="https://api.whatsapp.com/send?text=Gotong%20Royong%20Bangun%20Pesantren%20Hafizh%20Al%20Quran%0A%0ASisihkan%20Harta%20Anda%20Sebesar%20Rp.%2060.000%20per%20Orang%2Fbulan%2C%20Insya%20Allah%20akan%20Mampu%20Wujudkan%20Pesantren%20Wakaf%20Penghafal%20Al%20Quran%20di%20Wanayasa.%0A%0A{{ url('/') }}?ref=Exm02"><svg class="inline-block mr-1" width="14" height="14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.002 0h-.004C3.138 0 0 3.14 0 7c0 1.531.493 2.95 1.333 4.103l-.873 2.6 2.69-.86A6.94 6.94 0 007.003 14C10.862 14 14 10.86 14 7s-3.139-7-6.998-7z" fill="#fff"></path><path d="M11.075 9.884c-.169.477-.84.873-1.374.988-.366.078-.843.14-2.452-.527-2.057-.852-3.381-2.942-3.485-3.078-.099-.135-.83-1.107-.83-2.111 0-1.005.51-1.494.715-1.704.169-.172.448-.25.716-.25.086 0 .164.004.234.007.206.009.309.021.445.346.168.407.58 1.411.629 1.514.05.104.1.244.03.38-.066.14-.124.201-.227.32-.103.12-.201.21-.305.338-.094.111-.2.23-.082.436.12.201.53.872 1.136 1.411.781.696 1.415.918 1.641 1.013.17.07.37.053.494-.078.156-.17.35-.45.547-.725.14-.198.316-.222.502-.152.189.066 1.19.56 1.395.662.205.104.341.153.39.24.05.086.05.493-.119.97z" fill="#38A169"></path></svg> Share ke WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>