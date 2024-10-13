<script setup>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";
import {useForm} from "@inertiajs/vue3"
import { route } from "../../../../vendor/tightenco/ziggy/src/js";
import TextInput from "../components/TextInput.vue";

defineProps({
    title: String,
});

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
    avator:null,
    preview:null
});

const submit = () => {
    // router.post("/register",form);
    form.post(route("Auth#register"),{
        onError(){
            form.reset("password","password_confirmation");
        },
    })

};


const change= (e)=>{
    form.avator = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0])
}

</script>

<template>
    <Head :title="`${$page.component}`" />
    <div class="">
        <h1 class="text-red-500 text-center">{{ title.toUpperCase() }}</h1>
        <div class="container mx-4 my-4 p-4 bg-blue-300 text-center">
            <form @submit.prevent="submit" class="p-4 bg-white-400 rounded m-3">
                <div class="">
                    <img :src="form.preview" class="mx-auto"  style="width:200px;height:100px" alt="">
                    <label for="">Avator</label><br>
                    <input type="file" name="avator" id="avator" @input="change">
                    <p>{{ form.errors.avator }}</p>
                </div>
                <TextInput v-model="form.name" placeholder="name" :error="form.errors.name"/>
                <TextInput type="email" v-model="form.email" placeholder="email" :error="form.errors.email"/>
                <TextInput type="password" v-model="form.password" placeholder="password" :error="form.errors.password"/>
                <TextInput type="password_confirmation" v-model="form.password_confirmation" placeholder="password" :error="form.errors.password_confirmationb"/>
                <button class="btn bg-green-300" :disabled="form.processing">Register</button>
            </form>
        </div>
    </div>
</template>
