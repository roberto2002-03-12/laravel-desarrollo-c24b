<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbarcacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embarcacion', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad_tripu');
            $table->string('destino');
            $table->date('inicio');
            $table->date('llegada');
            $table->integer('nro_comunicacion');
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
        Schema::dropIfExists('embarcacion');
    }
}
