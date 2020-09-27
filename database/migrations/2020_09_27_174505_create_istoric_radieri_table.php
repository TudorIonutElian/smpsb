<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoricRadieriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoric_radieri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emitent');
            $table->date('data_radiere');

            $table->foreign('emitent')->references('id')->on('emitenti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('istoric_radieri_emitent_foreign');
        Schema::dropIfExists('istoric_radieri');
    }
}
