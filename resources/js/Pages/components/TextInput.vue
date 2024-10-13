<script setup>

const model = defineModel({
    type:null,
});
 defineProps({
    type:{
        type:String,
        default: "text",
    },
    placeholder:{
        type:String,
    },
    error:String,
 });
</script>

<template>
    <div>
        <input :type="type" v-model="model" :placeholder="placeholder" :class="{ 'bg-red-200' :error}" /><br />
        <small>{{ error }}</small
        ><br />
    </div>
</template>
