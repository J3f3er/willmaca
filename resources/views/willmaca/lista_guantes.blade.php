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
                                <td id="namep">{{ $product->nombre }}</td>
                                <td>{{ $product->precio }}</td>
                                <td>{{ $product->categoria }}</td>
                                <td>{{ $product->descripcion }}</td>
                                <th class="text-center align-middle" style="max-height: 60px;height: 60px;">
                                    <a id="btn_edit" class="btn btn-primary" href="javascript:void(0)" data-id="{{$product->id}}"  data-bs-target="#modal_edit" data-bs-toggle="modal">Editar&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-edit">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"></path>
                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"></path>
                                        <line x1="16" y1="5" x2="19" y2="8"></line>
                                    </svg>
                                </a>
                                {{--<button class="btn btn-danger" type="button" data-bs-target="#modal_delete" data-bs-toggle="modal">Borrar&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="4" y1="7" x2="20" y2="7"></line>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg></button>
                                <input class="form-control-lg" type="hidden" name="id" value="{{$product->id}}" id="id"> --}}
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modales --}}

    {{-- Modal Edit --}}

    @include('willmaca.admin.modal_edit')

    {{-- Modal Delete --}}

    @include('willmaca.admin.modal_delete')

    @include('willmaca.admin.admin_script')

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#mi_tabla').DataTable({
                processing: true,
                "ColumnDefs":[{
                    "targets": -1,
                    "data": null,
                    "defaultContent": "<button id='btn_edit' class='btn btn-primary' type='button' data-bs-target='#modal_edit' data-bs-toggle='modal'>Editar&nbsp;<svg xmlns='http://www.w3.org/2000/svg' width='1em' height='1em' viewBox='0 0 24 24' stroke-width='2' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round' class='icon icon-tabler icon-tabler-edit'><path stroke='none' d='M0 0h24v24H0z' fill='none'></path><path d='M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3'></path><path d='M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3'></path><line x1='16' y1='5' x2='19' y2='8'></line></svg></button>",
                }],
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

        $("#btn_edit").on('click', function(){
                let id = $(this).data('id');
                let nombre = $("#namep").val(this);

                console.log(id);
        });
    </script>
</body>
</html>