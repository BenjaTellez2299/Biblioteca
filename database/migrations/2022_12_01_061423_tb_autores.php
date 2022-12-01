<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tb_autores', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->Bigincrements('idAutor');
            $table->string('Nombre');
            $table->date('fecha');
            $table->integer('libros');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
};
