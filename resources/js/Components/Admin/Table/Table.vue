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
    <table class="table table-bordered">
        <thead>
        <tr>
            <th v-for="tableHead in tableHeads" scope="col">{{tableHead}}</th>
        </tr>
        </thead>
        <tbody>
            <tr v-for="(value,index) in data">
<!--                <th v-for="item in 3">{{value.tableHeads}}</th>-->
                <th>{{value.id}}</th>
                <th>{{value.name}}</th>
                <th>{{value.status}}</th>
<!--                <th v-for="item in 2" scope="row">-->
<!--                    <span v-if=" tableHeads[index+1] == 'name' ">{{ value.name}}&#45;&#45;{{tableHeads[index+1]}}</span>-->
<!--                </th>-->
            </tr>

        </tbody>
    </table>
</template>

<style scoped>

</style>
