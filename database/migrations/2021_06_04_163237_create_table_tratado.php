<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTratado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratado', function (Blueprint $table) {
            $table->id();
            $table->string('pais_import');
            $table->decimal('impuesto',10,2);
            $table->date('fec_tratado');
            $table->string('pais_export');
            $table->string('producto');
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
        Schema::dropIfExists('tratado');
    }
}
