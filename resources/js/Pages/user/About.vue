<script setup>
    defineProps({
        name:String,
    });
</script>

<template>
    <Head :title="`${$page.component}`"></Head>
    <div>
        <h1 class="text-center text-red-500 p-2">{{ $page.props.name.toUpperCase() }}</h1>
    </div>
</template>
