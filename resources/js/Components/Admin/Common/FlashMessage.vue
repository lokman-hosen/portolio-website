<script setup>

import {ref} from "vue";
    const showMessage = ref(true)
    const hideMessage = () => {
        showMessage.value = false
    }

// setTimeout(()=>{
//     showMessage.value = false
// },1000);

</script>

<template>
    <div v-if="showMessage">
        <div v-if="$page.props.flash.success" class="alert alert-success" role="alert">
            {{$page.props.flash.success}}
            <span class="float-right close-btn" @click="hideMessage">X</span>
        </div>
        <div v-if="$page.props.flash.error" class="alert alert-danger" role="alert">
            {{$page.props.flash.error}}
            <span class="float-right close-btn" @click="hideMessage">X</span>
        </div>
    </div>

</template>

<style scoped>
.close-btn:hover{
    cursor: pointer;
}
</style>
