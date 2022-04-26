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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->bigInteger('id_categoria')->unsigned();
            $table->integer('stock');
            $table->float('precio');
            $table->integer('año de publicacion');
            $table->string('autor')->nullable(); 
            $table->string('foto');
            $table->timestamps();
            $table->foreign('id_categoria')
                    ->references('id')
                    ->on('categorias')
                    ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
};
