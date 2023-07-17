<script setup>
defineProps({
    status:{
        type: Boolean,
    },
});
</script>

<template>
    <span class="label label-inline label-success" v-if="status">Active</span>
    <span class="label label-inline label-danger" v-else>Inactive</span>
</template>

<style scoped>

</style>
