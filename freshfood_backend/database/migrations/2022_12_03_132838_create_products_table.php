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
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('amount')->nullable();
            $table->unsignedBigInteger('create_by')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->text('noisanxuat')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->text('content')->nullable();
            $table->integer('number_of_reviews')->default(0);
            $table->double('rate')->default(0);
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
