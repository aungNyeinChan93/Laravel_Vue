<script setup>
    import { useForm } from "@inertiajs/vue3";
import TextInput from "../components/TextInput.vue"
import { route } from "../../../../vendor/tightenco/ziggy/src/js";
    defineProps({
        title: String,
    })

    const form = useForm({
        email:null,
        password:null
    });

    const submit = ()=>{
        form.post(route("Auth#login"),{
            onError:()=>{
                form.reset("password")
            },
        });
    }


</script>


<template>
    <Head :title="` ${$page.component}`"/>
    <div>
        <h1 class=" text-center text-red-500">{{ title }}</h1>
        <form @submit.prevent="submit">
            <TextInput type="email" placeholder="email" v-model="form.email" :error="form.errors.email"/>
            <TextInput type="password" placeholder="password" v-model="form.password" :error="form.errors.password"/>
            <button :disabled="form.processing">Login</button>
        </form>
    </div>

</template>
