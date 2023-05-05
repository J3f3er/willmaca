<div class="modal fade" role="dialog" tabindex="-1" id="modal_edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><strong>Actualizar Producto:</strong></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-capitalize"><strong>Formulario para actualizar producto:</strong></p><br><br>
                <form class="form-control">
                    <input class="form-control" type="hidden" id="hidden_id_edit">
                    <div>
                        <label class="form-label form-text">
                            <strong>Nombre:&nbsp;</strong>
                        </label>
                        <input class="form-control form-control-lg" type="text" id="nombre_producto" name="nombre" value="response.nombre" placeholder="Nombre Actual Del Producto">
                    </div>
                    <div>
                        <label class="form-label form-text">
                            <strong>Precio:&nbsp;</strong>
                        </label>
                        <input class="form-control form-control-lg" type="text" id="precio_producto" name="precio" value="esponse.precio" placeholder="Precio Actual Del Producto">
                    </div>
                    <div>
                        <label class="form-label form-text">
                            <strong>Descripción:&nbsp;</strong>
                        </label>
                        <textarea class="form-control form-control-lg" id="descripcion_producto" name="descripcion" placeholder="Descripción Del Producto">response.descripcion</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal"><strong>Cerrar</strong></button>
                <button class="btn btn-success" id="btn_actualizar" type="button" data-bs-dismiss="modal" data-bs-target="#modal_confirm_update" data-bs-toggle="modal"><strong>Actualizar</strong></button>
            </div>
        </div>
    </div>
</div>

{{-- Modal De Connfirmación --}}

<div class="modal fade" role="dialog" tabindex="-1" id="modal_confirm_update">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Mensaje.</strong></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Producto Actualizado Correctamente.</strong></p>
            </div>
            <div class="modal-footer"><button class="btn btn-primary" type="button" data-bs-dismiss="modal"><strong>Cerrar</strong></button></div>
        </div>
    </div>
</div>