<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="/home">
        <img class="navbar-brand-full"
            src="https://res.cloudinary.com/tesseract/image/upload/c_scale,h_40/v1567194453/grupo-tesseract/LOGO_PRETO_HORIZONTAL_SEM_FUNDO.png"
            width="135" height="40" alt="Grupo Tesseract">

        <img class="navbar-brand-minimized"
            src="https://res.cloudinary.com/tesseract/image/upload/c_scale,h_40/v1567194453/grupo-tesseract/LOGO_PRETO_HORIZONTAL_SEM_FUNDO.png"
            width="135" height="40" alt="Grupo Tesseract">
    </a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-user"></i> {!! Auth::user()->nome !!} <i class="fa fa-caret-down"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{!! url('/logout') !!}"
                    class="btn btn-default btn-flat"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</header>
