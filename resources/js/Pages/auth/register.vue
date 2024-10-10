<script setup>
import { reactive } from 'vue';

// import Layout from "../../layouts/Layout.vue";
// defineOptions({layout:Layout});
    defineProps({
        title:String,
    });

    const form=reactive({
        name:null,
        email:null,
        password:null,
        name:null,
    });

    const submit = ()=>{
        console.log(form.name);

    }
</script>


<template>
    <Head :title="`${$page.component}`"/>
    <div class="">
        <h1 class="text-red-500 text-center ">{{ title.toUpperCase() }}</h1>


        <form @submit.prevent="submit">
            <input type="text" v-model="form.name" placeholder="name"><br>
            <input type="text" v-model="form.email" placeholder="email"><br>
            <input type="password" v-model="form.password" placeholder="password"><br>
            <input type="password" v-model="form.password_confirmation" placeholder="password_confirmation"><br>
            <button class="btn button-red">Submit</button>
        </form>

    </div>
</template>
