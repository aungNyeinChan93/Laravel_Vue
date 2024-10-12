<script setup>
import SecLayout from '../../layouts/SecLayout.vue';

    defineProps({
        title:String,
        data:Object,
    });

    defineOptions({layout:SecLayout})
</script>

<template>
    <Head :title="`${$page.url}`"/>
    <div>
            <h1>{{ title }}</h1>

            {{ $page }}
            {{ $page.props.data.name }}

            <hr>

            <ul>
                <li :key="key" v-for="(item,key) in $page.props.data">{{ key }}- {{ item }}</li>
            </ul>

            <hr>
            {{ $page.props.title }}
            <hr>
            <ul class="p-10 rounded text-center">
                <li class="px-2 py-4 bg-red-200" v-for="(item,index) in data" :key="index">{{ item }}</li>
            </ul>
            <hr>
            <p>
                {{ $page.props.test }}
            </p>

    </div>
</template>
