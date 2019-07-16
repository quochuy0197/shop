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
            $table->increments('pro_id');
            $table->string('pro_name');
            $table->string('pro_slug');
            $table->integer('pro_price');
            $table->string('pro_image');
            $table->string('pro_accessories');
            $table->string('pro_warranty');
            $table->string('pro_promotion');
            $table->string('pro_condition');
            $table->tinyInteger('pro_status');
            $table->text('pro_description');
            $table->integer('pro_cate')->unsigned();
            $table->foreign('Pro_cate') -> references('cate_id')
                                        -> on('category')
                                        -> onDelete('cascade');
            $table->tinyInteger('pro_featured');
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
