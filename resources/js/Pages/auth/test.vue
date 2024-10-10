<script setup>
    defineProps({
        title:String,
        data:Object,
    });
</script>

<template>
    <Head :title="`${$page.component}`"/>
    <div>
            <h1>{{ title }}</h1>


            {{ $page.props.data.name }}

            <hr>

            <ul>
                <li :key="key" v-for="(item,key) in $page.props.data">{{ key }}- {{ item }}</li>
            </ul>

            <hr>
    </div>
</template>
