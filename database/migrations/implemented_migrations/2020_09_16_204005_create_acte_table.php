<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acte', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emitent');
            $table->unsignedBigInteger('tip_act');
            $table->boolean('stare');
            $table->date('data_legiferare');
            $table->date('data_abrogare');
            $table->string('titulatura');

            // Foreign Key Constraints
            $table->foreign('tip_act')->references('id')->on('tipuri_acte')->onDelete('cascade');
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
        Schema::dropForeign('ordonatori_tip_act_foreign');
        Schema::dropForeign('ordonatori_emitent_foreign');
        Schema::dropIfExists('acte');
    }
}
