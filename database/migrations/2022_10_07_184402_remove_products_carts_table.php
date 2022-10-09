<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveProductsCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('product_id');
            $table->dropColumn('product_image_id');
            $table->dropColumn('quantity');
            $table->dropColumn('product_color_id');
            $table->dropColumn('product_glass_id');
            $table->dropColumn('product_aluminum_id');
            $table->dropColumn('product_accessory_id');
            $table->dropColumn('price');
            $table->integer('sub_total')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('product_image_id');
            $table->integer('quantity')->default(0)->nullable();
            $table->unsignedInteger('product_color_id');
            $table->unsignedInteger('product_glass_id')->nullable();
            $table->unsignedInteger('product_aluminum_id')->nullable();
            $table->unsignedInteger('product_accessory_id')->nullable();
            $table->integer('price')->default(0)->nullable();
        });
    }
}
