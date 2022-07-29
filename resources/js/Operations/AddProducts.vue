<template>
    <div class="row">
        <div class="col-12">
            <br/>
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form @submit.prevent="create" id="myForm">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Part</label>
                            <select class="form-select" aria-label="Default select example" v-model="product.part">
                                     <option value="CPU">CPU</option>
                                     <option value="MONITOR">MONITOR</option>
                                     <option value="KEYBOARD">KEYBOARD</option>
                                     <option value="MOUSE">MOUSE</option>
                            </select>
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
                                    <input type="float" class="form-control" v-model="product.price">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <router-link :to='{name:"productList"}' class="btn btn-warning col-1">Cancel</router-link>
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
    name:"product",
    data(){
        return{
            product:{
                part:"",
                name:"",
                description:"",
                price:"",
            }
        }
    },
    methods:{
        create(){
            this.axios.post('/api/product', this.product).then(response=>{
                this.$router.push('/ListOfProducts')
            }).catch(error=>{
                console.log(error)
            })
        },
    }
}
</script>