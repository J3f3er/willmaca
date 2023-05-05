{{-- Versión 1.0
<nav class="navbar navbar-light navbar-expand-xl sticky-top textwarning bg-dark bg-gradient text-center text-warning navbar-fixed-top navigation-clean-button" style="background: var(--bs-dark);">
    <div class="container-fluid">
        <div><a class="navbar-brand" href="#"><span class="bounce animated"><img src="{{asset('assets/img/314932241_3575335546035850_3573432191079918083_n.jpg?h=2f67c1992273a49325bfdf8d546cb39b')}}">WillMaca</span> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" id="button_expand"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav nav-right">
                <li class="nav-item"><a class="nav-link active border-1 border-secondary" id="background_menu" href="{{route('willmaca.index')}}" style="color: var(--bs-white);text-align: center;font-weight: bold;">Inicio</a></li>
                <li class="nav-item border-1 border-secondary" id="background_menu"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#mision" style="color: var(--bs-white);box-shadow: inset 0px 0px;font-weight: bold;">Misión</a></li>
                <li class="nav-item text-center border-1 border-secondary" id="background_menu" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#vision" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Visión</a></li>
                <li class="nav-item text-center border-1 border-secondary" id="background_menu" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#quienes_somos" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Quienes Somos</a></li>
                <li class="nav-item text-center border-1 border-secondary" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#contactanos" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Contáctanos</a></li>
                <li class="nav-item text-center border-1 border-secondary" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="{{ route('login') }}" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Log In</a></li>
                {{-- <li class="nav-item text-center border-1 border-secondary" style="box-shadow: inset 0px 0px;"><a class="btn btn-light text-center action-button" role="button" href="signup.html" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);">Sign Up</a></li> --}}
            {{-- </ul> --}}
            <!-- Start: Actions -->
            {{-- <p class="ms-auto navbar-text actions"> </p> --}}
            <!-- End: Actions -->
        {{-- </div>
    </div>
</nav> --}}

<nav class="navbar navbar-light navbar-expand-xl sticky-top textwarning bg-dark bg-gradient text-center text-warning navbar-fixed-top navigation-clean-button" style="background: var(--bs-dark);">
    <div class="container-fluid">
        <div><a class="navbar-brand" href="#"><span class="bounce animated"><img src="{{ asset('assets/img/314932241_3575335546035850_3573432191079918083_n.jpg') }}">WillMaca</span> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" id="button_expand"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav nav-right">
                <li class="nav-item"><a class="nav-link active border-1 border-secondary" id="background_menu" href="{{route('willmaca.index')}}" style="color: var(--bs-white);text-align: center;font-weight: bold;">Inicio</a></li>
                <li class="nav-item dropdown border-1 border-secondary" id="background_menu">
                    <a class="dropdown-toggle nav-link fw-bold text-center border rounded border-1 border-secondary shadow-lg" aria-expanded="false" data-bs-toggle="dropdown" id="background_menu" href="#" style="color: var(--bs-white);">Productos</a>
                    <div class="dropdown-menu border-1 border-secondary" id="background_menu-4">
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.guantes') }}">Guantes</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.tapa_bocas') }}">Tapa Bocas</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.botas') }}">Botas</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.lentes') }}">Lentes</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.trajes') }}">Trajes de Bio Seguridad</a></div>
{{--                         <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.pretty') }}">Pretty</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.pretty.guantes') }}">Pretty Guantes</a>
                        <a class="dropdown-item link-light bg-dark bg-gradient border rounded" id="background_menu_drop" href="{{ route('willmaca.pretty.botas') }}">Pretty Botas</a> --}}
                </li>
                <li class="nav-item border-1 border-secondary" id="background_menu">
                    <a class="nav-link text-center border-1 border-secondary link_mision" id="background_menu" href="#" style="color: var(--bs-white);box-shadow: inset 0px 0px;font-weight: bold;" data-bs-target="#modal_mision" data-bs-toggle="modal">Misión</a></li>
                <li class="nav-item text-center border-1 border-secondary" id="background_menu" style="box-shadow: 0px 0px var(--bs-white);">
                    <a class="nav-link text-center border-1 border-secondary link_vision" id="background_menu" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;" data-bs-toggle="modal" data-bs-target="#modal_vision">Visión</a></li>
                <li class="nav-item text-center border-1 border-secondary" id="background_menu" style="box-shadow: 0px 0px var(--bs-white);">
                    <a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Quienes Somos</a></li>
                <li class="nav-item text-center border-1 border-secondary" style="box-shadow: 0px 0px var(--bs-white);">
                    <a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#contactanos" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Contáctanos</a></li>
                <li class="nav-item text-center border-1 border-secondary" style="box-shadow: 0px 0px var(--bs-white);">
                    {{-- <a class="nav-link text-center border-1 border-secondary" id="background_menu" href="{{route('login')}}" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Log In</a></li> --}}
                <li class="nav-item text-center border-1 border-secondary" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;" data-bs-target="#modal_login" data-bs-toggle="modal">Log In</a></li>
                {{-- <li class="nav-item text-center border-1 border-secondary" style="box-shadow: inset 0px 0px;">
                    <a class="btn btn-light text-center action-button" role="button" href="signup.html" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);">Sign Up</a></li> --}}
            </ul>
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

<div class="modal fade text-center text-dark" role="dialog" tabindex="-1" id="modal_login">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Login Willmaca C.A&nbsp;</strong><img src="assets/img/314932241_3575335546035850_3573432191079918083_n.jpg" width="32px" height="32px"></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center mb-0"><strong>Formulario de Login:</strong></p>
                <hr class="mt-5">
                <section class="position-relative py-4 py-xl-5">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-5">
                                    <div class="card-body d-flex flex-column align-items-center">
                                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                            </svg></div>
                                            @if($errors->any())
                                            <div class="alert alert-danger text-center" role="alert">
                                                <ul>
                                                    <h3 class="alert-heading text-capitalize text-center">Mensaje de Error</h3>
                                                    @foreach($errors->all() as $error)
                                                            <li>
                                                                <span class="text-capitalize text-center"><strong>{{ $error }}</strong></span>
                                                            </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <form class="text-center" method="post" action="{{ route('willmaca.login.verify') }}">
                                            @csrf
                                            <div class="mb-3"><input class="form-control form-control-lg" type="text" name="email" placeholder="Email" value="{{ old('email') }}"></div>
                                            <label>
                                            @error('email')
                                                <br>
                                                <strong>{{$message}}</strong>
                                                <br>
                                                @enderror
                                            </label>
                                            
                                            <div class="mb-3"><input class="form-control form-control-lg" type="password" name="password" placeholder="Password" value="{{ old('contraseña') }}"></div>
                                            @error('password')
                                                <br>
                                                <strong>{{$message}}</strong>
                                                <br>
                                                @enderror
                                            </label>
                                            <div class="mb-3"><button class="btn btn-primary font-monospace text-capitalize fs-5 fw-bolder text-center d-block w-100" type="submit">Login</button><a class="text-capitalize text-center" href="#"><strong>Olvido su contraseña?</strong></a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer text-uppercase fs-1 text-center"><button class="btn btn-danger btn-lg font-monospace fw-bolder text-center" type="button" data-bs-dismiss="modal">Cerrar</button></div>
        </div>
    </div>
</div>



{{-- <div class="modal fade text-dark" role="dialog" tabindex="-1" id="modal_login">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Login Willmaca C.A&nbsp;</strong><img src="assets/img/314932241_3575335546035850_3573432191079918083_n.jpg" width="32px" height="32px"></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center mb-0"><strong>Formulario de Login:</strong></p>

                <hr class="mt-5"><label class="form-label">
                    <form action="{{ route("willmaca.login.verify") }}" method="POST">
                        @csrf
                    <strong>Nombre:&nbsp;</strong></label><input type="text" id="input_text" name="user">
            </div><label class="form-label"><strong>Password:&nbsp;</strong></label><input type="password" name="psw">
            <div class="modal-footer"><button class="btn btn-danger text-center" type="button" data-bs-dismiss="modal"><strong><span style="background-color: rgb(224, 76, 64);">Cerrar</span></strong></button><button class="btn btn-primary text-center" type="button"><strong>Login</strong></button></div>
        </div>
    </div>
</div> --}}



