<!DOCTYPE html>
<html lang="en" style="color: var(0,0,0);">

    @include('willmaca.head_index')

<body>
    @include('willmaca.index_menu')

    <div class="container-fluid" style="width: 99%;">
        <div class="carousel slide text-primary" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item active"><img class="w-100 d-block" src="{{asset('assets/img/seguridad3.jpg')}}" alt="Slide Image" style="height: 500px;"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="{{asset('assets/img/seguridad4.jpg')}}" alt="Slide Image" style="height: 500px;"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="{{asset('assets/img/mascota.jpg')}}" alt="Slide Image" style="height: 500px;"></div>
            </div>
            <div><a class="carousel-control-prev text-primary" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon text-primary" style="background: var(--bs-yellow);"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" style="background: var(--bs-yellow);"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <div data-bss-parallax-bg="true" class="mt-5 mb-5" style="height: 500px;background-image: url(&quot;{{asset('assets/img/mascota.jpg')}}&quot;);background-position: center;background-size: cover;"></div>
    <div class="container">
        <div class="row">
            <h1 data-aos="fade-left" data-aos-duration="2050" data-aos-once="true"><span style="color: rgb(0, 0, 0);">Información de nuestros productos:</span></h1>
        </div>
    </div>
    <div>
        <div class="container" id="container_info">
            <div class="row">
                <div class="col-auto col-xxl-4 offset-xxl-0 text-center align-self-center col-lg-4" id="column_info"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="{{asset('assets/img/Guante-anticorte.jpg')}}" style="width: 140px;height: 140px;" title="Guantes">
                    <h2>Guantes</h2><p style="text-align: justify">"Prenda que cubre y protege la mano y que, según su empleo, tiene unas características distintas pudiendo tener una funda para cada uno de los dedos, cubrir parte del brazo y variar el tipo de material en que está confeccionada."</p><a class="btn btn-primary" role="button" id="guantes" href="{{ route('willmaca.guantes') }}">Mas Información</a>
                </div>
                <div class="col text-center col-lg-4"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="{{asset('assets/img/zyro-image.jpg')}}" style="width: 140px;height: 140px;" title="Guantes">
                    <h2 style="text-align: center;">Tapa Bocas</h2><p style="text-align: justify">"Prenda que cubre y protege la mano y que, según su empleo, tiene unas características distintas pudiendo tener una funda para cada uno de los dedos, cubrir parte del brazo y variar el tipo de material en que está confeccionada."</p><a class="btn btn-primary" role="button" id="lentes" href="">Mas Información</a>
                </div>
                <div class="col text-center col-lg-4"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="{{asset('assets/img/calzado-de-seguridad-durango.png')}}" style="width: 140px;height: 140px;" title="Guantes">
                    <h2 style="text-align: center;">Botas</h2><p style="text-align: justify">"calzado que protege el pie, el tobillo y un sector de la pierna."</p><a class="btn btn-primary" role="button" id="botas" href="{{ route('willmaca.botas') }}">Mas Información</a>
                </div>
            </div>
            <div class="row">
                <div class="col-auto col-xxl-4 offset-xxl-0 text-center align-self-center col-lg-4"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="{{asset('assets/img/lentes.png')}}" style="width: 140px;height: 140px;" title="Guantes">
                    <h2>Lentes</h2><p style="text-align: justify">"Las gafas de protección, también conocidas como goggles o lentes de seguridad, son un tipo especial de anteojos que se utilizan para proteger párpados y ojos de la acción corrosiva de algunas sustancias o de la entrada en estos de alguna viruta procedente de algún trabajo de maquinado o similar."</p><button class="btn btn-primary" type="button">Mas Información</button>
                </div>
                <div class="col text-center col-lg-4"><img class="rounded-circle img-fluid shadow-lg" data-bs-toggle="tooltip" data-bss-tooltip="" src="{{asset('assets/img/image.png')}}" style="width: 140px;height: 140px;" title="Guantes">
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

    @include('willmaca.indexes')

</body>

</html>