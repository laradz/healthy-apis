<template>
    <form method="POST" action="/" class="w-50">
        <input type="hidden" name="_token" :value="csrf">
        <div class="form-group">
            <label>Burger name</label>
            <input name="name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Burger price</label>
            <input name="price" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary text-white">Add</button>
    </form>
</template>

<script>
    export default {
        data(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },

        methods: {

        }
    }
</script>

<style scoped>

</style>