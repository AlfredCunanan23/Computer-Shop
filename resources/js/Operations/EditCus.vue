<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-secondary text-dark">
                    <h4>Update Customer</h4>
                </div>
                <div class="card-body bg-dark text-light">
                    <form @submit.prevent="updateCustomer">
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
                                <router-link :to='{name:"user"}' class="btn btn-warning">Cancel</router-link>
                                <button type="submit" class="btn btn-primary">Update</button>
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
    data(){
        return{
            customer:{},
            
        }
    },

    created(){
        this.axios
            .get(`api/customer/show/${this.$route.params.id}`)
            .then(response => {
                this.customer = response.data;

            });
    },

    methods:{
        updateCustomer(){
            this.axios
                .put(`api/customer/edit/${this.$route.params.id}`, this.customer)
                .then(response => {
                        this.$router.push('/users');
                    })
                .catch(err => console.log(err))
                .finally(() => this.loading = true)
        }
    }

}

</script>