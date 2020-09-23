<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonatoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonatori', function (Blueprint $table) {
            $table->id();
            $table->string('denumire', 70);
            $table->unsignedBigInteger('act_infiintare');
            $table->boolean('stare');
            $table->date('data_infiintare');
            $table->date('data_radiere');


            // Foreign Key Constraints
            $table->foreign('act_infiintare')->references('id')->on('acte')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('ordonatori_act_infiintare_foreign');
        Schema::dropIfExists('ordonatori');
    }
}
