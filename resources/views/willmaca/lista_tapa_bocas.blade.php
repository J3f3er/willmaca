<!DOCTYPE html>
<html lang="es">

@include('willmaca.admin.head_admin')

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
                                <td id="nombre">{{ $product->nombre }}</td>
                                <td>{{ $product->precio }}</td>
                                <td>{{ $product->categoria }}</td>
                                <td>{{ $product->descripcion }}</td>
                                <th><button type="button" href="javascript:void(0)" ></button></th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('willmaca.admin.admin_script')
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