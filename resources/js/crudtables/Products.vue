<template>
    <div class="row">
        <div class="col-12 mb-2 text-end">
            <router-link :to='{name:"addProduct"}' class="btn btn-dark">Add Product</router-link>
        </div>
                 <!-- TABLE -->
            <div class="col-12">
                <div class="card bg-secondary">
                    <div class="card-header">
                        <h2>List Of Products</h2>
                    </div>
                <v-col
                        cols="12"
                        sm="6"
                        color="white">
                    <v-select
                        :items="['ALL', 'CPU', 'MONITOR', 'KEYBOARD', 'MOUSE', 'WHOLE SET']"
                        label="Parts" 
                        v-model="part"
                        class="mt-5"
                        @change="getProducts(part)"
                    ></v-select>
                </v-col>
                    <div class="card-body bg-dark">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Part</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    <tbody v-if="products.length > 0">
                                        <tr v-for="(product,key) in products" :key="key">
                                            <td>{{ product.id }}</td>
                                            <td>{{ product.part }}</td>
                                            <td>{{ product.name }}</td>
                                            <td>{{ product.description }}</td>
                                            <td>{{ product.price }}</td>
                                            <td>
                                                <router-link :to='{ name:"editProduct" , params:{ id:product.id } }' class="btn btn-success text-light">Edit</router-link>
                                                <button type="button" @click="deleteProduct(product.id)" class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody v-else>
                                    <tr>
                                        <td colspan="7" align="center">No Products Found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
export default {
    name:"product",
    data(){
        return{
            part:null,
            products:[],
             headers: [
                {
                    text: 'ID',
                    align: 'center',
                    sortable: false,
                    value: 'id',
                },
                { text: 'Parts', align: 'center', value: 'part' },
                { text: 'Product Name', align: 'center', value: 'name' },
                { text: 'Description', align: 'center', value: 'description' },
                { text: 'Price', align: 'center', value: 'price' },
                { text: 'Actions', align: 'center', value: 'actions'},
            ],
        }
    },
    mounted(){
        this.getProducts(part)
    },
    methods:{
         getProducts(part){
           this.axios.get('api/product/index/'+part).then(response=>{
                this.products = response.data
            })
        },
        deleteProduct(id){
            if(confirm("Are you sure to delete this product ?")){
                this.axios.delete('/api/product/'+id).then(response=>{
                    this.getProducts(part)
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>

<style>
v-select{
    width: 50%;
}
</style>