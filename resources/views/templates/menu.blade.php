<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ (!empty($aktif)) ? '' : 'active'}}">
                @if(Session::get('UserGroupID') == 1)
                    <a href="{{ url('admin-home') }}" class="waves-effect waves-dark">
                @else
                    <a href="{{ url('home') }}" class="waves-effect waves-dark">
                @endif
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            @for ($i=0; $i < count(Session::get('UserMenu')); $i++)
                <li class="{{ (!empty($aktif) && Session::get('UserMenu')[$i]['Name'] == $aktif) ? 'active' : ''}} {{ (count(Session::get('UserMenu')[$i]['child']) > 0) ? 'pcoded-hasmenu' : ''}}">
                    <a href="{{ url(Session::get('UserMenu')[$i]['Url']) }}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="feather {{ Session::get('UserMenu')[$i]['Icon'] }}"></i></span>
                        <span class="pcoded-mtext">{{ Session::get('UserMenu')[$i]['Name'] }}</span>
                    </a>
                    @if (count(Session::get('UserMenu')[$i]['child']) > 0)
                        <ul class="pcoded-submenu">
                            @for($j=0;$j<count(Session::get('UserMenu')[$i]['child']);$j++)
                                <li class="{{(count(Session::get('UserMenu')[$i]['child'][$j]['child']) > 0) ? 'pcoded-hasmenu' : ''}}">
                                <a href="{{ (Session::get('UserMenu')[$i]['child'][$j]['Url']=='smm' && Session::get('UserGroupID')==9) ? url(Session::get('UserMenu')[$i]['child'][$j]['Url']) : url('#')}}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">{{ Session::get('UserMenu')[$i]['child'][$j]['Name'] }}</span>
                                </a>
                                @if(count(Session::get('UserMenu')[$i]['child'][$j]['child']) > 0)
                                    <ul class="pcoded-submenu">
                                    @for($k=0;$k<count(Session::get('UserMenu')[$i]['child'][$j]['child']);$k++)
                                    <li class="{{(count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child']) > 0) ? 'pcoded-hasmenu' : ''}}">
                                        <a href="{{ url(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['Url']) }}" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">{{ Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['Name'] }}</span>
                                        </a>
                                        @if(count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child']) > 0)
                                            <ul class="pcoded-submenu">
                                            @for($l=0;$l<count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child']);$l++)
                                            <li class="{{(count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child']) > 0) ? 'pcoded-hasmenu' : ''}}">
                                                <a href="{{ url(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['Url']) }}" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">{{ Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['Name'] }}</span>
                                                </a>
                                                @if(count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child']) > 0)
                                                    <ul class="pcoded-submenu">
                                                    @for($m=0;$m<count(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child']);$m++)
                                                    <li class="">
                                                        <a href="{{ url(Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child'][$m]['Url']) }}" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">{{ Session::get('UserMenu')[$i]['child'][$j]['child'][$k]['child'][$l]['child'][$m]['Name'] }}</span>
                                                        </a>
                                                    </li>
                                                    @endfor
                                                    </ul>
                                                @endif
                                            </li>
                                            @endfor
                                            </ul>
                                        @endif
                                    </li>
                                    @endfor
                                    </ul>
                                @endif
                            </li>
                            @endfor
                        </ul>
                    @endif
                </li>
            @endfor
        </ul>
    </div>
</nav>
