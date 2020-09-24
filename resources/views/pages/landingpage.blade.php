
@extends('templates.indexlanding')
@section('body')
<body class="detail-program">
    <div class="backdrop hidden"></div>
    <header id="header" class="bg-orange-900 sticky top-0 px-4 ">
        <nav class="container w-container flex items-center justify-between flex-wrap mx-auto py-4">
        <div class="logo-header flex items-center flex-shrink-0 text-white md:mr-6">
        <a href="URL::to('/');">
        <img class="h-6 md:h-10" src="{{ url('img/logo.png') }}" alt="Logo"></a>
        </div>
        <div class="md:pl-5 md:pr-5 flex-1 search">
            <div class="relative text-right">
                <button type="button" class="button-search px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none">
                    <rect width="100%" height="100%"></rect><g class="currentLayer">
                    <path d="M13.533 12.467l-2.55-2.542A5.94 5.94 0 0012.25 6.25a6 6 0 10-6 6 5.94 5.94 0 003.675-1.268l2.542 2.55a.75.75 0 001.23-.244.751.751 0 00-.164-.82zM1.75 6.25a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0z" fill="#fff"></path></g></svg>
                </button>
                <div class="relative search-responsive text-left">
                    <div class="absolute top-0 left-0 ml-4 mt-3">
                        <svg width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.533 14.467l-2.55-2.542A5.94 5.94 0 0014.25 8.25a6 6 0 10-6 6 5.94 5.94 0 003.675-1.268l2.542 2.55a.75.75 0 001.23-.244.751.751 0 00-.164-.82zM3.75 8.25a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0z" fill="#AAA"></path></svg>
                    </div>
                    <input type="text" id="search-bar" placeholder="Cari nama program" class="pl-10 w-full h-10 rounded pr-10 md:pr-4 focus:outline-none focus:rounded-b-none search-input-header" autocomplete="off">
                    <button type="button" class="closeSearch outline-none md:hidden h-10 w-10 absolute top-0 right-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="18px" height="18px">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
                    </button>
                </div>   
            </div>
        </div>
        <div class="menuToggle block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-orange-200 border-orange-200 hover:text-white hover:border-white" id="MenuToggle">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
            </button>
        </div>
        <div class="hidden lg:text-right lg:block lg:flex lg:items-center w-full lg:w-auto" id="MenuContent">
            <div class="lg:flex-grow md:mx-6"></div>
            <div>
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border-2 rounded text-white border-white hover:border-transparent hover:text-orange-900 hover:bg-white mt-4 lg:mt-0">Login / Register</a>
            </div>
        </div></nav>
</header>
<main class="main-content">
    <header id="header-program-title" class="">
        <div class="container w-container flex items-center justify-between flex-wrap px-4 mx-auto py-4">
            <div class="back-header flex items-center flex-shrink-0 text-white md:mr-6">
                <a href="file:///C:/">
                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 11H7.14l3.63-4.36a1.001 1.001 0 00-1.54-1.28l-5 6a1.191 1.191 0 00-.09.15c0 .05 0 .08-.07.13A1 1 0 004 12a1 1 0 00.07.36c0 .05 0 .08.07.13.026.051.056.102.09.15l5 6A1 1 0 0010 19a1 1 0 00.77-1.64L7.14 13H19a1 1 0 000-2z"></path></svg></a>
            </div>
            <div class="title-program-header">Gotong Royong Bangun Pesantren Hafizh Al Quran</div>
        </div>
    </header>
