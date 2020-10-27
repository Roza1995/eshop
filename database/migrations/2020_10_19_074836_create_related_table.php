<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('related', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('image_id');
            $table->timestamps();

          $table->foreign('product_id', 'related_product_id')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->references('id')
            ->on('products');

          $table->foreign('image_id', 'related_image_id')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->references('id')
            ->on('images');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('related');
    }
}
