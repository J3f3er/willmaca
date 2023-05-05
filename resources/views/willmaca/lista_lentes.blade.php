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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>

<body>
    <!-- Start: sticky dark top nav with dropdown -->

    @include('willmaca.menu_admin')

    <div class="container mt-5">
        <div class="row">
            <div class="col" style="max-height: 100%;">
                <div class="table-responsive">
                    <table class="table" id="mi_tabla">
                        <thead>
                            <tr style="min-width: auto;max-width: 100%;">
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Categoría</th>
                                <th>Descripción</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($producto as $product)
                            <tr style="min-width: auto;max-width: 100%;">
                                <td>{{ $product->nombre }}</td>
                                <td>{{ $product->precio }}</td>
                                <td>{{ $product->categoria }}</td>
                                <td>{{ $product->descripcion }}</td>
                                <th>Acción</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js?h=5488c86a1260428f0c13c0f8fb06bf6a"></script>
    <script src="../../assets/js/bs-init.js?h=c2d754b9fdb00c16b83288d03c5c4a10"></script>
    <script src="../../assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js?h=27121030a219de035f70d1b28488f9b2"></script>
    <script src="../../assets/js/Grid-and-List-view-V10.js?h=b9dd39d70f0e16751bb87414f6fa775c"></script>
    <script src="../../assets/js/MUSA_carousel-extended.js?h=3cc665fa994235502c2cb3ef7a81326b"></script>
    <script src="../../assets/js/Parallax-Scrolling-Horizontal-plus-Vertical.js?h=392733ad78a70966bd5d4d747fce6268"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#mi_tabla').DataTable({
                processing: true,                                
                language: {
                    search: "Buscar: ",
                    info: "Cantidad de Registros _START_ de _END_ en _TOTAL_ mostrados",
                    lengthMenu:    "Cantidad _MENU_ Registros",
                    infoEmpty:      "No hay registros",
                    infoFiltered:   "(Filtros de _MAX_ total)",
                    infoPostFix:    "",
                    loadingRecords: "Cargando Datos...",
                    zeroRecords:    "No hay Datos",
                    emptyTable:     "Tabla Vacia",
                    paginate: {
                        first: "Primero",
                        previous: "Primera Pagina",
                        next: "Siguiente Pagina >>",
                        last: "Ultima"
                    }
                },
            });
        });
    </script>
</body>
</html>