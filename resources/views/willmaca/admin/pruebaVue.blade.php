<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        
        <title>Admin: {{ Auth::user()->name }} WillMaca Seguridad</title>
        
        @include('willmaca.admin.head_admin')
        
        </head>

<body>
    <!-- Start: sticky dark top nav with dropdown -->

        @include('willmaca.admin.menu_admin')

        {{-- <pre>{{ Auth::user() }}</pre> --}}

    

            
    
    

    {{-- <script src="../../assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js?h=5488c86a1260428f0c13c0f8fb06bf6a"></script>
    <script src="../../assets/js/bs-init.js?h=c2d754b9fdb00c16b83288d03c5c4a10"></script>
    <script src="../../assets/js/Grid-and-List-view-V10.js?h=b9dd39d70f0e16751bb87414f6fa775c"></script>
    <script src="../../assets/js/MUSA_carousel-extended.js?h=3cc665fa994235502c2cb3ef7a81326b"></script>
    <script src="../../assets/js/Parallax-Scrolling-Horizontal-plus-Vertical.js?h=392733ad78a70966bd5d4d747fce6268"></script> --}}
    @include('willmaca.admin.admin_script')
    {{-- <div id="app">{{ message }}</div> --}}

<div id="app"></div>

<div id="tableta"></div>
    
@vite('resources/js/app.js')


</body>

</html>