
<div class="mb-4 mx-auto">
    <div class="flex flex-wrap">
        <div class="w-full w-3/4 px-4 sm:px-0">
            <p class="text-gray-600 text-sm">Anda akan berdonasi untuk program:</p>
            <h3 class="text-black font-semibold truncate">Gotong Royong Bangun Pesantren Hafizh Al Quran</h3>
        </div>
    </div>
</div>
<form action="<?php echo e(url('donate/save')); ?>" method="post" class="j-pro" id="j-pro">
<?php echo e(csrf_field()); ?>

    <div class="j-content">
        <div class="j-unit">
            <p class="text-black mb-2 text-xs">Nominal Donasi <em class="text-red-500">*</em></p>
            <div class="form-group input-amount mt-2">
                <span class="font-semibold text-lg text-black mt-1">Rp</span>
                <input type="text" class="form-control bg-orange-100 focus:bg-white text-right amount pl-10 h-57px text-black border-orange-200 focus:border-orange-600" name="amount" id="amount-input-last" placeholder="0" data-mask="000.000.000.000.000" data-mask-reverse="true" autocomplete="off" maxlength="19" required="required" value="<?php echo e($amount); ?>">
            </div>
            <div class="form-group mt-6 select2-method">
                <p class="text-black mb-2 text-xs">Metode Pembayaran <em class="text-red-500">*</em></p>
                <div class="px-1 py-3 border-custom block bg-orange-100 rounded border-orange-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="mr-4">
                                <img src="<?php echo e($payImage); ?>" id="image-transfer" class="img-flag inline w-16 order border-gray-300 p-1">
                            </div>
                            <h3 class="text-xs sm:text-base text-black flex-1" id="name-transfer"><?php echo e($payLabel); ?></h3>
                        </div>
                        <a href="javascript:;" onclick="BackTo('payment')" class="rounded-full py-2 px-4 text-white bg-orange-600">Ubah 
                            <svg class="inline-block" width="16" height="17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 11.168a.667.667 0 01-.427-.154l-4-3.333a.668.668 0 01.853-1.027L8 9.641l3.573-2.88a.667.667 0 01.94.1.666.666 0 01-.093.973l-4 3.22a.667.667 0 01-.42.114z" fill="#fff"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="donate-form-login">
                <p class="text-black text-sm text-center mb-6"><a href="#" class="text-blue-500 underline">Login</a> atau lengkapi data berikut</p>
                <div class="form-group">
                    <p class="text-black mb-2 text-xs">Nama Lengkap <em class="text-red-500">*</em></p>
                    <input type="text" class="form-control focus:bg-white text-black border-orange-200 focus:border-orange-600 text-sm h-57px bg-orange-100 placeholder-gray-500" name="name" placeholder="Nama lengkap" autocomplete="off" required>
                    <div class="mt-4 mb-6 text-gray-500">
                        <label class="inline-flex items-center">
                            <input name="anonymous" type="checkbox" class="form-checkbox">
                            <span class="ml-2 text-gray-600 text-xs">Sembunyikan nama saya (Hamba Allah)</span>
                        </label>
                    </div>
                </div>
                <div class="form-group mb-6">
                    <p class="text-black mb-2 text-xs">No. Handphone <em class="text-red-500">*</em></p>
                    <input type="number" class="form-control focus:bg-white text-black border-orange-200 focus:border-orange-600 text-sm h-57px bg-orange-100 placeholder-gray-500" name="phone" placeholder="Tuliskan No. Handphone aktif anda" autocomplete="off" required>
                </div>
                <div class="form-group mb-6">
                    <p class="text-black mb-2 text-xs">Email <em class="text-xs color-gray italic">(Opsional)</em></p>
                    <span class="text-xs italic text-gray-600 block mb-2">Kirim <span class="text-gray-800">bukti donasi dan kabar perkembangan program</span> melalui email saya.</span>
                    <input type="email" class="form-control focus:bg-white text-black border-orange-200 focus:border-orange-600 text-sm h-57px bg-orange-100 placeholder-gray-500" name="email" placeholder="Tuliskan alamat email aktif anda" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="">
                </div>
            </div>
            <div class="form-group">
                <p class="text-black mb-2 text-xs">Pesan dan Doa <em class="text-xs color-gray italic">(Opsional)</em></p>
                <textarea name="message" id="message" cols="30" rows="4" class="form-control focus:bg-white text-black border-orange-200 focus:border-orange-600 text-sm bg-orange-100 placeholder-gray-500" placeholder="Tulis pesan dan doa untuk program ini" autocomplete="off"></textarea>
            </div>
        </div>
    </div>
    <div class="j-footer">
        <button type="submit" id="custom-submit" class="rounded btn-primary bg-blue-500 hover:bg-blue-600 py-3 px-2 sm:py-6 sm:px-4 text-white font-bold text-center border-b-4 border-blue-700 btn-block">Lanjutkan Donasi</button>
    </div>
</form>
