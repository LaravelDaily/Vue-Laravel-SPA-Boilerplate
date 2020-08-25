<template>
    <div class="row">

        <sidebar></sidebar>

        <div class="col-lg-9 mt-4">
            <div class="row">
                <div v-for="product in products" class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" :src="product.photo" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{ product.name }}</a>
                            </h4>
                            <h5>${{ product.price }}</h5>
                            <p class="card-text">{{ product.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</template>

<script>
    import Sidebar from "../components/Sidebar";

    export default {
        data() {
            return {
                products: {}
            }
        },
        mounted() {
            axios.get('/api/products')
                .then(response => {
                    this.products = response.data.data;
                });
        },
        components: {
            'sidebar': Sidebar
        }
    }
</script>