<div class="bg-white">
    <div class="container max-w-56rem px-1 pb-6 px-4 md:pb-10 md:pt-10 mx-auto"><figure class="program-cover progressive mb-5 overflow-hidden">
        <img src="{{ url('img/banner/banner-qoryah-quran.jpg') }}" data-src="{{ url('img/banner/banner-qoryah-quran.jpg') }}?ar=16:9&amp;w=720&amp;fit=crop&amp;auto=format,compress" alt="Gotong Royong Bangun Pesantren Hafizh Al Quran"><noscript>
        <img src="{{ url('img/banner/banner-qoryah-quran.jpg') }}?ar=16:9&amp;w=720&amp;fit=crop&amp;auto=format,compress" alt="Cover Gotong Royong Bangun Pesantren Hafizh Al Quran"/></noscript></figure><h1 class="text-lg sm:text-xl md:text-3xl font-bold text-gray-800 leading-normal">Gotong Royong Bangun Pesantren Hafizh Al Quran</h1>
        <div class="program-head">
            <div class="md:flex md:-mx-4 items-center">
                <div class="md:w-3/4 md:px-4">
                    <p class="program-headline text-gray-600 py-2 text-xs sm:text-sm md:text-xl">Sisihkan Harta Anda Sebesar Rp. 60.000 per Orang/bulan, Insya Allah akan Mampu Wujudkan Pesantren Wakaf Penghafal Al Quran di Wanayasa.</p>
                </div>
            </div>
            <div class="w-full py-2 md:py-4">
                <div class="toggleDonation ">
                    <div class="program-collected flex text-xs sm:text-md md:text-2xl">
                        <div class="program-collected_amount inline-block md:block font-bold xs:leading-none text-orange-900 md:text-orange-900 mr-5">Rp 372.108.449
                        </div><span class="text-gray-800"> donasi terus dikumpul
                        </span>
                    </div>
                    <div class="program-collected my-4">
                        <div class="program-collected__bar bg-gray-custom w-full h-2 rounded overflow-hidden">
                            <div class="program-collected__progress bg-orange-900 h-2 max-w-full" style="width: 100%"></div>
                        </div>
                        <div class="p-card__count mt-1">
                            <div class="p-card__countitem">
                                <div class="p-card__stats"><span class="text-xs md:text-xl color-gray">Donasi</span><span class="font-bold text-black text-sm md:text-3xl">3.209</span></div>
                            </div>
                            <div class="p-card__countitem text-right">
                                <div class="p-card__stats"><span class="text-xs md:text-xl color-gray">Sisa hari</span><span class=" text-black text-sm md:text-3xl font-bold">∞</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cta-donate" class="program-cta py-2 mt-2">
                    <a class="block rounded bg-blue-500 hover:bg-blue-600 py-4 md:py-8 text-white font-bold text-center text-sm md:text-2xl border-b-4 border-blue-700 uppercase pulse" href="{{ url('/donate') }}">Donasi Sekarang</a>
                </div>
                <div class="program-author rounded mt-6 border-custom bg-gray-100 p-4"><h3 class="text-sm text-gray-700 mb-2">Pemilik Program</h3>
                    <div class="flex items-center">
                        <img class="w-8 h-8 md:w-12 md:h-12 mr-4" src="{{ asset('js/landingpage/xfmMTejjvOEZpVNuEseYF4DwX5ZFatGxuXAx5sKS.png') }}" alt="Avatar Program Badan Wakaf Al Quran">
                        <div>
                            <p class="text-gray-900 leading-none font-bold mb-1">Badan Wakaf Al Quran 
                            <svg class="inline-block ml-1" width="13" height="13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.5 0A6.507 6.507 0 000 6.5C0 10.084 2.916 13 6.5 13S13 10.084 13 6.5 10.084 0 6.5 0z" fill="#1394f2"></path>
                            <path d="M9.588 4.814l-3.596 3.48a.561.561 0 01-.39.156.561.561 0 01-.392-.157l-1.798-1.74a.522.522 0 010-.756.566.566 0 01.782 0l1.407 1.361 3.205-3.1a.566.566 0 01.782 0 .523.523 0 010 .756z" fill="#FAFAFA"></path></svg></p>
                            <p class="text-gray-600 text-sm">Akun terverifikasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-page">
    <div class="bg-white z-10 md:sticky md:top-0 mt-5 md:mt-0 shadow">    
        <div class="md:container max-w-56rem md:px-4 mx-auto">
            <div class="flex">
                <div class="w-1/2 hidden md:flex">
                    <ul class="nav nav-tabs list-none text-gray-600 flex">
                        <li class="flex items-center md:mr-4 active">
                            <a href="#tab-description">Keterangan</a>
                        </li>
                        <li class="flex items-center md:mr-4">
                            <a href="#tab-fundraiser">Fundraiser</a>
                        </li>
                        <li class="flex items-center md:mr-4">
                            <a href="#tab-news">Berita</a>
                        </li>
                        <li class="flex items-center md:mr-4">
                            <a href="#tab-donatur">Donatur</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 text-right px-4 py-4 md:pt-4 md:px-0 mb:pb-0 sm:flex md:block">
                    <div class="w-full sm:w-1/2 text-left md:hidden">
                        <span class="inline-block md:text-xl text-sm">Jadi <strong>#JembatanKebaikan</strong> dengan menyebarkan program ini.</span>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-auto md:inline-block">
                        <a class="border border-blue-800 block sm:float-right md:float-none md:px-4 mr-2 mt-1 px-2 py-2 rounded share-link-popup text-blue-800 text-center text-xs md:text-sm" href="https://www.facebook.com/sharer/sharer.php?u=https:{{ url('/') }}">
                        <svg class="inline-block" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.333 2.334A.333.333 0 0011 2.001H9.333a3.18 3.18 0 00-3.333 3v1.8H4.333A.333.333 0 004 7.134v1.734a.333.333 0 00.333.333H6v4.467a.333.333 0 00.333.333h2a.333.333 0 00.334-.333V9.2h1.746a.333.333 0 00.327-.247l.48-1.733a.333.333 0 00-.32-.42H8.667v-1.8a.667.667 0 01.666-.6H11a.333.333 0 00.333-.333V2.334z" fill="#4267B2"></path></svg> Share ke facebook</a>
                    </div>
                    <a class="rounded bg-blue-500 hover:bg-blue-600 py-2 px-6 text-white text-center text-sm hidden md:inline-block pulse" href="{{ url('/donate') }}">Donasi Sekarang</a>
                </div>
</div>
    </div>
</div>

<div class="md:bg-gray-custom mt-4 md:mt-0">
<div class="md:container max-w-56rem md:px-4 md:py-10 mx-auto">   
<div class="program-content flex flex-wrap entry">
<div class="w-full">
    <div class="tab-content">
<div id="tab-description" class="tab-pane active">
                        <h3 class="md:hidden mb-5 text-xl font-bold">Keterangan</h3>
