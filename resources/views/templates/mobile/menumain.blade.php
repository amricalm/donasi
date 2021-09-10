<div class="main-menu">
    <div class="row mb-4 no-gutters">
        <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span class="material-icons">chevron_left</span></button></div>
    </div>
    <div class="menu-container">
        <ul class="nav nav-pills flex-column ">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('home') }}">
                    <div>
                        <span class="material-icons icon">account_balance</span>
                        Home
                    </div>
                    <span class="arrow material-icons">chevron_right</span>
                </a>
            </li>
        </ul>
        <div class="text-center">
            <a href="{{ url('logout') }}" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Logout</a>
        </div>
    </div>
</div>
<div class="backdrop"></div>
@stack('menumain')