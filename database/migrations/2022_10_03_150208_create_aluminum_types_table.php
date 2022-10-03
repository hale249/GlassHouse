<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAluminumTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluminum_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('images')->nullable();
            $table->tinyInteger('is_active')->default(true)->nullable();
            $table->unsignedInteger('created_by');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluminum_types');
    }
}
