import {createApp} from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

import App from './components/App';
import AllBooks from './components/AllBooks.vue';
import EditBook from './components/EditBook';
import AddBook from './components/AddBook';
import index from './components/index';
import ShowBook from './components/ShowBook';
import "animate.css/animate.min.css";
import swal from 'sweetalert';

const routes = [
    {
        name: 'books',
        path: '/books',
        components: AllBooks
    },
    {
        name: 'create',
        path: '/create',
        component: AddBook
    },

    {
        name: 'edit',
        path: '/edit/:id',
        component: EditBook
    },
    {
        name: 'show',
        path: '/show/:id',
        component: ShowBook
    },
    {
        name: 'index',
        path: '/index',
        component: index
    }

]

const router = createRouter({
    history: createWebHistory(),
    routes
});


const app = createApp(App);
app.use(App)
app.use(router)
app.mount("#app")


require('./bootstrap');

