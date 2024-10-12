<script setup>
import { reactive } from "vue";
import { router } from "@inertiajs/vue3";
import {useForm} from "@inertiajs/vue3"
import { route } from "../../../../vendor/tightenco/ziggy/src/js";

defineProps({
    title: String,
});

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

const submit = () => {
    // router.post("/register",form);
    form.post(route("Auth#register"),{
        onError(){
            form.reset("password","password_confirmation");
        },
    })

};

</script>

<template>
    <Head :title="`${$page.component}`" />
    <div class="">
        <h1 class="text-red-500 text-center">{{ title.toUpperCase() }}</h1>
        <div class="container mx-4 my-4 p-4 bg-blue-300 text-center">
            <form @submit.prevent="submit" class="p-4 bg-white-400 rounded m-3">
                <input
                    type="text"
                    v-model="form.name"
                    placeholder="name"
                /><br />
                <small>{{ form.errors.name }}</small><br>
                <input
                    type="text"
                    v-model="form.email"
                    placeholder="email"
                /><br />
                <small>{{ form.errors.email }}</small><br>

                <input
                    type="password"
                    v-model="form.password"
                    placeholder="password"
                /><br />
                <small>{{ form.errors.password }}</small><br>

                <input
                    type="password"
                    v-model="form.password_confirmation"
                    placeholder="password_confirmation"
                /><br />
                <small>{{ form.errors.password_confirmation }}</small><br>

                <button class="btn bg-green-300" :disabled="form.processing">Register</button>
            </form>
        </div>
    </div>
</template>