<div class="content-desc text-gray-700 text-sm sm:text-base">
<p>Seorang santri terlihat berdiri di selasar bangunan berbilik, tatapan matanya mengarah pada petak-petak sawah dan kebun terhampar di depannya. Lisannya tak henti melantunkan ayat-ayat Alquran. Ia adalah salah satu santri yang memilih Al Quran sebagai sahabat hidupnya.&nbsp;</p>
<p>Banyak lagi santri lainnya yang juga menjadikan Al Quran sebagai sahabatnya, mereka berjuang menghafal Al Quran di bawah bimbingan Seorang Hafifz bersanad di Pesantren Qoryah Quran Wanayasa. Mereka disiapkan menjadi pemimpin qurani dalam program <strong><em>“One Hafidz for One Masjid”</em></strong>. Mereka diharapkan menjadi solusi akan sulitnya mendapatkan seorang imam masjid yang memiliki bacaan Al Quran berkualitas (bersanad).&nbsp;</p><figure>
<img src="{{ asset('js/landingpage/Z5nFpx3h8WKHE94oj0Nk1KgMXgZ7FCCixZSZ6e1x.jpeg') }}"></figure>
<p>Untuk mewujudkan harapan ini, Qoryah Quran Wanayasa berpegang pada prinsip <strong><em>Ta'a</em></strong><strong><em>w</em></strong><strong><em>wun</em></strong> dan <strong><em>Tabar</em></strong><strong><em>r</em></strong><strong><em>uk</em></strong>. Ta’awwun adalah sinergi berbagai pihak, termasuk orang tua, pesantren dan masyarakat.. Sedangkan "Tabarruk" adalah tradisi pesantren mencari keberkahan kepada Allah SWT melalui aktivitas kebaikan termasuk ber-infaq dan ber-wakaf. Oleh karena itu, siapa saja, termasuk yatim / dhuafa, bisa belajar Al Quran di Qoryah Quran, tanpa khawatir putus pendidikan akibat kesulitan ekonomi.&nbsp;</p>
<p>Tidak ada kapitalisasi pendidikan, tidak ada akad ijarah antara lembaga dengan santri (via orang tua) yang menjadikan dunia pendidikan mengarah pada akad transaksional seperti halnya jual beli. Tidak ada uang gedung atau uang pangkal, tidak ada biaya jasa pendidikan kecuali infaq dan wakaf yang dilandaskan pada keikhlasan <em>ta’awwun </em>berdasarkan standar rata-rata kebutuhan pendidikan yang telah disepakati.</p>
<p>Ta'awwun seperti ini ditujukan untuk meraih keberkahan dan pertolongan dari Allah SWT, yaitu berupa lahirnya generasi qurani yang dapat menjadi semburat cahaya cemerlang yang menerangi Indonesia, sebagaimana hadist Rasulullah SAW :</p>
<p><em>"Sesungguhnya Allah senantiasa menolong hambaNya selama hamba menolong saudaranya"</em> (HR. Muslim).</p>
<p>Amanah ini memang berat. Ratusan juta umat Islam di Indonesia, dari Sabang sampai Merauke, menanti mereka. Banyak umat yang masih terbata-bata, belum bisa membaca Alquran, bahkan banyak pula imam masjid yang sangat memprihatinkan bacaannya. Harapan inilah yang mendorong Qoryan Quran Wanayasa bertekad untuk melangkah dan terus maju berbenah diri, menjalin sinergi kekuatan dengan berbagai elemen masyarakat.</p>
<p>Untuk itu, kami mengajak Anda dan para muhsinin lainnya agar terlibat membangun Qoryah Quran Wanayasa demi mewujudkan Indonesia yang diberkahi dengan cahaya Rabbani.</p>
<p>Mari ! Dukung Qoryah Qur’an Wanayasa Melahirkan <strong><em>“One Hafidz for One Masjid”.</em></strong></p>
<p></p>
</div>
<div class="program-cta hidden sm:block py-6">
<a class="block rounded bg-blue-500 hover:bg-blue-600 py-8 text-white font-bold text-center text-2xl no-underline border-b-8 border-blue-700 uppercase pulse" href="{{ url('/donate') }}">Donasi Sekarang</a>
</div>
</div>
<div id="tab-fundraiser" class="tab-pane">
<div class="">
                            <h3 class="md:hidden mb-5 text-xl font-bold">Fundraiser</h3>
    <div class="flex flex-wrap fundraiser-list">
        <div class="w-full">
            <div class="contentfundraiser mb-5">
                <div class="flex bg-white md:px-4 md:py-4 pb-4 mb-4 md:rounded border-b-custom last:border-b-0 last:mb-0 md:border-custom ">
                                            
<img class="w-10 h-10 rounded-full mr-4 border border-gray-500" src="{{ asset('js/landingpage/Nndy4VSOfk0EaRJhC2qfxIUPC8J7VKA7ItQGkq0g.png') }}" alt="Avatar of Pendekar Wakaf">
                    <div class="text-sm">
                                                <h3 class="text-gray-900 leading-none text-sm md:text-base mb-1">Pendekar Wakaf</h3>
                        <div class="color-gray text-xs md:text-sm mb-1 color-gray">Berhasil mengajak 152 orang untuk berdonasi
</div>
                        <div class="text-orange-900 font-bold text-sm md:text-lg">Rp 12.396.183
</div>
                    </div>
                </div>
                <div class="flex bg-white md:px-4 md:py-4 pb-4 mb-4 md:rounded border-b-custom last:border-b-0 last:mb-0 md:border-custom ">
<svg class="w-10 h-10 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
                    <div class="text-sm">
                                                <h3 class="text-gray-900 leading-none text-sm md:text-base mb-1">Yan Sofyan</h3>
                        <div class="color-gray text-xs md:text-sm mb-1 color-gray">Berhasil mengajak 2 orang untuk berdonasi
</div>
                        <div class="text-orange-900 font-bold text-sm md:text-lg">Rp 750.488
</div>
                    </div>
                </div>
                    <div class="flex bg-white md:px-4 md:py-4 pb-4 mb-4 md:rounded border-b-custom last:border-b-0 last:mb-0 md:border-custom ">
<svg class="w-10 h-10 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
                    <div class="text-sm"><h3 class="text-gray-900 leading-none text-sm md:text-base mb-1">Livian</h3>
                        <div class="color-gray text-xs md:text-sm mb-1 color-gray">Berhasil mengajak 1 orang untuk berdonasi
</div>
<div class="text-orange-900 font-bold text-sm md:text-lg">Rp 500.605
</div>
</div>
</div>
<div class="flex bg-white md:px-4 md:py-4 pb-4 mb-4 md:rounded border-b-custom last:border-b-0 last:mb-0 md:border-custom ">
<svg class="w-10 h-10 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
                        <div class="text-sm">
                                                    <h3 class="text-gray-900 leading-none text-sm md:text-base mb-1">Hamba Allah</h3>
                            <div class="color-gray text-xs md:text-sm mb-1 color-gray">Berhasil mengajak 1 orang untuk berdonasi
</div>
                            <div class="text-orange-900 font-bold text-sm md:text-lg">Rp 100.380
</div>
                        </div>
                    </div>
                    <div class="flex bg-white md:px-4 md:py-4 pb-4 mb-4 md:rounded border-b-custom last:border-b-0 last:mb-0 md:border-custom ">
<svg class="w-10 h-10 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
                        <div class="text-sm">
                                                    <h3 class="text-gray-900 leading-none text-sm md:text-base mb-1">Ruslenny Alihusein</h3>
<div class="color-gray text-xs md:text-sm mb-1 color-gray">Berhasil mengajak 1 orang untuk berdonasi
</div>
                            <div class="text-orange-900 font-bold text-sm md:text-lg">Rp 50.646
