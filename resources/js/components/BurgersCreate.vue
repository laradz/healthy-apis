<template>
    <div class="w-50">
        <div v-if="addedBurger" class="alert-success p-2 mb-2">{{ addedBurger }} burger added successfully !</div>
        <div class="form-group">
            <label>Burger name</label>
            <input v-model="burgerName" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Burger price</label>
            <input v-model="burgerPrice" type="text" class="form-control">
        </div>
        <a class="btn btn-primary text-white" @click="addBurger">
            {{ loading ? 'Adding...' : 'Add' }}
        </a>
    </div>
</template>

<script>
    import app from '../app'
    export default {
        data(){
            return {
                loading: false,
                addedBurger: null,

                burgerName: null,
                burgerPrice: null,
            }
        },

        methods: {
            addBurger(){
                if (this.loading) return;

                this.loading = true;
                axios.post('/api/burgers', {
                    name: this.burgerName,
                    price: this.burgerPrice
                }).then(response => {
                    app.$emit('added');

                    this.addedBurger = this.burgerName;
                    setTimeout(() => {
                        this.addedBurger = null;
                    }, 2000);

                    this.burgerName = null;
                    this.burgerPrice = null;

                    this.loading = false;
                }).catch(err => {
                    console.log(err.response)
                    this.loading = false;
                })
            }
        }
    }
</script>

<style scoped>

</style>