<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmitentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emitenti', function (Blueprint $table) {
            $table->id();
            $table->string('denumire', 100);
            $table->date('data_incepere_activitate');
            $table->date('data_incheiere_activitate')->nullable();
            $table->integer('stare');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emitenti');
    }
}