</div>
                        </div>
                    </div>
                    <div class="flex bg-white md:px-4 md:py-4 pb-4 mb-4 md:rounded border-b-custom last:border-b-0 last:mb-0 md:border-custom ">
<svg class="w-10 h-10 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm"><h3 class="text-gray-900 leading-none text-sm md:text-base mb-1">Jenni Melissa</h3>
<div class="color-gray text-xs md:text-sm mb-1 color-gray">Berhasil mengajak 1 orang untuk berdonasi
</div>
<div class="text-orange-900 font-bold text-sm md:text-lg">Rp 50.630
</div>
</div>
</div>
<div class="flex bg-white md:px-4 md:py-4 pb-4 mb-4 md:rounded border-b-custom last:border-b-0 last:mb-0 md:border-custom ">
<svg class="w-10 h-10 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
                                                
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm"><h3 class="text-gray-900 leading-none text-sm md:text-base mb-1">Suyanto</h3>
<div class="color-gray text-xs md:text-sm mb-1 color-gray">Berhasil mengajak 1 orang untuk berdonasi
</div>
<div class="text-orange-900 font-bold text-sm md:text-lg">Rp 50.207
</div>
</div>
</div>
<div class="flex bg-white md:px-4 md:py-4 pb-4 mb-4 md:rounded border-b-custom last:border-b-0 last:mb-0 md:border-custom ">
<svg class="w-10 h-10 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm"><h3 class="text-gray-900 leading-none text-sm md:text-base mb-1">Puji siswanto</h3>
<div class="color-gray text-xs md:text-sm mb-1 color-gray">Berhasil mengajak 1 orang untuk berdonasi
</div>
<div class="text-orange-900 font-bold text-sm md:text-lg">Rp 35.729
</div>
</div>
</div>
</div>
<div class="md:bg-gray-custom border-custom p-2 rounded-sm shadow:md md:p-6" id="FundraiserBtn">
<div class="flex -mx-1 md:-mx-4 items-center">
<div class="w-4/6 md:w-1/2 px-1 md:px-4 text-black text-sm md:text-xl"> Jadi <strong>#JembatanKebaikan</strong> sebagai fundraiser program ini.
</div>
<div class="w-2/6 md:w-1/2 px-1 md:px-4">
<a class="block rounded bg-yellow-500 hover:bg-yellow-600 px-1 py-2 md:px-4 md:py-6 text-white font-bold text-center text-xs md:text-xl no-underline" href="{{ url('/fundraiser') }}">Jadi Fundraiser <span class="hidden md:inline-block">Sekarang Juga</span></a>
</div>
</div>
</div>
</div>
</div>
<div class="mt-1 text-center md:hidden">
<button class="bg-yellow-200 hover:bg-yellow-300 text-yellow-600 font-bold py-2 px-4 text-sm rounded-full readmore">Lihat Semua</button>
</div>
</div>
</div>
    
<div id="tab-news" class="tab-pane">
        <h3 class="md:hidden mb-5 text-xl font-bold">Berita</h3>
        
<div class="timeline">
<div class="entry">
<div class="title"><span class="text-xs md:text-md">16 Sep 2020</span>
</div>
<div class="body">
<p class="text-sm md:text-lg">Pencairan Dana Rp 116.982.200</p>
<div class="text-xs md:text-sm content text-gray-600">
<p>Melanjutkan Pembangunan masjid pesantren..&nbsp;</p>
</div>
</div>
</div>
<div class="entry">
<div class="title"><span class="text-xs md:text-md">16 Sep 2020</span>
</div>
<div class="body">
<p class="text-sm md:text-lg">Pembangunan masjid pesantren berlanjut</p>
<div class="text-xs md:text-sm content text-gray-600"><ol><li>Alhamdulillah proses pembangunan masjid pesantren mafatih dimulai lagi.&nbsp;</li></ol>
<p>Pekerjaan yang dilakukan saat ini adalah pemasangan dinding masjid.&nbsp;</p><figure>
<img src="{{ asset('js/landingpage/KdUJvM996vwfRjN5itl1b1ljbxvClQdfdiBPNTDb.jpeg') }}?ar=16:9&amp;w=720&amp;auto=format,compress"></figure>
<p><br></p>
<p>Semoga pembangunan dapat berjalan lancar dan selesai sesuai harapan.</p>
<p>Ayo donasi wakaf lagi untuk pembangunan pesantren mafatih qoryah quran wanayasa.&nbsp;</p>
<p>Insya Allah tiap satu bata yang anda wakaf kan akan mengalirkan pahala selama masjid bermanfaat untuk ibadah. Aamiin.. </p>
</div>
</div>
</div>
<div class="entry">
<div class="title"><span class="text-xs md:text-md">25 Aug 2020</span>
</div>
<div class="body">
<p class="text-sm md:text-lg">Pencairan Dana Rp 150.000.000</p>
<div class="text-xs md:text-sm content text-gray-600">
<p>Untuk cicilan pembayaran lahan pesantren bulan agustus 2020</p>
</div>
</div>
</div>
<div class="entry">
<div class="title"><span class="text-xs md:text-md">14 Aug 2020</span>
</div>
<div class="body">
<p class="text-sm md:text-lg">Alhamdulillah pembangunan tambahan asrama santri telah selesai dibangun</p>
<div class="text-xs md:text-sm content text-gray-600">
<p>Update Pembangunan Qoryah Qur'an Wanayasa, 10 Agusutus 2018</p>

<p>1. Bangunan sementara asrama pengahafal Al-Qura'an siap digunakan</p>

<p>2. Toilet tambahan </p>

<p>3. Pembuatan area mencuci santri dan jemur pakaian,  tangga dan jalan menujur area mencuci santri</p>

<p>4. Kandang Ayam di kolong asrama</p>

<p>5. Toren baru untuk cadangan air</p>

