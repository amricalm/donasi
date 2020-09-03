            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="feather icon-toggle-right"></i>
                        </a>
                            <a href="index.html">
                            <img class="img-fluid" src="{{ url('img/logo.png') }}" alt="Theme-Logo" />
                        </a>
                            <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox">
                                        <!-- <a href="{{ url('pesan')}}">
                                            <i class="feather icon-message-square"></i>
                                            <span class="badge bg-c-green">1</span>
                                        </a> -->
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <span id="uploaded_image">
                                        <img src="{{ url('photos/photo/'.Session::get('UserFile')) }}" class="img-radius" alt="User-Profile-Image"></span>
                                        <span>{{ Session::get('UserName')}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a data-toggle="modal" data-target="#GantiPp">
                                            <i class="icofont icofont-ui-user"></i> Ganti Foto Profil
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" data-target="#GantiPassword">
                                            <i class="icofont icofont-key-hole"></i> Ganti Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('keluar') }}">
                                            <i class="feather icon-log-out"></i> Logout
											</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @include('pages.user.gantipp')
            @include('pages.user.gantipassword')