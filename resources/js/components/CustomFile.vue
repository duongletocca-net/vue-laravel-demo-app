<template>
    <label>
        {{ label }}
        <input
            :type="type"
            v-model="inputValue"
        >
    </label>
</template>

<script>
export default {
    props: ['label', 'type', 'modelValue'],
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
