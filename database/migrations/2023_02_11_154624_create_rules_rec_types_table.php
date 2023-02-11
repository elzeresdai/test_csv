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
        Schema::create('rules_rec_types', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rule_id')->unsigned()->index();
            $table->bigInteger('type_id')->unsigned()->index();
            $table->integer('start_range')->unsigned();
            $table->integer('end_range')->unsigned();
            $table->integer('lenght')->unsigned();
            $table->timestamps();

            $table->foreign('rule_id')->references('id')->on('data_rules')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('record_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rules_rec_types', function (Blueprint $table) {
            $table->dropForeign('rule_id');
            $table->dropForeign('type_id');
        });

        Schema::dropIfExists('rules_rec_types');
    }
};
