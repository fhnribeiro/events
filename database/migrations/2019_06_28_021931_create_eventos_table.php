<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer("tipo")->nullable();
            $table->integer("totalIngressos");
            $table->dateTime("data");
            $table->string("nome");
            $table->string("imagem")->nullable();
            $table->bigInteger('categoria_id')->unsigned()->index()->nullable();
            $table->foreign('categoria_id')->references("id")->on("categorias")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
