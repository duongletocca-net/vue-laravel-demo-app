<template>
    <CrudNavs />
    <router-view />
</template>
<script>
import CrudNavs from '../components/CrudNavs.vue'
export default {
    components: {
        CrudNavs,
    },
}
</script>
