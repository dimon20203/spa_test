import { createRouter, createWebHistory } from 'vue-router';



const routes = [
    {
        path: '/people',
        component: () => import('./components/person/Index.vue'),
        name:'person.index'

    },
    {
        path: '/people/create',
        component: () => import('./components/person/Create.vue'),
        name:'person.create'
    },
    {
        path: '/people/:id/edit',
        component: () => import('./components/person/Edit.vue'),
        name: 'person.edit'
    },
    {
        path: '/people/:id',
        component: () => import('./components/person/Show.vue'),
        name: 'person.show'
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