<p>6. Pembuatan saluran air untuk bangunan sementara, toilet dan area cuci.</p>
<p></p><figure>
<img src="{{ asset('js/landingpage/r4MdmTmjkWaCwcXg4RNPytWCVN1TGQj1z423hq1L.jpeg') }}?ar=16:9&amp;w=720&amp;auto=format,compress"></figure>
<p></p><figure>
<img src="{{ asset('js/landingpage/0wu6Py0pu62fLOOLJLS1n1nIJZx7C82J16cSfYFA.jpeg') }}?ar=16:9&amp;w=720&amp;auto=format,compress"></figure>
<p></p><figure>
<img src="{{ asset('js/landingpage/VygSPwVtkgrxaKnz5H14NM6tUdb7qyOVnXFE4dIo.jpeg') }}?ar=16:9&amp;w=720&amp;auto=format,compress"></figure><figure>
<img src="{{ asset('js/landingpage/wzwhfvMwQkmvJVPFtYI2AuydnjrFxlmWrRHymu8x.jpeg') }}?ar=16:9&amp;w=720&amp;auto=format,compress"></figure>
<p></p>
<p>Kami ucapkan jazakumullah khairan ahsanal jaza' kepada para donatur..&nbsp;</p>
<p>Wakaf pembebasan lahan, pembangunan masjid dan pembangunan asrama permanen santri masih terbuka.. Kami senantiasa mengajak kaum muslim untuk menyisihkan hartanya untuk investasi pahala di pembangunan pesantresn Qoryah Quran wanayasa ini.&nbsp;</p>
</div>
</div>
</div>
<div class="entry">
<div class="title"><span class="text-xs md:text-md">27 Jul 2020</span>
</div>
<div class="body">
<p class="text-sm md:text-lg">Pencairan Dana Rp 69.200.000</p>
<div class="text-xs md:text-sm content text-gray-600">
<p>Untuk Pembangunan Kamar Santri, perbaikan kamar santri yang rusak dan perbaikan dan tambahan sarana sanitasi pesantren..</p>
</div>
</div>
</div>
<div class="entry">
<div class="title"><span class="text-xs md:text-md">13 Jul 2020</span>
</div>
<div class="body">
<p class="text-sm md:text-lg">Pembangunan Tambahan Kamar Santri</p>
<div class="text-xs md:text-sm content text-gray-600">
<p>Update Pembangunan 8 Juli 2020:</p>

<p>1. Meja stainless untuk dapur telah datang. Asalnya menggunakan meja kayu buatan sendiri, namun agar mudah dibersihkan, tahan lama, dan rapi diputuskan menggunakan stainless.</p>

<p>2. Pintu penutup dapur telah dipasang. Sebelumnya menggunakan triplek yang disandarkan di dinding saja, diganjal dengan lemari es agar tidak jatuh. Sekarang dibuat pintu besi yang ditutup ram nyamuk agar sirkulasi udara dapur bagus namun serangga tidak masuk.</p>

<p>Baik meja maupun pintu adalah sumbangan dari Bu Yulfi dari Jakarta</p>
<figure>
<img src="{{ asset('js/landingpage/6UbQjxuPioyFPfZjllDUWaR3eg1zJGnwdVpK2I5G.jpeg') }}?ar=16:9&amp;w=720&amp;auto=format,compress"></figure>
<p><br></p>
<p>3. Rangka untuk kamar santri tambahan sudah jadi, tinggal ditutup dengan atap spandek. Seluruh struktur menggunakan baja ringan.</p>

<p>4. Pondasi tangga menuju lokasi mencuci </p>

<p>baju dan jemuran baru telah selesai. Tinggal menutup anak tangga dengan paving blok agar tidak membuat alas kaki kotor dengan tanah saat dilalui.</p>

<p>5. Dinding asrama bilik dilapisi triplek agar lebih kuat dan mencegah tikus masuk.</p>
<figure>
<img src="{{ asset('js/landingpage/h0GZILVeH6AuYBriBpge4i2ZgT2hLvYYziynAavL.jpeg') }}?ar=16:9&amp;w=720&amp;auto=format,compress"></figure>
<p>Sisa pekerjaan:</p>

<p>1. Memasang atap spandek di kamar santri baru</p>

<p>2. Membuat jendela dan ventilasi dapur</p>

<p>3. Membuat kamar mandi tambahan</p>

<p>4. Membuat intalasi air tempat mencuci baju</p>

<p>5. Membuat struktrur jemuran baju</p>

<p>6. Membuat kandang ayam</p>

<p>7. Renovasi-renovasi bangunan lama</p>

<p>Melihat kebutuhan yang ada, saat ini dana yang telah terkumpul masih sangat kurang. Kesempatan bagi yang ingin mengabadikan hartanya bahkan membuatnya berlipat-lipat nilainya.</p>

<p>Ini ada program menarik bagi yang ingin ikut membangun Pesantren Tahfizh:</p>

<p>Gotong Royong Bangun Pesantren Tahfizh Al Quran</p>

<p>Sisihkan Harta Anda Sebesar Rp. 60.000 per Orang/bulan, Insya Allah akan Mampu Wujudkan Pesantren Wakaf Penghafal Al Quran di Wanayasa.<br></p>
</div>
</div>
</div>
<div class="entry">
<div class="title"><span class="text-xs md:text-md">07 May 2020</span>
</div>
<div class="body">
<p>Program dirilis</p>
</div>
</div>
</div>
        
<div class="mt-1 text-center md:hidden">
            
<button class="bg-yellow-200 hover:bg-yellow-300 text-yellow-600 font-bold py-2 px-4 text-sm rounded-full readmore">Lihat Semua</button>
    </div>
