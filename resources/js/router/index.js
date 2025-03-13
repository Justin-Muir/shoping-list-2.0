import { createWebHashHistory, createRouter } from "vue-router"

const routes = [
    {
       path: '/list-items/:id',
       name: 'ListItems',
       component: ListItems

    }
]

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
})

export default router