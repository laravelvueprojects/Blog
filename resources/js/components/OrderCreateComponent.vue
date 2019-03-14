<template>
  <div>
    <h1>Create Orders</h1>
    <form class='form-horizontal' @submit.prevent="addOrder">
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
                <button class="btn btn-primary pull-right">Create Order</button>
          </div>
       </div>
    </form>
  </div>
</template>

<script>
    export default {

      data() {

        return {
          order:{}
        }

    },
    methods: {

      addOrder(){
        
        let uri = 'http://127.0.0.1:8000/api/orders';
        this.axios.post(uri, this.order).then((response) => {
          this.$router.push({ name: 'orders' });
        });

      }

    }
  }
</script>

