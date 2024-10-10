<script setup>
    defineProps({
        title: String,
    })
</script>


<template>
    <Head :title="` ${$page.component}`"/>
    <div>
        <h1 class=" text-center text-red-500">{{ title }}</h1>

       <ul>
        <li>Component - {{ $page.component }}</li>
        <li>Prop Title - {{ $page.props.title }}</li>
        <li> URL - {{ $page.url }}</li>
       </ul>
    </div><hr>
    
</template>
