<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisctrictPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disctrict_pedido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disctrict_id');
            $table->unsignedBigInteger('pedido_id');
            $table->foreign('disctrict_id')->references('id')->on('disctricts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('disctrict_pedido');
    }
}
