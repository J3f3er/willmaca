<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>proyecto_willmaca</title>
    <link rel="icon" type="image/jpeg" sizes="150x150" href="../../assets/img/314932241_3575335546035850_3573432191079918083_n.jpg?h=2f67c1992273a49325bfdf8d546cb39b">
    <link rel="icon" type="image/jpeg" sizes="150x150" href="../../assets/img/314932241_3575335546035850_3573432191079918083_n.jpg?h=2f67c1992273a49325bfdf8d546cb39b">
    <link rel="icon" type="image/jpeg" sizes="150x150" href="../../assets/img/314932241_3575335546035850_3573432191079918083_n.jpg?h=2f67c1992273a49325bfdf8d546cb39b">
    <link rel="icon" type="image/jpeg" sizes="150x150" href="../../assets/img/314932241_3575335546035850_3573432191079918083_n.jpg?h=2f67c1992273a49325bfdf8d546cb39b">
    <link rel="icon" type="image/jpeg" sizes="150x150" href="../../assets/img/314932241_3575335546035850_3573432191079918083_n.jpg?h=2f67c1992273a49325bfdf8d546cb39b">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css?h=db809bb2e50701aac4adf16542874740">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="../../assets/css/Background-Image---Parallax---No-Text.css?h=613c04c837f8f36188e28873796924a0">
    <link rel="stylesheet" href="../../assets/css/Drag-Drop-File-Input-Upload.css?h=ff27182496a726ff7d29f5ad440baca8">
    <link rel="stylesheet" href="../../assets/css/droplista.css?h=3d2ef9d6704ae49b2fcaf20010f62b55">
    <link rel="stylesheet" href="../../assets/css/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.css?h=0e87b50b50331132a2fddc30af683913">
    <link rel="stylesheet" href="../../assets/css/Grid-and-List-view-V10-1.css?h=0afe662e8b70bbd5cd39e3765bd02184">
    <link rel="stylesheet" href="../../assets/css/Grid-and-List-view-V10.css?h=1f72c4994fa59c09852043238af38856">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../../assets/css/Landing-Page---Parallax-Background---Logo-Heading-ButtonGIF.css?h=e5f0bfafa428a31ce7cc96e59deb1621">
    <link rel="stylesheet" href="../../assets/css/mascota.css?h=a83916ee4e928e978394dbeef74bf7ee">
    <link rel="stylesheet" href="../../assets/css/menu.css?h=d9e9ab0d76811a66439c929e0ac0a162">
    <link rel="stylesheet" href="../../assets/css/paragrafo_negro.css?h=ac99cf4705c25481956ad4d80d97934f">
    <link rel="stylesheet" href="../../assets/css/Parallax-Scroll-Effect.css?h=9a7e289f5a8ba10882b8f0afdca5270d">
    <link rel="stylesheet" href="../../assets/css/Parallax-Scrolling-Horizontal-plus-Vertical.css?h=b392fc1e2a3f47cc70825db427224683">
    <link rel="stylesheet" href="../../assets/css/Projects-Grid-Horizontal.css?h=4f3cfa46e40e236365345fc77963f4b8">
    <link rel="stylesheet" href="../../assets/css/Responsive-Form-1.css?h=c6261da663e77c52ac9a03330e69905e">
    <link rel="stylesheet" href="../../assets/css/Responsive-Form.css?h=d96b666ea3b273588c2e8e3b011cf2f9">
    <link rel="stylesheet" href="../../assets/css/Simple-galeria-de-productos-1.css?h=3807ef8c506528159f8393ad052d2c6e">
    <link rel="stylesheet" href="../../assets/css/Simple-galeria-de-productos.css?h=bea673c0b5557f2b7e8f27449366bde4">
    <link rel="stylesheet" href="../../assets/css/sticky-dark-top-nav-with-dropdown.css?h=2bf54df413781017b12488f807b9411c">
    <link rel="stylesheet" href="../../assets/css/styles.css?h=d41d8cd98f00b204e9800998ecf8427e">
