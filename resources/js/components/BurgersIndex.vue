<template>
    <div>
        <div v-if="loading">Burgers are loading...</div>
        <div v-else>
            <div v-for="burger in burgers">
                {{ burger.id }} - {{ burger.name }} <span class="font-italic">({{ burger.price }} DA)</span>
            </div>
        </div>
    </div>
</template>

<script>
    import app from '../app'
    export default {
        data(){
            return {
                loading: true,
                burgers: []
            }
        },

        mounted() {
            this.loadBurgers();
            this.$nextTick(() => {
                app.$on('added', () => {
                    this.loadBurgers();
                });
            })
        },

        methods: {
            loadBurgers()
            {
                this.loading = true;
                axios.get('/api/burgers')
                    .then(response => {
                        this.burgers = response.data.burgers;
                        this.loading = false;
                    })
                    .catch(err => {
                        console.log(err.response);
                    });
            }
        }
    }
</script>

<style scoped>

</style>