<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->string('tipo');
            $table->string('subtipo');
            $table->string('empresa');
            $table->string('descritivo');
            $table->string('site');
            $table->string('email');
            $table->string('contato');
            $table->string('celular');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('bairro');
            $table->integer('numero_casa');
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
        Schema::dropIfExists('formularios');
    }
};
