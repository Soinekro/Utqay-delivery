<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('cantidad');
            $table->text('address');
            $table->integer('monto');
            $table->enum('status',[1,2,3])->default(1);
            //llave foranea de Cliente
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('set null');
            //llave foranea de motorizado
            $table->unsignedBigInteger('motorizado_id')->nullable();
            $table->foreign('motorizado_id')->references('id')->on('motorizados')->onDelete('set null');
            //llave foranea de producto
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
            //llave foranea de aliado
            $table->unsignedBigInteger('alied_id')->nullable();
            $table->foreign('alied_id')->references('id')->on('alieds')->onDelete('set null');
            //llave foranea de tipo de pago
            $table->unsignedBigInteger('tipo_pago_id')->nullable();
            $table->foreign('tipo_pago_id')->references('id')->on('tipo_pagos')->onDelete('set null');
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
        Schema::dropIfExists('pedidos');
    }
}