</div>
<div id="tab-donatur" class="tab-pane"><h3 class="md:hidden mb-5 text-xl font-bold">Donatur (3.209)</h3>
<div class="flex flex-wrap donatur-list">
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Zulhendri</p>
<p class="text-orange-900 font-bold">Sebesar Rp 100.000</p>
<p class="text-gray-500 text-xs italic">1 menit yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Hamba Allah</p>
<p class="text-orange-900 font-bold">Sebesar Rp 100.915</p>
<p class="text-gray-500 text-xs italic">21 menit yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"mohon doanya agar kami sekeluarga selalu dalam lindungan ALLAH dan kemajuan usaha kami makin maju bisa menjadi pabrik garmnet dan juga terbebas dari hutang keuangan, bisa membangun masjid, bisa sedekah lebih banyak lagi"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Hamba Allah</p>
<p class="text-orange-900 font-bold">Sebesar Rp 250.051</p>
<p class="text-gray-500 text-xs italic">2 jam yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Hamba Allah</p>
<p class="text-orange-900 font-bold">Sebesar Rp 250.043</p>
<p class="text-gray-500 text-xs italic">2 jam yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Hamba Allah</p>
<p class="text-orange-900 font-bold">Sebesar Rp 10.000</p>
<p class="text-gray-500 text-xs italic">2 jam yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">BU</p>
<p class="text-orange-900 font-bold">Sebesar Rp 10.658</p>
<p class="text-gray-500 text-xs italic">4 jam yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Hamba Allah</p>
<p class="text-orange-900 font-bold">Sebesar Rp 50.008</p>
<p class="text-gray-500 text-xs italic">4 jam yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Vita</p>
<p class="text-orange-900 font-bold">Sebesar Rp 10.648</p>
<p class="text-gray-500 text-xs italic">5 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"Semoga berguna"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<img class="w-10 h-10 flex-shrink-0 rounded-full mr-4 border border-gray-500" src="{{ asset('js/landingpage/picture') }}" alt="Avatar of Bobby Pramayudha">
<div class="text-sm">
<p class="text-gray-900 leading-none">Bobby Pramayudha</p>
<p class="text-orange-900 font-bold">Sebesar Rp 10.000</p>
<p class="text-gray-500 text-xs italic">6 jam yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<img class="w-10 h-10 flex-shrink-0 rounded-full mr-4 border border-gray-500" src="{{ asset('js/landingpage/picture') }}" alt="Avatar of Bobby Pramayudha">
<div class="text-sm">
<p class="text-gray-900 leading-none">Bobby Pramayudha</p>
<p class="text-orange-900 font-bold">Sebesar Rp 10.000</p>
<p class="text-gray-500 text-xs italic">6 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"Jariyyah an mendiang ayah alm Soerjadi bin Gondosiswojo"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Hamba Allah</p>
<p class="text-orange-900 font-bold">Sebesar Rp 30.188</p>
<p class="text-gray-500 text-xs italic">6 jam yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<img class="w-10 h-10 flex-shrink-0 rounded-full mr-4 border border-gray-500" src="{{ asset('js/landingpage/picture') }}" alt="Avatar of Bobby Pramayudha">
<div class="text-sm">
<p class="text-gray-900 leading-none">Bobby Pramayudha</p>
<p class="text-orange-900 font-bold">Sebesar Rp 10.000</p>
<p class="text-gray-500 text-xs italic">6 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"Jariyyah an mendiang istri alm Hj Henny Tri Susanty binti Eddy Sulaiman"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Agus Siswanto</p>
<p class="text-orange-900 font-bold">Sebesar Rp 250.046</p>
<p class="text-gray-500 text-xs italic">6 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"Semoga Keluarga saya di berkahi dan di berikan rahmat oleh Allah Swt.
    Serta Puta Putri saya bisa menjadi Hafizh Al Quran. Amien"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Hamba Allah</p>
<p class="text-orange-900 font-bold">Sebesar Rp 50.149</p>
<p class="text-gray-500 text-xs italic">6 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"Saya titipkan atas nama ibu saya: Suryatinah binti R. Suhardjo
    Mohon doanya agar beliau selalu diberikan kesehatan, kebahagiaan, kesembuhan, hidayah dan mendapatkan ridho dr Allah SWT"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Sri Wuryanti</p>
