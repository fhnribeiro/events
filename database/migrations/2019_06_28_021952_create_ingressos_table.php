<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngressosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingressos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("lugar");
            $table->bigInteger('cliente_id')->unsigned()->index()->nullable();
            $table->foreign('cliente_id')->references("id")->on("clientes");
            $table->bigInteger('evento_id')->unsigned()->index()->nullable();
            $table->foreign('evento_id')->references("id")->on("eventos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingressos');
    }
}
