<script setup>
    defineProps({
        name:String,
    });
</script>


<template>
    <Head :title="`${$page.component}`"/>
    <div>
        <h1 class="text-center text-red-500 ">{{ name.toUpperCase() }} || User name -  {{ $page.props.auth.user }}</h1>
        <p class=" text-2xl p-2 text-white-300">{{ $page.props.test }}</p>
    </div>
</template>
