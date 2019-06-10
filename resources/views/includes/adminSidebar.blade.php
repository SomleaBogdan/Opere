<div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-smst-default flex-md-nowrap border-bottom p-0">
        <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
            <div class="d-table m-auto">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="padding-left: 25px; max-width: 60%; margin:0 auto;" src="{{URL::asset('/assets/images/logo.svg')}}" alt="">
            </div>
        </a>
        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
            <i class="material-icons">&#xE5C4;</i>
        </a>
    </nav>
</div>
<div class="nav-wrapper">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="fa fa-user"></i>
                    <span>Profilul Meu</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/anunturi">
                <i class="fa fa-bullhorn"></i>
                    <span>Anunturile Mele</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/mesaje">
                <i class="fa fa-comment"></i>
                    <span>Mesaje</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/oferte">
                <i class="fa fa-usd"></i>
                    <span>Oferte Primite</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                <i class="fa fa-power-off"></i>
                    <span>Logout</span>
            </a>
        </li>
    <form id="frm-logout" action="#" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>