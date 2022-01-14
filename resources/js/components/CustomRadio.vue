<template>
    <fieldset>
        {{ label }}
        <label v-for="(option, i) in options" :key="i">
            <input
                :type="type"
                :value="option.value"
                v-model="inputValue"
            >{{ option.label }}
        </label>
    </fieldset>
</template>

<script>
export default {
    props: ['label', 'type', 'modelValue', 'options'],
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
