<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_csv', function (Blueprint $table) {
            $table->id();
            $table->integer('start_range');
            $table->integer('end_range');
            $table->integer('length');
            $table->integer('description');
            $table->integer('record_type');
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
        Schema::dropIfExists('data_csv');
    }
};
