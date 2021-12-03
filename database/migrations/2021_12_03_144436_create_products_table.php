<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name', 100);
            $table->string('slug', 100);
            $table->bigInteger('category_id')->unsigned();
            $table->text('description');
            $table->json('image');
            $table->tinyInteger('status');
            $table->double('price', 8, 2);
            $table->tinyInteger('discount_id')->unsigned();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('discount_id')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
