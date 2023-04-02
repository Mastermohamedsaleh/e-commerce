<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            // Orders   
            $table->bigInteger('order_id')->unsigned();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            // Products
  
            
            $table->bigInteger('product_id')->unsigned();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');


            $table->string('price');
            $table->string('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