</head>

<body>
    <!-- Start: sticky dark top nav with dropdown -->

        @include('willmaca.menu_admin')


    <!-- Start: Responsive Form -->
    <div class="container-fluid text-center mt-3" id="form_respon">
        <div>

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

            <form action="{{ route('regitro.productos') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <div id="formdiv">
                        <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 col-xl-5 offset-md-1 text-center">
                                <p class="text-center" id="form_div_p" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;">
                                    <strong>Nombre del producto</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input class="form-control" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" style="margin-left:0px;font-family:Roboto, sans-serif;" name="nombre" placeholder="Ingrese el nombre del producto" value="{{ old('nombre') }}" title="Nombre">
                            </div>
                        </div>
                        <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;margin-top:-16px;">
                            <div class="col-md-8 col-xl-5 offset-md-1 offset-xl-1 text-center">
                                <p class="text-capitalize text-center" id="form_div_p" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;">
                                    <strong>Precio</strong>
                                    </p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <input class="form-control" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" id="input_marca" style="font-family:Roboto, sans-serif;" name="precio" value="{{ old('precio') }}" placeholder="Ingrese el precio..." title="Precio"></div>
                        </div>
                        <div class="row text-center" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 col-xl-6 offset-md-1 offset-xl-0 text-center">
                                <p class="text-center" id="form_div_p" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;">
                                    <strong>Descripción</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><textarea class="form-control" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" style="font-family:Roboto, sans-serif;" placeholder="Breve descripción" name="descripción" title="Descripción">{{ old('descripción') }}</textarea></div>
                        </div>
                        <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 col-xl-5 offset-md-1 text-center">
                                <p class="text-center" id="form_div_p" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;">
                                    <strong>Categoría</strong></p>
                                    <br>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <select class="form-select form-select-lg" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" name="categoria" title="Categoria">
                                    <optgroup label="Selecciona una categoria"></optgroup>
                                        @foreach($categoria as $category)
                                            <option value="{{ $category->nombre }}">{{ $category->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 col-xl-5 offset-md-1 text-center">
                                <p id="form_div_p" style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;">Subir Foto<br></p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <!-- Start: Custom file input v03 -->
                                <div class="input-group">
                                    <div class="input-group-prepend"></div>
                                    <div class="custom-file">
                                        <label class="form-label custom-file-label mt-4" for="inputGroupFile03">
                                            <strong>Seleccionar Archivo</strong>
                                        </label>
                                    </div>
                                </div><!-- End: Custom file input v03 -->
                                <!-- Start: Drag Drop File Input Upload -->
                                <div class="files color form-group mb-3">
                                    <input class="form-control" type="file" name="file">
                                </div><!-- End: Drag Drop File Input Upload -->
                            </div>
                        </div>
                        <div class="row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-12 col-md-4 offset-md-4 text-center">
                                <button class="btn btn-outline-danger btn-lg active" style="font-family:Roboto, sans-serif;" type="reset"><strong>Borrar </strong></button>
                                <button class="btn btn-primary btn-lg active text-center" style="margin-left:16px;" type="submit"><strong>Enviar </strong></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- End: Responsive Form -->
    
    

    <script src="../../assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js?h=5488c86a1260428f0c13c0f8fb06bf6a"></script>
    <script src="../../assets/js/bs-init.js?h=c2d754b9fdb00c16b83288d03c5c4a10"></script>
    <script src="../../assets/js/Grid-and-List-view-V10.js?h=b9dd39d70f0e16751bb87414f6fa775c"></script>
    <script src="../../assets/js/MUSA_carousel-extended.js?h=3cc665fa994235502c2cb3ef7a81326b"></script>
    <script src="../../assets/js/Parallax-Scrolling-Horizontal-plus-Vertical.js?h=392733ad78a70966bd5d4d747fce6268"></script>
</body>

</html>