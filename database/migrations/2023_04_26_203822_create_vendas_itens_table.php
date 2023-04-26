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
        Schema::create('vendas_itens', function (Blueprint $table) {
            $table->id();
            $table->integer('venda_id')->references('id')->on('vendas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('produto_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantidade');
            $table->float('vr_unitario');
            $table->float('vr_total');
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas_itens');
    }
};
