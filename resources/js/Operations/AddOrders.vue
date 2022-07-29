<template>
    <div class="row">
        <div class="col-12">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <h4>Add Order</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="create">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Customer ID</label>
                                    <input type="text" class="form-control" v-model="order.customer_id">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Product ID</label>
                                    <input type="text" class="form-control" v-model="order.product_id">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>total</label>
                                    <input type="text" class="form-control" v-model="order.total">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <router-link :to='{name:"order"}' class="btn btn-warning col-1">Cancel</router-link>
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
    name:"order",
    data(){
        return{
            order:{
                customer_id:"",
                product_id:"",
                total:"",

            }
        }
    },
    methods:{
        create(){
            this.axios.post('/api/order/make', this.order).then(response=>{
                this.$router.push('/orders')
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>