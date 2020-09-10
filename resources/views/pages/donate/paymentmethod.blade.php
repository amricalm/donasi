<div class="mb-4 mx-auto">
    <div class="flex flex-wrap">
        <div class="w-full w-3/4 px-4 sm:px-0">
            <h3 class="text-black font-semibold truncate">Transfer Bank (Transaksi diverifikasi manual 1x24jam)</h3>
        </div>
    </div>
</div>
<form class="j-pro" method="post" id="pay">
    <div class="j-content">
        <div class="j-unit">
            <div class="card mb-6 card-payment p-0">
                <input type="hidden" name="nominal" value="{{ $nominal }}"/>
                <a href="javascript:Confirmation('bsm');" class="p-3 pb-0 block hover:bg-blue-100 select-type" data-type="transfer-mandiriBisnisSyariah" data-label="Transfer Mandiri Syariah" data-image="{{ url('img/payments/mandiri-syariah.png') }}">
                    <div class="flex border-b-custom pb-2 items-center justify-between">
                        <div class="flex">
                            <div class="mr-4">
                                <img src="{{ url('img/payments/mandiri-syariah.png') }}" class="img-flag inline w-16 order border-gray-300 p-1">
                            </div>
                            <h3 class="text-sm text-black">Transfer Mandiri Syariah</h3>
                        </div>
                        <svg class="icon-check hidden transfer-mandiriSyariah" width="19" height="19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.806 14.25a.794.794 0 01-.578-.254L3.38 9.903A.793.793 0 014.536 8.82l3.262 3.475 6.658-7.283a.79.79 0 111.171 1.06l-7.235 7.917a.791.791 0 01-.578.262h-.008z" fill="#0084FF" stroke="#0084FF"></path>
                        </svg>
                    </div>
                </a>
                <a href="javascript:Confirmation('bnis');" class="p-3 pb-0 block hover:bg-blue-100 select-type" data-type="transfer-bniBisnisSyariah" data-label="Transfer BNI Syariah" data-image="{{ url('img/payments/bni-syariah.png') }}">
                    <div class="flex border-b-custom pb-2 items-center justify-between">
                        <div class="flex">
                            <div class="mr-4"><img src="{{ url('img/payments/bni-syariah.png') }}" class="img-flag inline w-16 order border-gray-300 p-1"></div>
                            <h3 class="text-sm text-black">Transfer BNI Syariah</h3>
                        </div>
                        <svg class="icon-check hidden transfer-bniBisnisSyariah" width="19" height="19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.806 14.25a.794.794 0 01-.578-.254L3.38 9.903A.793.793 0 014.536 8.82l3.262 3.475 6.658-7.283a.79.79 0 111.171 1.06l-7.235 7.917a.791.791 0 01-.578.262h-.008z" fill="#0084FF" stroke="#0084FF"></path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</form>