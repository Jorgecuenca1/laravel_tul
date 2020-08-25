<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Biginteger('product_id')->unsigned();
            $table->Biginteger('cart_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('cart_id')->references('id')->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_carts');
    }
}
