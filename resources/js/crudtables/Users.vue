<template>
    <div class="row">
        <div class="col-12 mb-2 text-end">
            <router-link :to='{name:"addCus"}' class="btn btn-dark float-end">Add Customer</router-link>
        </div>
        <div class="col-12">
            <div class="card bg-secondary">
                <div class="card-header">
                    <h2>Customers Data</h2>
                </div>
                <div class="card-body bg-dark">
                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody v-if="customers.length > 0">
                                <tr v-for="(customer,key) in customers" :key="key">
                                    <td>{{ customer.id }}</td>
                                    <td>{{ customer.first_name }}</td>
                                    <td>{{ customer.last_name }}</td>
                                    <td>{{ customer.address }}</td>
                                    <td>{{ customer.contact_number }}</td>
                                    <td>{{ customer.email }}</td>
                                    <td>
                                        <router-link :to='{ name:"editCus" , params:{ id:customer.id } }' class="btn btn-success text-light">Edit</router-link>
                                        <button type="button" @click="deleteCustomer(customer.id)" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody v-else>
                                <tr>
                                    <td colspan="7" align="center">No Customers Found.</td>
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
    name:"customer",
    data(){
        return{
            customers:[],
            
        }
    },
    mounted(){
        this.getCustomers()
    },
    methods:{
        getCustomers(){
           this.axios.get('api/customer/index').then(response=>{
                this.customers = response.data
            })
        },
        deleteCustomer(id){
            if(confirm("Are you sure to delete this user ?")){
                this.axios.delete('/api/customer/'+id).then(response=>{
                    this.getCustomers()
                }).catch(error=>{
                    console.log(error)
                })
            }
        },
     
    }
}
</script>