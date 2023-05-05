<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

<title>Admin: {{Auth::user()->name}} WillMaca Seguridad</title>

@include('willmaca.admin.head_admin')

</head>

<body>
    <!-- Start: sticky dark top nav with dropdown -->

        @include('willmaca.admin.menu_admin')

        {{-- <pre>{{ Auth::user() }}</pre> --}}
        
        @if(session('status'))
        <div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session('status') }}        
        </div>
        @endif
        
    <!-- Start: Responsive Form -->
    <div class="container-fluid text-center mt-3" id="form_respon">
        <div>

            @if($errors->any())
            <div class="alert alert-danger text-center alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <span>{{ Session::get('mensaje') }}</span>
    </div>
    @endif

            <form action="{{ route('registro.productos') }}" method="POST" enctype="multipart/form-data">
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
                                    <input class="form-control" type="file" name="file" value="{{ old('file') }}">
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
    
    

    {{-- <script src="../../assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js?h=5488c86a1260428f0c13c0f8fb06bf6a"></script>
    <script src="../../assets/js/bs-init.js?h=c2d754b9fdb00c16b83288d03c5c4a10"></script>
    <script src="../../assets/js/Grid-and-List-view-V10.js?h=b9dd39d70f0e16751bb87414f6fa775c"></script>
    <script src="../../assets/js/MUSA_carousel-extended.js?h=3cc665fa994235502c2cb3ef7a81326b"></script>
    <script src="../../assets/js/Parallax-Scrolling-Horizontal-plus-Vertical.js?h=392733ad78a70966bd5d4d747fce6268"></script> --}}
    @include('willmaca.admin.admin_script')

</body>

</html>