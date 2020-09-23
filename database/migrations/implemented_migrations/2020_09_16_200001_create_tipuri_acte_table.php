<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipuriActeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipuri_acte', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emitent_id');
            $table->string('titulatura', 50);
            $table->date('data_legiferare');
            $table->date('data_abrogare');
            $table->boolean('stare');

            // Foreign Key Constraints
            $table->foreign('emitent_id')->references('id')->on('emitenti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('tipuri_acte_emitent_id_foreign');
        Schema::dropIfExists('tipuri_acte');
        
    }
}
