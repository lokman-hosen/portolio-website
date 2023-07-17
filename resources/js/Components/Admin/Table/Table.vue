<script setup>
defineProps({
    tableHeads:{
        type: Array,
    },
    data: {
        type: Object,
        default: () => ({}),
    }
});
</script>

<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col" v-for="tableHead in tableHeads">{{tableHead}}</th>
        </tr>
        </thead>
        <tbody>
        <slot></slot>
        </tbody>
    </table>
</template>

<style scoped>

</style>
