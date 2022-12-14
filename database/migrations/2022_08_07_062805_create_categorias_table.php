<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categoria')->nullable()->default(NULL);;
            $table->unsignedBigInteger('id_negocio');
            $table->string('name',100);
            $table->string('descrip',500)->nullnable();
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_negocio')->references('id')->on('negocios')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('categorias');
    }
}
