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
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('product_image_id');
            $table->integer('quantity')->default(0)->nullable();
            $table->unsignedInteger('product_color_id');
            $table->unsignedInteger('product_glass_id')->nullable();
            $table->unsignedInteger('product_aluminum_id')->nullable();
            $table->unsignedInteger('product_accessory_id')->nullable();
            $table->integer('price')->default(0)->nullable();
            $table->string('status')->default('pending')->nullable();
            $table->integer('vat')->default(0)->nullable();
            $table->integer('ship_price')->default(0)->nullable();
            $table->double('total')->default(0);
            $table->text('note')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
