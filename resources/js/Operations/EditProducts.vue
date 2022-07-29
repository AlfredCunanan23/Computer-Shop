<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-secondary text-dark">
                    <h4>Update Product</h4>
                </div>
                <div class="card-body bg-dark text-light">
                    <form @submit.prevent="updateProduct">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Part</label>
                                    <input type="text" class="form-control" v-model="product.part" readonly>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" v-model="product.name">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" v-model="product.description">
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" v-model="product.price">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <router-link :to='{name:"productList"}' class="btn btn-warning">Cancel</router-link>
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
            product:{},
            
        }
    },

    created(){
        this.axios
            .get(`api/product/show/${this.$route.params.id}`)
            .then(response => {
                this.product = response.data;

            });
    },

    methods:{
        updateProduct(){
            this.axios
                .put(`api/product/edit/${this.$route.params.id}`, this.product)
                .then(response => {
                        this.$router.push('/ListOfProducts');
                    })
                .catch(err => console.log(err))
                .finally(() => this.loading = true)
        }
    }

}

</script>