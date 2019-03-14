<template>
  <div>
      <h1>Orders</h1>
       

        <table class="table table-hover">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Order Name</th>
                  <th>Order value</th>
                  <th>Customer Id</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                <tr v-for="order in Orders" :key="order.id">
                    <td>{{ order.id }}</td>
                    <td>{{ order.order_name }}</td>
                    <td>{{ order.order_value }}</td>
                    <td>{{ order.customer_id }}</td>
                    <td><router-link :to="{name: 'edit_orders', params: { id: order.id }}" class="btn btn-primary">Edit</router-link></td>
                    <td><button class="btn btn-danger" @click = "deleteOrder(order.id)">Delete</button></td>
                </tr>
            </tbody>
        </table>
  </div>
</template>

<script>
  export default {
      data() {
        return {
          Orders: []
        }
      },
      
      created() {

        let uri = 'http://127.0.0.1:8000/api/orders';
        this.axios.get(uri).then(response => {
          this.Orders = response.data;
        });

    },
    methods: {

      deleteOrder(id) {
        let uri = `http://127.0.0.1:8000/api/orders/${id}/delete`;
        this.axios.delete(uri).then(response => {
          // console.log(response);
          // console.log(this.posts);
          this.Orders.splice(this.Orders.indexOf(id), 1);
          // console.log(this.posts);
        });
      }

    }
  }
</script>
