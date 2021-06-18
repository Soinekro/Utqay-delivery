<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorizados', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('licencia')->unique();
            $table->string('dni',8)->unique();
            $table->enum('status',[1,2])->default(1);
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('disctrict_id')->nullable();
            $table->foreign('disctrict_id')->references('id')->on('disctricts')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('motorizados');
    }
}
