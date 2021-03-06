<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('pais_presentacion');
            $table->boolean('entidad_pequenia');
            $table->string('tipo');
            $table->string('aplicacion');
            $table->string('email_registro');
            $table->string('autorizacion');

            $table->softDeletes();
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
        Schema::dropIfExists('patentes');
    }
}
