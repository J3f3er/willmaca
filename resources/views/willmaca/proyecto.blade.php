<!DOCTYPE html>
<html lang="en" style="color: var(0,0,0);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>proyecto_willmaca</title>
    @include('willmaca.head_index')
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-xl sticky-top textwarning bg-dark bg-gradient text-center text-warning navbar-fixed-top navigation-clean-button" style="background: var(--bs-dark);">
        <div class="container-fluid">
            <div><a class="navbar-brand" href="#"><span class="bounce animated"><img src="assets/img/314932241_3575335546035850_3573432191079918083_n.jpg">WillMaca</span> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" id="button_expand"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item"><a class="nav-link active border-1 border-secondary" id="background_menu" href="{{route('willmaca.index')}}" style="color: var(--bs-white);text-align: center;font-weight: bold;">Inicio</a></li>
                    <li class="nav-item border-1 border-secondary" id="background_menu"><a class="nav-link text-center border-1 border-secondary link_mision" id="background_menu" href="#" style="color: var(--bs-white);box-shadow: inset 0px 0px;font-weight: bold;" data-bs-target="#modal_mision" data-bs-toggle="modal">Misión</a></li>
                    <li class="nav-item text-center border-1 border-secondary" id="background_menu" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary link_vision" id="background_menu" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;" data-bs-toggle="modal" data-bs-target="#modal_vision">Visión</a></li>
                    <li class="nav-item text-center border-1 border-secondary" id="background_menu" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Quienes Somos</a></li>
                    <li class="nav-item text-center border-1 border-secondary" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#contactanos" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;">Contáctanos</a></li>
                    <li class="nav-item text-center border-1 border-secondary" style="box-shadow: 0px 0px var(--bs-white);"><a class="nav-link text-center border-1 border-secondary" id="background_menu" href="#" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);font-weight: bold;" data-bs-target="#modal_login" data-bs-toggle="modal">Log In</a></li>
                    <li class="nav-item text-center border-1 border-secondary" style="box-shadow: inset 0px 0px;"><a class="btn btn-light text-center action-button" role="button" href="signup.html" style="color: var(--bs-white);box-shadow: inset 0px 0px var(--bs-white);">Sign Up</a></li>
                </ul>
                <p class="ms-auto navbar-text actions"> </p>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="container_marquee" style="padding-right: 0px;padding-left: 0px;">
        <div class="row" style="color: var(--bs-blue);"><div>
