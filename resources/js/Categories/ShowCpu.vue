<template>
    <div class="row">
        <!-- DROPDOWN -->
            <div class="dropup text-light">
                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                        Category by part
                </button>
                    <ul class="dropdown-menu bg-secondary">
                        <li><a class="dropdown-item" href="/ListOfProducts">ALL</a></li>
                        <li><a class="dropdown-item" href="#">CPU</a></li>
                        <li><a class="dropdown-item" href="#">MOUSE</a></li>
                        <li><a class="dropdown-item" href="#">MONITOR</a></li>
                        <li><a class="dropdown-item" href="#">KEYBOARD</a></li>
                        
                    </ul>
            </div>
                <!-- TABLE -->
        <div class="col-12">
            <div class="card bg-secondary">
                <div class="card-header">
                    <h2>List Of Products</h2>
                </div>
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
                                        <router-link :to='{ name:"editProduct" , params:{ id:product.id } }' class="btn btn-success">Edit</router-link>
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
            products:[]
        }
    },
    mounted(){
        this.getProductsCpu()
    },
    methods:{
         getProductsCpu(){
           this.axios.get('api/product/showCpu').then(response=>{
                this.products = response.data
            })
        },
        deleteProduct(id){
            if(confirm("Are you sure to delete this product ?")){
                this.axios.delete('/api/product/'+id).then(response=>{
                    this.getProducts()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>