<template>
    <div>
        <input type="text" @keyup.enter="guardar" v-model="msg">
        <button @click="guardar">
            Guardar 
        </button>
    </div>
    <div>
       <strong>{{ msg }}</strong> 
    </div>
    <div>
        <ul>
            <li v-for="matriz in vector" :key="matriz.id">{{ matriz }}</li>
        </ul>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                msg: '',
                vector: [],
            }
        },
        methods: {
            guardar() {
                this.vector.push({id: this.vector.length + 1, nombre: this.msg})
                this.msg = ""
            },
        }
    }
</script>
<style scoped>
button{
    background: blue;
    color: white;
}
</style>