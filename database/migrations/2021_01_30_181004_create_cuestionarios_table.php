<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateCuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionarios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->require;
            $table->string('descripcion')->require;
            $table->unsignedInteger('id_categories')->require->nullable();
            $table->boolean('activo')->default(False); //cambiar a boolean
            $table->unsignedInteger('prioridad')->default(100);
            $table->string('id_idioma')->default('es');
            $table->boolean('can_shuffle')->default(False);
            $table->timestamps();
            $table->foreign('cuestionario_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cuestionarios');
    }
}
