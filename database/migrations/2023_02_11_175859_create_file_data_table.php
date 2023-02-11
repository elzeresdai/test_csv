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
        Schema::create('file_data', function (Blueprint $table) {
            
            $table->id();
            $table->string('slug')->index();
            $table->string('file_id')->index();
            $table->bigInteger('rr_id')->unsigned()->index();
            $table->string('value');
            $table->timestamps();

            $table->foreign('rr_id')->references('id')->on('rules_rec_types')->onDelete('cascade');
            
        });
    }

    /**F
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('file_data', function (Blueprint $table) {
            $table->dropForeign('rr_id');
        });

        Schema::dropIfExists('file_data');
    }
};
