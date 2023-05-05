<div class="modal fade" role="dialog" tabindex="-1" id="modal_delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Producto:</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-capitalize text-center">
                    <strong>¿Desea Eliminar este producto?</strong>
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-bs-dismiss="modal">
                    <strong>Cerrar</strong></button>
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal" data-bs-target="#modal_confirm_delete" data-bs-toggle="modal"><strong>Eliminar</strong>
                    </button>
                </div>
        </div>
    </div>
</div>

{{-- Modal De Confirmación --}}

<div class="modal fade" role="dialog" tabindex="-1" id="modal_confirm_delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Mensaje.</strong></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Producto Eliminado Correctamente.</strong></p>
            </div>
            <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><strong>Cerrar</strong></button></div>
        </div>
    </div>
</div>