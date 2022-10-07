import {createRouter, createWebHistory} from 'vue-router';
import ProductsList from './components/ProductsList';
import ProductItem from './components/ProductItem';
import ProductForm from './components/ProductForm';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'products',
            path: '/',
            component: ProductsList,
        },
        {
            name: 'product-form',
            path: '/product/edit/:productId?',
            component: ProductForm,
            props: true,
            alias: '/product/add'
        },
        {
            name: 'product-item',
            path: '/product/:productId(\\d+)',
            component: ProductItem,
            props: true
        },
    ],
});

export default router;