<marquee behavior="alternate" bgcolor="#212529" direction="right" style="color: #ffffff; font-size: 20px; font-weight: bolder; line-height: 150%; text-shadow: #000000 0px 1px 1px;"onmousedown="this.stop()" onmouseup="this.start()">Salmo 127:1= Si Dios no construye la casa, de nada sirve que se esfuercen los constructores.</marquee>
</div></div>
    </div>
    <div class="container-fluid" style="width: 99%;">
        <div class="carousel slide text-primary" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/seguridad3.jpg" alt="Slide Image" style="height: 500px;"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/seguridad4.jpg" alt="Slide Image" style="height: 500px;"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/mascota.jpg" alt="Slide Image" style="height: 500px;"></div>
            </div>
            <div><a class="carousel-control-prev text-primary" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon text-primary" style="background: var(--bs-yellow);"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" style="background: var(--bs-yellow);"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div data-bss-parallax-bg="true" class="mt-5 mb-5" style="height: 500px;background-image: url(&quot;assets/img/mascota.jpg&quot;);background-position: center;background-size: cover;"></div>
    <div class="container">
        <div class="row">
            <h1 data-aos="fade-left" data-aos-duration="2050" data-aos-once="true"><span style="color: rgb(0, 0, 0);">Información de nuestros productos:</span></h1>
        </div>
    </div>
    <div>
        <div class="container" id="container_info">
            <div class="row">
                <div class="col-auto col-xxl-4 offset-xxl-0 text-center align-self-center col-lg-4" id="column_info"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="assets/img/Guante-anticorte.jpg" style="width: 140px;height: 140px;" title="Guantes">
                    <h2>Guantes</h2><p style="text-align: justify">"Prenda que cubre y protege la mano y que, según su empleo, tiene unas características distintas pudiendo tener una funda para cada uno de los dedos, cubrir parte del brazo y variar el tipo de material en que está confeccionada."</p><a class="btn btn-primary" role="button" id="guantes" href="{{ route('willmaca.guantes') }}">Mas Información</a>
                </div>
                <div class="col text-center col-lg-4"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="assets/img/zyro-image.jpg" style="width: 140px;height: 140px;" title="Guantes">
                    <h2 style="text-align: center;">Tapa Bocas</h2><p style="text-align: justify">"Prenda que cubre y protege la mano y que, según su empleo, tiene unas características distintas pudiendo tener una funda para cada uno de los dedos, cubrir parte del brazo y variar el tipo de material en que está confeccionada."</p><a class="btn btn-primary" role="button" id="lentes" href="">Mas Información</a>
                </div>
                <div class="col text-center col-lg-4"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="assets/img/calzado-de-seguridad-durango.png" style="width: 140px;height: 140px;" title="Guantes">
                    <h2 style="text-align: center;">Botas</h2><p style="text-align: justify">"calzado que protege el pie, el tobillo y un sector de la pierna."</p><a class="btn btn-primary" role="button" id="botas" href="{{ route('willmaca.botas') }}">Mas Información</a>
                </div>
            </div>
            <div class="row">
                <div class="col-auto col-xxl-4 offset-xxl-0 text-center align-self-center col-lg-4"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="assets/img/lentes.png" style="width: 140px;height: 140px;" title="Guantes">
                    <h2>Lentes</h2><p style="text-align: justify">"Las gafas de protección, también conocidas como goggles o lentes de seguridad, son un tipo especial de anteojos que se utilizan para proteger párpados y ojos de la acción corrosiva de algunas sustancias o de la entrada en estos de alguna viruta procedente de algún trabajo de maquinado o similar."</p><button class="btn btn-primary" type="button">Mas Información</button>
                </div>
                <div class="col text-center col-lg-4"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="assets/img/image.png" style="width: 140px;height: 140px;" title="Guantes">
                    <h2>Trajes de Bioseguridad</h2><p style="text-align: justify">"Estos trajes de bioseguridad cuenta con una tela con tratamiento antifluido y se recomienda para una interacción intermedia con otras personas, o para cuando no es posible mantener un distanciamiento social apropiado (contacto menor a 2 metros)."</p><button class="btn btn-primary" type="button">Mas Información</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container marketing">
        <div class="row featurette">
            <div class="clearfix">
                <h2 data-aos="flip-left" data-aos-duration="3000" data-aos-once="true" id="mision">Misión</h2>
                <p data-aos="flip-right" data-aos-duration="3000" data-aos-once="true">En Willmaca seguridad, analizamos el riesgo de cada empresa, comercio, negocio y hogar para diseñar la seguridad personalizada. Ofrecemos&nbsp; suministros industriales, con una amplia línea de productos de seguridad industrial y protección personal. En Willmaca no eres un cliente más, eres un amigo que requiere atención y asesoría.&nbsp;<br></p>
                <h2 data-aos="flip-right" data-aos-duration="3000" data-aos-once="true" id="vision">Visión</h2>
                <p data-aos="flip-left" data-aos-duration="3000" data-aos-once="true">Atender a la pequeña, media y gran industria. En Willmaca todos nuestros clientes reciben atención expedita y segura basado en los requerimientos.<br></p>
            </div>
        </div>
    </div>
    <footer data-aos="slide-up" data-aos-duration="3000" data-aos-once="true" id="footerpad">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/willmacase" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/willmacaseguridad/" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a></li>
                    </ul><p class="copyright text-muted text-center">Copyright &copy; Willmaca C.A | Web Diseñada por JeffCompany C.A</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade text-capitalize fs-3 fw-normal text-center bg-primary border-2 border-primary shadow float-start" role="dialog" tabindex="-1" id="modal_mision" style="height: 100%;">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Misión</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><br>En Willmaca seguridad, analizamos el riesgo de cada empresa, comercio, negocio y hogar para diseñar la seguridad personalizada. Ofrecemos&nbsp; suministros industriales, con una amplia línea de productos de seguridad industrial y protección personal. En Willmaca no eres un cliente más, eres un amigo que requiere atención y asesoría.&nbsp;<br><br></p>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <div class="modal fade text-capitalize fs-3 fw-normal text-center bg-primary border-2 border-primary shadow float-start" role="dialog" tabindex="-1" id="modal_vision" style="height: 100%;">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title text-center">Visión</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><br><br>Atender a la pequeña, media y gran industria. En Willmaca todos nuestros clientes reciben atención expedita y segura basado en los requerimientos.<br><br></p>
                </div>
                <div class="modal-footer"></div>
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
                                            <form class="text-center" method="post" action="{{ route(&quot;verify_login&quot;) }}">
                                                <div class="mb-3"><input class="form-control form-control-lg" type="email" name="email" placeholder="Email"></div>
                                                <div class="mb-3"><input class="form-control form-control-lg" type="password" name="password" placeholder="Password"></div>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js"></script>
    <script src="assets/js/Grid-and-List-view-V10.js"></script>
    <script src="assets/js/MUSA_carousel-extended.js"></script>
    <script src="assets/js/Parallax-Scrolling-Horizontal-plus-Vertical.js"></script>
</body>

</html>