<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('status')->default(0);
            $table->tinyInteger('stock')->default(true);
            $table->tinyInteger('active')->default(1);
            $table->decimal('price', 8, 2);
            $table->decimal('sale_price', 8, 2);
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
       Schema::dropIfExists('products');
    }
}
