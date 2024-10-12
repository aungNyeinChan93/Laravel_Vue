<script setup>
import { route } from "../../../../vendor/tightenco/ziggy/src/js";
defineProps({
    name: String,
});
</script>

<template>
    <Head :title="`${$page.component}`" />
    <div>
        <h1 class="text-center text-red-500">
            {{ name.toUpperCase() }} || User name - {{ $page.props.user.name }}
        </h1>
        <h4 class="text-center bg-green-500 p-4 my-5">{{ $page.props.user.email }}gmail.com </h4>

        <Link
            :href="route('UserHome#about')"
            class="bg-red-400 hover:bg-red-200 p-2 rounded-xl ms-2"
        >
            About</Link
        >
    </div>
</template>
