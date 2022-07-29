import Home from '../pages/Home.vue'
import Users from '../crudtables/Users.vue'
import Products from '../crudtables/Products.vue'
import Orders from '../crudtables/Orders.vue'
import AddCus from '../Operations/AddCus.vue'
import EditCus from '../Operations/EditCus.vue'
import About from '../pages/About.vue'
import Contact from '../pages/Contact.vue'
import AddProducts from '../Operations/AddProducts.vue'
import EditProducts from '../Operations/EditProducts.vue'
import AddOrders from '../Operations/AddOrders.vue'
// import Login from '../components/Login.vue'
import Main from '../components/Main.vue'


export const routes = [
    {
        name: 'main',
        path: '/',
        component: Main,

        children: [{
            name: 'home',
            path: '/home',
            component: Home,
        },
        {
            name: 'user',
            path: '/users',
            component: Users
        },
        {
            name: 'addCus',
            path: '/addCustomer',
            component: AddCus
        },
        {
            name: 'about',
            path: '/about',
            component: About
        },
        {
            name: 'contact',
            path: '/contact',
            component: Contact
        },
        {
            name: 'editCus',
            path: '/editCustomer',
            component: EditCus
        },
        {
            name: 'productList',
            path: '/ListOfProducts',
            component: Products
        },
        {
            name: 'addProduct',
            path: '/AddProduct',
            component: AddProducts
        },
        {
            name: 'editProduct',
            path: '/EditProduct',
            component: EditProducts
        },
        {
            name: 'orders',
            path: '/orders',
            component: Orders
        },
        {
            name: 'addOrder',
            path: '/addOrder',
            component: AddOrders
        },
        ],
    },
    // {
    //     name: 'login',
    //     path: '/login',
    //     component: Login
    // },
   
    
    // {
    //     name: 'create',
    //     path: '/create',
    //     component: CreateProduct
    // },
    // {
    //     name: 'edit',
    //     path: '/edit/:id',
    //     component: EditProduct
    // }
];