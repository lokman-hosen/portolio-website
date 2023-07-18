<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: {
        type: String,
        required: true,
    },
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <div class="form-group">
        <select class="form-control" name="status">
            <option value="">---Select---</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>

<!--        <input-->
<!--            class="form-control"-->
<!--            :value="modelValue"-->
<!--            @input="$emit('update:modelValue', $event.target.value)"-->
<!--            ref="input"-->
<!--        />-->
    </div>
</template>
