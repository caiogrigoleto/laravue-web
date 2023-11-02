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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('cnpj');
            $table->string('email');
            $table->string('senha');
            $table->string('nomeEmpresa');
            $table->integer('codEmpresa');
            $table->integer('codLoja');
            $table->boolean('flagAtivo');
            $table->date('vencTrial');
            $table->date('dataContratacao')->nullable();
            $table->date('dataCadastro');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
};
