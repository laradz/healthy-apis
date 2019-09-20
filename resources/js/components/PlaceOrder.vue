<script>
    export default {
        name: "PlaceOrder",

        methods: {
            async crudPlace()
            {
                // Create a new Order
                let order = await axios.post('/orders', {
                    client: 'Kouceyla Hadji'
                }).then(response => response.order);

                // Add entries to the order
                await axios.post(`/orders/${order.id}/entries`, {
                    burger_id: 1,
                    quantity: 2
                });

                await axios.post(`/orders/${order.id}/entries`, {
                    burger_id: 3,
                    quantity: 1
                });

                let updatedOrder = await axios.get(`/orders/${order.id}`).then(response => response.order);

                return updatedOrder;
            },

            async restPlace()
            {
                let order = await axios.post('/orders', {
                    client: 'Kouceyla Hadji',
                    entries: [
                        {
                            burger_id: 1,
                            quantity: 2
                        },
                        {
                            burger_id: 3,
                            quantity: 1
                        }
                    ]
                }).then(response => response.order)

                return order;
            }
        }
    }
</script>