<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuestionario_id');
            $table->string('pregunta');
            $table->unsignedSmallInteger('position')->nullable();
            $table->string('idioma_id')->default('es');
            $table->boolean('can_shuffle')->default(False);
            $table->timestamps();

            $table->foreign('cuestionario_id')->references('id')->on('cuestionarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
