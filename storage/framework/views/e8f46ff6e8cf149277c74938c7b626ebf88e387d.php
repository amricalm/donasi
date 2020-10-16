<?php $__env->startSection('body'); ?>
<body class="detail-program">
    <div class="backdrop hidden"></div>
    <header id="header" class="bg-orange-900 sticky top-0 px-4 ">
        <nav class="container w-container flex items-center justify-between flex-wrap mx-auto py-4">
        <div class="logo-header flex items-center flex-shrink-0 text-white md:mr-6">
        <a href="URL::to('/');">
        <img class="h-6 md:h-10" src="<?php echo e(url('img/logo.png')); ?>" alt="Logo"></a>
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
                <?php if(Session::get('UserID')): ?>
                    <a href="<?php echo e(url('/home')); ?>" class="inline-block text-sm px-4 py-2 leading-none border-2 rounded text-white border-white hover:border-transparent hover:text-orange-900 hover:bg-white mt-4 lg:mt-0">Dashboard</a>
                <?php else: ?>
                    <a href="<?php echo e(url('/login')); ?>" class="inline-block text-sm px-4 py-2 leading-none border-2 rounded text-white border-white hover:border-transparent hover:text-orange-900 hover:bg-white mt-4 lg:mt-0">Login / Register</a>
                <?php endif; ?>
            </div>
        </div></nav>
