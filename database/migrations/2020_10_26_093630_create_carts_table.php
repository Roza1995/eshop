<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('carts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('product_id')->unique();
        $table->timestamps();

        $table->foreign('product_id', 'cart_product_id')
          ->onUpdate('cascade')
          ->onDelete('cascade')
          ->references('id')
          ->on('products');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
