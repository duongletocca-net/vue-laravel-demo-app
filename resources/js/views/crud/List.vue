<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Prime</th>
                    <th scope="col">Type</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="food in allFoods.data" :key="food.id">
                    <th scope="row">{{ food.id }}</th>
                    <td>{{ food.name }}</td>
                    <td>{{ food.prime }}</td>
                    <td>{{ typeMap[food.type] }}</td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import { mapGetters, mapActions } from 'vuex'
export default {
    data() {
        return {
            typeMap: []
        }
    },
    methods: {
        ...mapActions(
            ['fetchFoods']
        )
    },
    computed: mapGetters(
        ['allFoods']
    ),
    created () {
        this.fetchFoods()

        let productType = []
        productType[1] = '野菜'
        productType[2] = '果物'
        productType[3] = 'お肉'

        this.typeMap = productType
    }
}
</script>