<p class="text-orange-900 font-bold">Sebesar Rp 10.627</p>
<p class="text-gray-500 text-xs italic">7 jam yang lalu</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Mubtadi Djasim Iman</p>
<p class="text-orange-900 font-bold">Sebesar Rp 250.718</p>
<p class="text-gray-500 text-xs italic">11 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"semoga Allah swt meridhoi Aamiin3"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">H.DJAFLINUS</p>
<p class="text-orange-900 font-bold">Sebesar Rp 50.000</p>
<p class="text-gray-500 text-xs italic">11 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"semoga segera selesai pembangunannya agar setiap orang dapat beribadah"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Erlin cahyani</p>
<p class="text-orange-900 font-bold">Sebesar Rp 10.000</p>
<p class="text-gray-500 text-xs italic">13 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"Semoga Allah ampuni dosa2 saya dan kluarga. Amin"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Umar said</p>
<p class="text-orange-900 font-bold">Sebesar Rp 20.000</p>
<p class="text-gray-500 text-xs italic">16 jam yang lalu</p>
<p class="text-gray-700 text-xs italic mt-2">"Semoga segala hajat diberi kemudahan"</p>
</div>
</div>
</div>
<div class="w-full">
<div class="flex items-center bg-white shadow-sm rounded-sm mb-2 px-4 py-4 rounded">
<svg class="w-10 h-10 flex-shrink-0 rounded-full mr-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="#6A6E7C">
<path d="M256 274.1c-75.6 0-137.1-61.5-137.1-137.1S180.4 0 256 0s137.1 61.5 137.1 137.1-61.5 137-137.1 137zm0-253.7c-64.3 0-116.6 52.3-116.6 116.6S191.7 253.7 256 253.7s116.6-52.3 116.6-116.6S320.3 20.4 256 20.4z"></path>
<path d="M493.9 512c-5.6 0-10.2-4.6-10.2-10.2 0-125.5-102.1-227.6-227.6-227.6S28.5 376.3 28.5 501.8c0 5.6-4.6 10.2-10.2 10.2s-10.2-4.6-10.2-10.2c0-66.3 25.8-128.6 72.7-175.4s109.2-72.7 175.4-72.7 128.6 25.8 175.4 72.7 72.7 109.2 72.7 175.4c-.2 5.6-4.8 10.2-10.4 10.2z"></path></g></svg>
<div class="text-sm">
<p class="text-gray-900 leading-none">Hamba Allah</p>
<p class="text-orange-900 font-bold">Sebesar Rp 150.000</p>
<p class="text-gray-500 text-xs italic">18 jam yang lalu</p>
</div>
</div>
</div>
</div>
<div class="loader-wrapper text-center" style="display: none;">
<div class="lds-ellipsis">
<div>
</div>
<div>
</div>
<div>
</div>
<div>
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
<div id="cta-sticky" class="block md:hidden program-cta-footer p-4 shadow border-t"><!-- Two columns -->
<div class="flex">
<a class="block rounded border-2 border-teal-600 py-2 px-6 text-sm text-green-600 font-bold text-center" href="https://api.whatsapp.com/send?text=Gotong%20Royong%20Bangun%20Pesantren%20Hafizh%20Al%20Quran%0A%0ASisihkan%20Harta%20Anda%20Sebesar%20Rp.%2060.000%20per%20Orang%2Fbulan%2C%20Insya%20Allah%20akan%20Mampu%20Wujudkan%20Pesantren%20Wakaf%20Penghafal%20Al%20Quran%20di%20Wanayasa.%0A%0Ah{{url('/')}}">
<svg class="inline-block" width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)">
<path d="M0 16l1.095-4A8.11 8.11 0 010 7.945C0 3.586 3.56 0 7.915 0s7.97 3.586 7.97 7.945c0 4.358-3.615 8.055-7.97 8.055-1.37 0-2.684-.441-3.862-1.103L0 16z" fill="#EDF5F8"></path>
<path d="M4.272 13.462l.247.138c1.013.635 2.191 1.02 3.423 1.02 3.588 0 6.573-3.006 6.573-6.675 0-3.67-2.985-6.566-6.6-6.566a6.546 6.546 0 00-6.546 6.566c0 1.269.356 2.51 1.014 3.559l.164.248-.63 2.317 2.355-.607z" fill="#38A169"></path>
<path d="M5.806 4.248l-.52-.027a.62.62 0 00-.438.165c-.247.22-.658.635-.767 1.186-.192.828.11 1.821.821 2.814.713.993 2.082 2.593 4.492 3.283.767.22 1.37.083 1.862-.22.384-.249.63-.635.713-1.049l.082-.386a.278.278 0 00-.137-.304l-1.726-.8a.26.26 0 00-.328.083l-.685.883c-.055.055-.137.083-.22.055-.465-.165-2.026-.828-2.875-2.483-.027-.082-.027-.165.028-.22l.657-.745c.055-.083.082-.193.055-.276l-.795-1.793a.239.239 0 00-.219-.166z" fill="#FEFEFE"></path></g><defs><clippath id="clip0">
<path fill="#fff" d="M0 0h15.885v16H0z"></path></clippath></defs></svg> Share</a>
<a class="block flex-1 ml-2 rounded bg-blue-500 hover:bg-blue-600 py-2 text-sm text-white font-bold text-center border-b-2 border-blue-700 uppercase pulse" href="{{ url('/donate') }}">Donasi Sekarang</a>
</div>
</div></main>
    <footer class="container lg:max-w-5xl px-2 pb-4 md:px-4 md:pb-10 mx-auto text-center text-xs pt-10 ">
        
<p class="mb-4">© 2020 </p>
    </footer>
