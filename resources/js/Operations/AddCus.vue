<template>
    <div class="row">
        <div class="col-12">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <h4>Add Customer</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="create">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" v-model="customer.first_name">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" v-model="customer.last_name">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" v-model="customer.address">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" v-model="customer.contact_number">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" v-model="customer.email">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <router-link :to='{name:"user"}' class="btn btn-warning col-1">Cancel</router-link>
                                <button type="submit" class="btn btn-secondary col-1">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default{
    name:"customer",
    data(){
        return{
            customer:{
                first_name:"",
                last_name:"",
                address:"",
                contact_number:"",
                email:"",
            }
        }
    },
    methods:{
        create(){
            this.axios.post('/api/customer', this.customer).then(response=>{
                this.$router.push('/users')
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>