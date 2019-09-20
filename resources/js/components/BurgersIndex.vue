<template>
    <div>
        <div v-for="burger in burgers">
            {{ burger.id }} - {{ burger.name }} <span class="font-italic">({{ burger.price }} DA)</span>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            burgers: {
                type: Array,
                required: true
            }
        },
        data(){
            return {}
        },

        mounted() {

        },

        methods: {

        }
    }
</script>

<style scoped>

</style>