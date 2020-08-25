<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_cart extends Model
{
    //
    protected $fillable = ['cart_id','product_id','quantity'];
}
