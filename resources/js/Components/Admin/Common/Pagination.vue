<script setup>
import {Link } from '@inertiajs/vue3';
defineProps({
    links:{
        type: Object,
    }
});
</script>

<template>
    <div class="row">
        <nav aria-label="Page navigation example" class="center-pagination">
            <ul class="pagination">
                <li class="page-item" :class="link.active ? 'active' : ''" v-for="link in links">
                    <Link class="page-link" :href="link.url" v-html="link.label"></Link>
                </li>
            </ul>
        </nav>
    </div>
</template>

<style scoped>
.center-pagination{
    margin: auto;
}
</style>
