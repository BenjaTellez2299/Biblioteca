<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_libros', function (Blueprint $table) {

            $table->id('idLibro');
            $table->unsignedBigInteger('idautor');
            $table->bigInteger('isbn');
            $table->string('titulo');
            $table->integer('paginas');
            $table->string('editorial');
            $table->string('correo');
            $table->timestamps();

            $table->foreign('idautor')->references('idAutor')->on('tb_autores')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        //
    }
};
