<template>
  <div>
    <h1>Edit Post</h1>
    <form @submit.prevent="updateOrder">
      <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Order Name:</label>
               <input type='text' class='form-control' placeholder='Enter order name' v-model='order.order_name' />
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Order Value:</label>
               <input type='number' class='form-control' placeholder='Enter order value' v-model='order.order_value' />
            </div>
          </div>
          <div class="col-md-12">
                <div class="form-group">
                    <label>Customer id:</label>
                    <input type='text' class='form-control' placeholder='Enter orderer id' v-model='order.customer_id' />
                </div>
          </div>
            <br />      
          <div class="form-group">
                <button class="btn btn-primary pull-right">Update Order</button>
          </div>
       </div>
    </form>
  </div>
</template>

<script>
    export default {

      data() {
        return {
          order: {}
        }
      },

      created() {
        
        let uri = `http://127.0.0.1:8000/api/orders/${this.$route.params.id}/edit`;
        // console.log(uri);
        this.axios.get(uri).then((response) => {
            // console.log(response);
            this.order = response.data;
        });

      },
      
      methods: {

        updateOrder() {
          let uri = `http://127.0.0.1:8000/api/orders/${this.$route.params.id}/update`;
          this.axios.post(uri, this.order).then((response) => {
            // redirect to posts
            this.$router.push({ name: 'orders' });
          });
          
        }

      }
    }
</script>
