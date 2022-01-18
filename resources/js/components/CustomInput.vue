<template>
    <label>
        {{ label }}
        <input
            :type="type"
            :placeholder="placeholder"
            v-model="inputValue"
        >
    </label>
</template>

<script>
export default {
    props: ['label', 'type', 'modelValue', 'placeholder'],
    computed: {
        inputValue: {
            get() {
                return this.modelValue
            },
            set(value) {
                this.$emit('update:modelValue', value)
            }
        }
    }
}
</script>
