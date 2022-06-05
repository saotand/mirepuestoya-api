<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarPartImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_part_images', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->comment('Identificador Unico');
            $table->string('name')->unique()->comment('Nombre');
            $table->text('part_comment')->comment('Texto de la imagen');
            $table->text('path')->unique()->comment('Ruta de Imagen');
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
        Schema::dropIfExists('car_part_images');
    }
}