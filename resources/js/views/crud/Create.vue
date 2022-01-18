<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form @submit.prevent="onSubmit" enctype="multipart/form-data">
                    <CustomInput
                        v-for="(input, i) in customInput"
                        :key="i"
                        v-model="input.value"
                        :label="input.label"
                        :type="input.type"
                        :placeholder="input.placeholder"
                    />
                    <input
                        type="number"
                        placeholder="USD"
                    >

                    <input
                        type="file"
                        @change="fileSelected"
                    >

                    <CustomRadio
                        v-for="(input, i) in customRadio"
                        :key="i"
                        v-model="input.picked"
                        :options="input.options"
                        :label="input.label"
                        :type="input.type"
                    />

                    <CustomCheckbox
                        v-for="(input, i) in customCheckbox"
                        :key="i"
                        v-model="input.picked"
                        :options="input.options"
                        :label="input.label"
                        :type="input.type"
                    />

                    <CustomSelect
                        v-for="(input, i) in customSelect"
                        :key="i"
                        v-model="input.picked"
                        :options="input.options"
                        :label="input.label"
                        :type="input.type"
                    />
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex'
import CustomInput from '../../components/CustomInput.vue'
import CustomFile from '../../components/CustomFile.vue'
import CustomNumber from '../../components/CustomNumber.vue'
import CustomRadio from '../../components/CustomRadio.vue'
import CustomCheckbox from '../../components/CustomCheckbox.vue'
import CustomSelect from '../../components/CustomSelect.vue'
export default {
    components: {
        CustomInput,
        CustomFile,
        CustomNumber,
        CustomRadio,
        CustomCheckbox,
        CustomSelect
    },
    data() {
        return {
            inputs: {
                name: "",
                file: "",
                prime_usd: "",
                type: "",
                checkbox: [],
                select: "",
            },
            customInput: [
                {
                    label: 'Product Name',
                    value: "",
                    type: 'text',
                    placeholder: ""
                },
                {
                    label: 'Prime',
                    value: "",
                    type: 'number',
                    placeholder: "JPY"
                }
            ],
            customFile: [
                {
                    label: 'Product Image',
                    value: "",
                    type: "file"
                }
            ],
            customRadio: [
                {
                    label: 'Type',
                    picked: '',
                    options: [
                        {
                            label: '野菜',
                            value: 1
                        },
                        {
                            label: '果物',
                            value: 2
                        },
                        {
                            label: 'お肉',
                            value: 3
                        },
                    ],
                    type: 'radio'
                }
            ],
            customCheckbox: [
                {
                    label: 'Checkbox',
                    picked: [],
                    options: [
                        {
                            label: '野菜',
                            value: 1
                        },
                        {
                            label: '果物',
                            value: 2
                        },
                        {
                            label: 'お肉',
                            value: 3
                        },
                    ],
                    type: 'checkbox'
                }
            ],
            customSelect: [
                {
                    label: 'Select',
                    picked: '',
                    options: [
                        {
                            label: '野菜',
                            value: 1
                        },
                        {
                            label: '果物',
                            value: 2
                        },
                        {
                            label: 'お肉',
                            value: 3
                        },
                    ],
                    type: 'radio'
                }
            ]
        }
    },
    methods: {
        ...mapActions(
            ['addFood']
        ),
        fileSelected(event){
            this.inputs.file = event.target.files[0]
        },
        onSubmit() {
            this.inputs.name = this.customInput[0].value
            this.inputs.prime_usd = this.customInput[1].value

            this.customRadio.forEach(element => {
                this.inputs.type = element.picked
            });

            this.customCheckbox.forEach(element => {
                this.inputs.checkbox = element.picked
            });

            this.customSelect.forEach(element => {
                this.inputs.select = element.picked
            });

            this.addFood(this.inputs)
        }
    }
}
</script>

<style scoped>

</style>
