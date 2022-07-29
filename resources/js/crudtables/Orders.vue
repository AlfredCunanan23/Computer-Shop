<template>
    <div class="row">
        <div class="col-12 mb-2 text-end">
            <router-link :to='{name:"addOrder"}' class="btn btn-dark">Add Order</router-link>
        </div>
                <!-- TABLE -->
        <div class="col-12">
            <div class="card bg-secondary">
                <div class="card-header">
                    <h2>List Of Orders</h2>
                </div>
                <div class="card-body bg-dark">
                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Product Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody v-if="orders.length > 0">
                                <tr v-for="(order,key) in orders" :key="key">
                                    <td>{{ order.id }}</td>
                                    <td>{{ order.customer_id }}</td>
                                    <td>{{ order.total }}</td>
                                    <td>
                                        <router-link :to='{ name:"editOrder" , params:{ id:order.id } }' class="btn btn-success text-light">Edit</router-link>
                                        <button type="button" @click="deleteOrder(order.id)" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody v-else>
                                <tr>
                                    <td colspan="7" align="center">No Order Found.</td>
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
    name:"order",
    data(){
        return{
            orders:[]
        }
    },
    mounted(){
        this.getOrders()
    },
    methods:{
         getOrders(){
           this.axios.get('api/order/index').then(response=>{
                this.orders = response.data
            })
        },
        deleteOrder(id){
            if(confirm("Are you sure to delete this product ?")){
                this.axios.delete('/api/order/'+id).then(response=>{
                    this.getOrders()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>