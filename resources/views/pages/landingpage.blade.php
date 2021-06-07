@extends('templates.indexlanding')
@section('body')
    @include('templates.menulanding')
    <!-- slider_area_start -->
    <div class="popular_causes_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_cause">
                        <section class="center responsive slider">
                        @foreach($Program as $row)
                            <a href="{{ url('/'.$row->Url) }}">
                                <div class="slick-slide">
                                    <img src="{{ url('photos/program/'.$row->Banner) }}" data-src="{{ url('photos/program/'.$row->Banner) }}?auto=format" alt="{{ $row->Name }}" width="100%">
                                </div>
                            </a>
                        @endforeach
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Program Kebaikan</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($Program as $row)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/'.$row->Url) }}">
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="{{ url('photos/program/'.$row->Banner) }}" alt="{{ $row->Name }}">
                            </div>
                            <div class="causes_content">
                                <h4>{{ $row->Name }}</h4>
                                <p>Mafatih Global <i class="fa fa-check-circle"></i></p>
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $row->Percent != '' ? $row->Percent : 100 }}%;" aria-valuenow="{{ $row->Percent != '' ? $row->Percent : 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>
                                        @php
                                            $format_rupiah = "Rp " . number_format($row->AmountUnique,0,',','.');
                                            echo $format_rupiah;
                                        @endphp
                                    </span>
                                    <span>{{ $row->DaysLeft != '' ? $row->DaysLeft : '∞' }}</span>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <div>Donasi Terkumpul </div>
                                    <div>{{ $row->DaysLeft != '' ? 'Hari Lagi' : 'Status' }}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- popular_causes_area_end  -->

    <!-- counter_area_start  -->
    <div class="counter_area section_padding">
        <div class="container">
            <div class="counter_bg overlay">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">{{ $ProgramCounter->CountProgram }}</h3>
                                <p>Program</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-in-love"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">{{ $ProgramCounter->CountDonate }}</h3>
                                <p>Donatur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-heart-beat"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">{{ $ProgramCounter->AmountUnique }}</h3>
                                <p>Donasi Terkumpul</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-hug"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">{{ $ProgramCounter->AmountUnique }}</h3>
                                <p>Donasi Disalurkan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter_area_end  -->

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">merupakan platform penggalangan dana online yang dikelola oleh Yayasan Mafatih Global untuk menghimpun dana Infak, Sedekah & Wakaf melalui berbagai program yang dihadirkan.</p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Tentang kami
                            </h3>
                            <ul class="links">
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Kontak Kami</a></li>
                                <li><a href="#">Syarat & Ketentuan</a></li>
                                <li><a href="#">Kebijakan Privasi</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Hubungi Kami
                            </h3>
                            <div class="contacts">
                                <p>0812 - 8639 - 653<br>
                                    yansofyan@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Alamat Kantor
                            </h3>
                            <div class="contacts">
                                <p>Jl. Cibubur 1 Gg. Beriman 3<br/>
                                    RT.01/12 No.9, Cibubur, Ciracas<br/>
                                    Jakarta Timur, DKI Jakarta 13720
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> | <a href="https://colorlib.com" target="_blank">Qoryah Qur'an</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
@section('footer')
@endsection