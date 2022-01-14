<template>
    <fieldset>
        {{ label }}
        <select v-model="inputValue">
            <option disabled value="">Please select one</option>
            <option v-for="(option, i) in options" :key="i"
                    :value="option.value"
            >{{ option.label }}
            </option>
        </select>
    </fieldset>
</template>

<script>
export default {
    props: ['label', 'type', 'modelValue', 'radio', 'options'],
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
