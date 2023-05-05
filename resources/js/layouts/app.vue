<template>
    <div>
        Laravel 9 y Vue 3 Cristo vive y viene pronto!
        <input type="text" v-model="msg">
    </div>
    <div>
        {{ msg }}
    </div>
</template>

<script setup>
export default {
    data(){
        return{
            msg: ''
        }
    },
}
</script>
