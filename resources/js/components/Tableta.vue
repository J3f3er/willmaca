<template>
    <!-- Button trigger modal -->
<!-- <button type="button" @click="abrirModal();" class="btn btn-primary">
  Crear Usuario
</button> -->

<!-- Modal -->
<!-- <div class="modal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{titleModal}}</h5>
        <button @click="cerrarModal();" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button @click="cerrarModal();" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Hola soy un mdal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{titleModal}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <table class="table table-hover">
        <caption>Lista De Usuarios</caption>
  <thead class="thead-dark">
    <th>ID</th>
    <th>Nombre Y Apellido</th>
    <th>Precio</th>
    <th>Categoria</th>
    <th>Descripcion</th>
    <th>Acciones</th>
  </thead>
  <tbody>
    <tr v-for="contactos in usuarios" :key="contactos.id">
        <th>{{ contactos.id }}</th>
        <th>{{ contactos.nombre }}</th>
        <th>{{ contactos.precio }}</th>
        <th>{{ contactos.categoria }}</th>
        <th>{{ contactos.descripcion }}</th>
        <th><button type="button" class="btn btn-warning">Editar</button></th>
        <th><button type="button" class="btn btn-danger">Borrar</button></th>
    </tr>
  </tbody>
  <tfoot>
    <th>ID</th>
    <th>Nombre Y Apellido</th>
    <th>Precio</th>
    <th>Categoria</th>
    <th>Descripcion</th>
    <th>Acciones</th>
  </tfoot>
</table>
</template>
<script>
    export default {
        data() {
            return {
                titleModal: ' hola ',
                modal:0,
                usuarios: [],
            }
        },
        methods: {
            async lista() {
                const resp = await axios.get('/admin/ProductosVue');
                this.usuarios = resp.data;
            },
            async borrar(id) {
                await axios.delete('/admin/DeleteProduct/' + id);
                this.lista();
            },
            abrirModal() {
                this.modal=1;
            },
            cerrarModal() {
                this.modal=0;
            },
        },
        created() {
            this.lista();
        },
    }
</script>
<style scoped>
/* button{
    background: blue;
    color: white;
} */
</style>