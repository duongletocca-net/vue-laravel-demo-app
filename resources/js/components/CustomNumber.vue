<template>
    <label>
        {{ label }}
        <input
            v-for="(option, i) in options"
            :key="i"
            :type="type"
            :placeholder="option.placeholder"
            v-model="option.value"
        >
    </label>
</template>

<script>
export default {
    props: ['label', 'type', 'modelValue', 'options'],
}
</script>
