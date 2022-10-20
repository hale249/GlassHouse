<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cart_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('product_image_id')->nullable();
            $table->integer('quantity')->default(0)->nullable();
            $table->unsignedInteger('product_color_id');
            $table->unsignedInteger('product_glass_id')->nullable();
            $table->unsignedInteger('product_aluminum_id')->nullable();
            $table->unsignedInteger('product_accessory_id')->nullable();
            $table->string('product_longs')->nullable()->default(0);
            $table->string('product_width')->nullable()->default(0);
            $table->integer('price')->default(0)->nullable();
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
        Schema::dropIfExists('cart_details');
    }
}