</header>
<main class="main-content">
    <div class="w-full md:w-1/2 md:mx-auto p-20 border-custom rounded bg-white md:mt-32 md:mb-24 text-center">
        <!--Icon-->
        <div class="mb-8">
            <svg class="mx-auto" width="110" height="113" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 113h84.754V38.274H13V113z" fill="url(#paint0_linear)"></path>
                <path opacity=".693" fill-rule="evenodd" clip-rule="evenodd" d="M86.557 113h10.82V45.565h-10.82V113z" fill="#0085FF"></path>
                <path opacity=".492" fill-rule="evenodd" clip-rule="evenodd" d="M12.623 113h30.655V38.274H12.623V113z" fill="#0085FF"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 45.564h110V27.34H0v18.225z" fill="url(#paint1_linear)"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 45.564h21.64V27.34H0v18.225zM100.983 45.565H110V27.339h-9.017v18.226z" fill="#3B96FF"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.623 56.5h84.754V45.565H12.623V56.5z" fill="url(#paint2_linear)"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.033 45.565h37.87V27.339h-37.87v18.226z" fill="url(#paint3_linear)"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M45.937 21.762l-3.172.157c-13.126 0-18.06-13.275-6.642-14.014 11.416-.74 9.814 13.857 9.814 13.857zM33.675.058C9.209 1.642 19.782 30.092 47.912 30.092l6.795-.338S58.142-1.526 33.675.058z" fill="url(#paint4_linear)"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M73.014 7.906c11.417.74 6.482 14.015-6.643 14.015l-3.171-.158S61.598 7.166 73.014 7.906zm-18.586 21.85l6.796.337c28.13 0 38.703-28.45 14.236-30.035-24.466-1.584-21.032 29.697-21.032 29.697z" fill="url(#paint5_linear)"></path>
                <defs>
                    <linearGradient id="paint0_linear" x1="-6.689" y1="61.861" x2="-6.689" y2="144.509" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#8EBBFF"></stop>
                        <stop offset="1" stop-color="#2C92FF"></stop>
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="-25.554" y1="33.092" x2="-25.554" y2="53.25" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#8EBBFF"></stop>
                        <stop offset="1" stop-color="#2C92FF"></stop>
                    </linearGradient>
                    <linearGradient id="paint2_linear" x1="-386.486" y1="-44.374" x2="-385.495" y2="73.453" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#8EA2FF"></stop>
                        <stop offset="1" stop-color="#557AC7"></stop>
                    </linearGradient>
                    <linearGradient id="paint3_linear" x1="34.227" y1="27.339" x2="34.227" y2="49.228" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFB053"></stop>
                        <stop offset="1" stop-color="#FF9029"></stop>
                    </linearGradient>
                    <linearGradient id="paint4_linear" x1="16.495" y1="0" x2="16.495" y2="36.14" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFCF53"></stop>
                        <stop offset="1" stop-color="#FF7600"></stop>
                    </linearGradient>
                    <linearGradient id="paint5_linear" x1="50.758" y1="0" x2="50.758" y2="36.142" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFCF53"></stop>
                        <stop offset="1" stop-color="#FF7600"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <!--End Icon-->
        <h3 class="text-black text-2xl mb-4">Terima kasih telah menjadi fundraiser dari program <strong>Gotong Royong Bangun Pesantren Hafizh Al Quran</strong></h3>
        <div class="color-gray text-lg mb-4">Silahkan <span class="text-pink-900 font-bold">salin kode dibawah ini</span> untuk disebarkan</div>
        <div class="form-group">
            <input class="bg-gray-custom border-custom p-5 text-center mb-3 w-full text-black" value="<?php echo e(url('/')); ?>?ref=<?php echo e(Session::get('UserFundraiserCode')); ?>" placeholder="" id="InputCopy" readonly="">
        </div>
        <button type="button" onclick="CopytoClipboard()" class="block rounded bg-pink-900 py-5 text-white font-bold text-center text-base no-underline w-full">Salin Kode</button>
        <hr class="mt-12 mb-12">
        <h3 class="text-sm mb-5">Statistik Kode Referal</h3>
        <ul class="bg-gray-custom text-left text-sm border-custom">
            <li class="flex p-4 border-b-custom">
                <div class="w-2/3">
                    <svg class="inline-block mr-2" width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M13.636 10.695L6.76 5.07a.313.313 0 00-.51.243v9.374a.313.313 0 00.571.173l2.408-3.61h4.207c.133 0 .25-.083.295-.208a.311.311 0 00-.096-.347zm-4.574-.07a.314.314 0 00-.26.138l-1.927 2.892V5.97l5.687 4.654h-3.5z" fill="#000"></path>
                            <path d="M8.47.354a5.319 5.319 0 00-6.867 3.051 5.32 5.32 0 003.052 6.866.313.313 0 00.225-.584A4.692 4.692 0 012.187 3.63 4.691 4.691 0 018.245.938a4.693 4.693 0 012.692 6.058.313.313 0 00.583.224A5.32 5.32 0 008.47.354z" fill="#000"></path>
                            <path d="M9.704 3.918a3.412 3.412 0 00-1.907-1.813 3.412 3.412 0 00-2.63.067A3.412 3.412 0 003.354 4.08c-.33.857-.305 1.79.067 2.63a3.412 3.412 0 001.907 1.813.312.312 0 00.404-.18.313.313 0 00-.18-.404 2.793 2.793 0 01-1.56-1.483 2.796 2.796 0 01-.055-2.151 2.791 2.791 0 011.484-1.56 2.796 2.796 0 012.151-.055c.702.27 1.256.796 1.561 1.483.304.687.325 1.45.055 2.152a.312.312 0 10.583.224 3.412 3.412 0 00-.067-2.63z" fill="#FF7600"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <path fill="#fff" d="M0 0h15v15H0z"></path>
                            </clipPath>
                        </defs>
                    </svg> Link diklik
                </div>
                <div class="w-1/3 text-right">2</div>
            </li>
            <li class="flex p-4 border-b-custom">
                <div class="w-2/3">
                    <svg class="inline-block mr-2" width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M12.771 2.454l-2.19-2.19A.894.894 0 009.944 0H2.866c-.496 0-.9.404-.9.9v6.185c0 .385.6.386.6 0V.9a.3.3 0 01.3-.3h6.988v1.693c0 .497.404.9.9.9h1.68V14.1a.3.3 0 01-.3.3H2.866a.3.3 0 01-.3-.3V9.51c0-.386-.6-.387-.6 0v4.59c0 .496.404.9.9.9h9.268c.497 0 .9-.404.9-.9V3.09a.895.895 0 00-.263-.636zm-2.317-.16V.985l1.608 1.607h-1.308a.3.3 0 01-.3-.3z" fill="#000"></path>
                            <path d="M2.034 8.453c.092.135.28.173.417.083a.303.303 0 00.082-.416.303.303 0 00-.416-.083.303.303 0 00-.083.416z" fill="#000"></path>
                            <path d="M7.861 5.827l-.316.316-.316-.316a1.506 1.506 0 00-2.128 0 1.52 1.52 0 000 2.128l2.232 2.232a.303.303 0 00.424 0L9.99 7.955a1.506 1.506 0 000-2.128 1.507 1.507 0 00-2.128 0zM9.565 7.53l-2.02 2.02-2.02-2.02a.899.899 0 01-.264-.64c0-.492.412-.903.904-.903.507 0 .841.466 1.168.792a.3.3 0 00.424 0l.529-.528c.822-.823 2.104.454 1.279 1.28z" fill="#FF7600"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <path fill="#fff" d="M0 0h15v15H0z"></path>
                            </clipPath>
                        </defs>
                    </svg> User mengisi form
                </div>
                <div class="w-1/3 text-right">0</div>
            </li>
            <li class="flex p-4">
                <div class="w-2/3">
                    <svg class="inline-block mr-2" width="15" height="15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M1.824 15h9.567a.24.24 0 00.17-.07l1.799-1.793a.244.244 0 00.075-.17v-8.28a.26.26 0 00-.25-.253H9.944c.285-.421.451-.973.451-1.543a2.89 2.89 0 00-5.78-.001c0 .57.165 1.123.45 1.544H3.618a.246.246 0 00-.17.077L1.649 6.308a.252.252 0 00-.075.173v8.28c.005.135.116.24.25.239zm.232-8.278h9.09v7.796h-9.09V6.722zm9.573 7.458v-7.6l1.324-1.312v7.6L11.63 14.18zM7.505.488a2.409 2.409 0 110 4.818 2.409 2.409 0 010-4.818zM3.718 4.916H5.45c.152.18.322.304.506.421h-.228a.24.24 0 000 .482H9.1a.24.24 0 000-.482h-.047c.184-.117.354-.24.507-.421h3.044L11.29 6.24H2.405l1.313-1.324z" fill="#000"></path>
                            <path d="M7.504 4.19a.444.444 0 01-.443-.444.24.24 0 00-.481 0c0 .418.28.784.684.893v.186a.24.24 0 00.481 0V4.64a.925.925 0 00-.24-1.818.443.443 0 01-.009-.886h.017a.443.443 0 01.435.443.24.24 0 00.481 0 .926.926 0 00-.684-.893v-.151a.24.24 0 00-.481 0v.151a.925.925 0 00.24 1.818.443.443 0 110 .886z" fill="#FF7600"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <path fill="#fff" d="M0 0h15v15H0z"></path>
                            </clipPath>
                        </defs>
                    </svg> User berdonasi
                </div>
                <div class="w-1/3 text-right">0</div>
            </li>
        </ul>
    </div>
</main>
<footer class="container lg:max-w-5xl px-2 pb-4 md:px-4 md:pb-10 mx-auto text-center text-xs pt-10 ">
    <p class="mb-4">© 2020</P>
</footer>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script type="text/javascript">
    function CopytoClipboard(){
        var copyText = document.getElementById("InputCopy");
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
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.indexlanding', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>