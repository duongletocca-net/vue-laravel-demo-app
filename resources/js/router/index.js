import { createRouter, createWebHistory } from "vue-router"
import Home from "../views/Home.vue"
import Products from "../views/Products.vue"
import About from "../views/About.vue"
import Crud from "../views/Crud.vue"
import CrudList from "../views/crud/List.vue"
import CrudCreate from "../views/crud/Create.vue"
import CrudEdit from "../views/crud/Edit.vue"

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/products",
        name: "Products",
        component: Products,
    },
    {
        path: "/about",
        name: "About",
        component: About,
    },
    {
        path: "/",
        name: "Crud",
        component: Crud,
        children: [
            {
                path: "/crud",
                name: "crud.list",
                component: CrudList
            },
            {
                path: "/crud/create",
                name: "crud.create",
                component: CrudCreate
            },
            {
                path: "/crud/edit",
                name: "crud.edit",
                component: CrudEdit
            }
        ]
    },
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router
