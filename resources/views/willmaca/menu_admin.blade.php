<nav class="navbar navbar-light navbar-expand-xl sticky-top textwarning bg-dark bg-gradient text-center text-warning navbar-fixed-top navigation-clean-button" style="background: var(--bs-dark);">
    <div class="container-fluid">
        <div><a class="navbar-brand" href="#"><span class="bounce animated"><img src="../../assets/img/314932241_3575335546035850_3573432191079918083_n.jpg?h=2f67c1992273a49325bfdf8d546cb39b">WillMaca</span> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol" id="button_expand"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        <div class="collapse navbar-collapse" id="navcol">
            <ul class="navbar-nav nav-right">
                <li class="nav-item"><a class="nav-link active border-1 border-secondary" id="background_menu" href="{{route('formulario.productos')}}" style="color: var(--bs-white);text-align: center;font-weight: bold;">Inicio</a></li>
                <li class="nav-item dropdown border-1 border-secondary" id="background_menu">
                    <a class="dropdown-toggle nav-link fw-bold text-center border rounded border-1 border-secondary shadow-lg" aria-expanded="false" data-bs-toggle="dropdown" id="background_menu" href="#" style="color: var(--bs-white);">Productos</a>
                    <div class="dropdown-menu border-1 border-secondary" id="background_menu">
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.guantes') }}">Guantes</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.tapa_bocas') }}">Tapa Bocas</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.botas') }}">Botas</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.lentes') }}">Lentes</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.trajes') }}">Trajes de Bio Seguridad</a>
                    </div>
                </li>
                <li class="nav-item dropdown border-1 border-secondary" id="background_menu"><a class="dropdown-toggle nav-link fw-bold text-center border rounded border-1 border-secondary shadow-lg" aria-expanded="false" data-bs-toggle="dropdown" id="background_menu" href="#" style="color: var(--bs-white);">Listado</a>
                    <div class="dropdown-menu border-1 border-secondary" id="background_menu">
                        <a class="active dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{route('willmaca.listado_guantes')}}">Guantes</a>
                        <a class="active dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.listado_tapa_bocas') }}">Tapa Bocas</a>
                        <a class="active dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.listado_botas') }}">Botas</a>
                        <a class="active dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.listado_lentes') }}">Lentes</a>
                        <a class="active dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.listado_trajes') }}">Trajes de Bio Seguridad</a>
                    </div>
                </li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link text-center" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="background_menu" href="#">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    {{-- <div class="dropdown-menu dropdown-menu-start dropdown-menu-dark"><a class="dropdown-item" id="background_menu_drop" href="#">First Item</a><a class="dropdown-item" id="background_menu_drop" href="#">Second Item</a><a class="dropdown-item" id="background_menu_drop" href="#">Third Item</a></div> --}}
                </li>
            </ul
            <p class="ms-auto navbar-text actions"> </p>
        </div>
    </div>
</nav>

<div class="container-fluid" id="container_marquee" style="padding-right: 0px;padding-left: 0px;">
    <div class="row" style="color: var(--bs-blue);">
       
        <div>
            <marquee behavior="alternate" bgcolor="#212529" direction="right" style="color: #ffffff; font-size: 20px; font-weight: bolder; line-height: 150%; text-shadow: #000000 0px 1px 1px;"onmousedown="this.stop()" onmouseup="this.start()">Salmo 127:1= Si Dios no construye la casa, de nada sirve que se esfuercen los constructores.</marquee>
        </div>
    </div>
</div>