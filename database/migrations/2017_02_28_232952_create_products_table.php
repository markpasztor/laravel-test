<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->increments('id');
      	$table->string('name')->default('');
      	$table->integer('price')->default(0);
      	$table->text('short_description')->default('');
      	$table->text('description')->default('');
      });

		Schema::create('products_images', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('product_id')->unsigned()->default(0);
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->string('name')->default('');
			$table->string('url')->default('');
		});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('products_images');
    	Schema::drop('products');
    }
}
