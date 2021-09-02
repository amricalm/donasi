        <!-- Required jquery and libraries -->
        <script src="{{ asset('vendor/finwallapp/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('vendor/finwallapp/js/popper.min.js')}}"></script>
        <script src="{{ asset('vendor/finwallapp/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- cookie js -->
        <script src="{{ asset('vendor/finwallapp/js/jquery.cookie.js')}}"></script>
        <!-- Swiper slider  js-->
        <script src="{{ asset('vendor/finwallapp/vendor/swiper/js/swiper.min.js')}}"></script>
        <!-- Customized jquery file  -->
        <script src="{{ asset('vendor/finwallapp/js/main.js')}}"></script>
        <script src="{{ asset('vendor/finwallapp/js/color-scheme-demo.js')}}"></script>
        <!-- page level custom script -->
        <script src="{{ asset('vendor/finwallapp/js/app.js')}}"></script>
        @stack('footer')

        @yield('footer')