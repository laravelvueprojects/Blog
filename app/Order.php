<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Tables model
    protected $table = 'orders';

    //Model timestamping
    protected $hidden = ['created_at','updated_at'];

    /** Mass asignment
     * 
     *  @var array
     *
     */
    protected $fillable = ['order_name', 'order_value', 'customer_id'];
}