@endsection
@section('footer')
<script src="{{ asset('js/landingpage/jquery.min.js.download') }}" type="text/javascript"></script><script src="{{ asset('js/landingpage/app.js') }}?id=98121ae5d02262a7fecb" type="text/javascript"></script><script type="text/javascript">$(document).on('click', '.readmore', function(e){$(this).addClass('hidden').closest('.tab-pane').addClass('open');
    });
    $(document).on('click', '#showCountDonation', function(e){$(".toggleDonation").toggleClass('hidden')
    $(this).text('Sembunyikan Dana')
    if($(".toggleDonation").hasClass('hidden')){$(this).text('Lihat Dana Terkumpul')
    }});
    let elCtaDonate = document.getElementById("cta-donate"),pageState = true,
    pagingState = true,
    nextDonaturUrl = "{{ url('/donatur') }}?page=2",
    $donaturList = $('.donatur-list'),$timeline = $('.timeline'),$loader = $('.loader-wrapper');
    var getPosts = function(){$.ajax({
    url: "{{ url('/posts') }}",
    })
    .done(function(data){$.each(data.data, function(key, item){$timeline.prepend(
    '<div class=entry>' +
    '<div class=title>' +
    '<span class="text-xs md:text-md">' + item.date + '</span>' +
    '</div>' +
    '<div class=body>' +
    '<p class="text-sm md:text-lg">' + item.title + '</p>' +
    '<div class="text-xs md:text-sm content text-gray-600">' + item.content + '</div>' +
    '</div>' +
    '</div>'
    );
    })
    });
    };
    window.addEventListener("load", function(){setTimeout(getPosts, 5000);
    });
    $(window).scroll(function(){let screen = $(this).scrollTop(),screenDoc = $(document).height();
    if (screen >= 10){$("#header-program-title").addClass("header-sticky shadow-lg");
    }else {
    $("#header-program-title").removeClass("header-sticky shadow-lg");
    }if (screen > elCtaDonate.offsetTop && pageState){$('.program-cta-footer').addClass('button-float');
    pageState = false
    }else if (screen < elCtaDonate.offsetTop){pageState = true;
    $('.program-cta-footer').removeClass('button-float');
    }else {
    pageState = false;
    }if (screen >= (screenDoc - 1000) && pagingState){pagingState = false;
    if (nextDonaturUrl != null){$.ajax({
    url: nextDonaturUrl,
    beforeSend: function( xhr ){$loader.show();
    }})
    .done(function( data ){nextDonaturUrl = data.next_page_url;
    donaturs = data.data;
    $.each(donaturs, function(key, item){if (item.message != null){message = '<p class="text-gray-700 text-xs italic mt-2">"' + item.message + '"</p>';
    }else {
    message = '';
    }$donaturList.append(
    '<div class=w-full>'+
    '<div class="flex bg-gray-100 px-4 py-4 rounded">' +
    item.avatar_url +
    '<div class=text-sm>' +
    '<p class="text-gray-900 leading-none">' + item.user_name + '</p>' +
    '<p class="text-orange-900 font-bold">Sebesar ' + item.amount + '</p>' +
    '<p class="text-gray-500 text-xs italic">' + item.transfered_at + '</p>' +
    message +
    '</div>' +
    '</div>' +
    '</div>');
    });
    $loader.hide();
    pagingState = true;
    });
    }else {
    $loader.hide();
    pagingState = false;
    }}else if (screen < (screenDoc - 1000) && !pagingState){$loader.hide();
    pagingState = true;
    }});
    function CopytoClipboard(){var copyText = document.getElementById("copy");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    /* Copy the text inside the text field */
    document.execCommand("copy");
    /* Alert the copied text */
    swal({
    icon: 'success',
    title: 'Berhasil Disalin',
    text: 'Mulai sebarkan di facebook, WhatsApp, dan Instagram.',
    button: false,
    timer: 3000
    })
    }</script><script>function toggleSearch(state){if (state == 'open'){$('.backdrop').removeClass('hidden').addClass('block');
    $('.search-list-container').removeClass('hidden').addClass('block');
    }else {
    $('.backdrop').addClass('hidden').removeClass('block');
    $('.search-list-container').addClass('hidden').removeClass('block');
    }}$(document).ready(function(){let HistorySearch = JSON.parse(localStorage.getItem('HistorySearch'));
    if(HistorySearch != null){$("#SearchHistory").show()
    $.each(HistorySearch, function(key, item){$("#SearchHistory").append(`
<div class="search-item flex mb-3 cursor-pointer" onclick='location.href="/${item.slug}"'>
<div class="w-1/4 rounded h-14">
<img src="${ item.image_url }?w=313&h=157" placeholder="${ item.image_url }" class="rounded h-14"/>
</div>
<div class="pl-4 w-3/4"><h3 class="text-sm font-semibold">${ item.name }</h3>
<div class="text-gray-500 text-xs">${ item.user_name }
<svg class="inline-block ml-1" width=13 height=13 fill=none xmlns="http://www.w3.org/2000/svg">
<path d="M6.5 0A6.507 6.507 0 000 6.5C0 10.084 2.916 13 6.5 13S13 10.084 13 6.5 10.084 0 6.5 0z" fill="#FE8057"/>
<path d="M9.588 4.814l-3.596 3.48a.561.561 0 01-.39.156.561.561 0 01-.392-.157l-1.798-1.74a.522.522 0 010-.756.566.566 0 01.782 0l1.407 1.361 3.205-3.1a.566.566 0 01.782 0 .523.523 0 010 .756z" fill="#FAFAFA"/></svg>
</div>
</div>
</div>
</div>`)
    });
    }$(".button-search").on('click',function(){$(".search").removeClass("w-1/2").addClass("w-full")
    $(".menuToggle").addClass("hidden")
    $(".logo-header").addClass("hidden")
    $(".search-responsive").show()
    $(this).hide()
    })
    $(".closeSearch").on('click',function(){$(".search").addClass("w-1/2").removeClass("w-full")
    $(".menuToggle").removeClass("hidden")
    $(".logo-header").removeClass("hidden")
    $(".search-responsive").hide()
    $(".button-search").show()
    $("#search-bar").val('')
    })
    $('#search-bar').on('keypress',function(e){if(e.which == 13){e.preventDefault();
    var search = $(this).val();
    search = search.replace(/<\/?[^>]+(>|$)/g, "");
    $("#titleSearch").html("Pencarian dengan kata kunci <b>"+search+"</b>")
    $("#SearchKey").show();
    if(search.length>1){$.ajax({
    url : window.location.origin+'?search='+search
    }).done(function (data){let $SearchKey = $("#SearchKey"),programsSearch = data.search_results;
    $SearchKey.find('.search-item').remove()
    if(programsSearch.length > 0){$(".notfound").remove();
    localStorage.removeItem('HistorySearch')
    localStorage.setItem('HistorySearch', JSON.stringify(programsSearch))
    $.each(programsSearch, function(key, item){$SearchKey.append(`
<div class="search-item flex mb-3 cursor-pointer" onclick='location.href="/${item.slug}"'>
<div class="w-1/4 rounded h-14">
<img src="${ item.image_url }?w=313&h=157" placeholder="${ item.image_url }" class="rounded h-14"/>
</div>
<div class="pl-4 w-3/4"><h3 class="text-sm font-semibold">${ item.name }</h3>
<div class="text-gray-500 text-xs">${ item.user_name }
<svg class="inline-block ml-1" width=13 height=13 fill=none xmlns="http://www.w3.org/2000/svg">
<path d="M6.5 0A6.507 6.507 0 000 6.5C0 10.084 2.916 13 6.5 13S13 10.084 13 6.5 10.084 0 6.5 0z" fill="#FE8057"/>
<path d="M9.588 4.814l-3.596 3.48a.561.561 0 01-.39.156.561.561 0 01-.392-.157l-1.798-1.74a.522.522 0 010-.756.566.566 0 01.782 0l1.407 1.361 3.205-3.1a.566.566 0 01.782 0 .523.523 0 010 .756z" fill="#FAFAFA"/></svg>
</div>
</div>
</div>
</div>`)
    });
    }else{
    $SearchKey.html('<p class="text-center text-xs text-black notfound mb-6">Program Kebaikan yang anda cari tidak ditemukan</p>');
    }}).fail(function (){$SearchKey.html('<p class="text-center text-xs text-black notfound mb-6">Program Kebaikan yang anda cari tidak ditemukan</p>');
    });
    }}});
    $(document).on('focus', '.search-input-header', function(e){toggleSearch('open');
    $('html, body').animate({
    scrollTop: $('#header').offset().top - 20
    }, 'slow');
    });
    $(document).on('click', '.backdrop, .closeSearch', function(e){toggleSearch('closed');
    });
    })</script>
    <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="{{ asset('js/landingpage/box-469cf41adb11dc78be68c1ae7f9457a4.html') }}" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
    @endsection