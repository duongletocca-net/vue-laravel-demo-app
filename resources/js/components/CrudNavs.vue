<template>
    <h1>CRUD</h1>
    <hr>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">{{ title($route.name) }}</span>
                <div class="w-50 text-right">
                    <router-link to="/crud"><button class="btn btn-outline-primary btn-lg mr-1 w-25">LIST</button></router-link>
                    <router-link to="/crud/create"><button class="btn btn-outline-primary btn-lg w-25">ADD</button></router-link>
                </div>
            </nav>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        title(routeName) {
            if (routeName == 'crud.list') {
                return 'List Data'
            }

            if (routeName == 'crud.create') {
                return 'Add Data'
            }

            if (routeName == 'crud.edit') {
                return 'Edit Data'
            }
        }
    },
}
</script>
