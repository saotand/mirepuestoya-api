<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_parts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->comment('Identificador Unico');
            $table->string('name',150)->unique()->comment('Nombre');
            $table->text('image')->nullable()->comment('Imagen de Partes de carro');
            $table->text('description')->nullable()->comment('Descripcion de Partes de carro');
            $table->integer('counter')->default('0')->comment('Contador de Ratings');
            $table->boolean('active')->default('1')->comment('0=Desactivado, 1=Activo');
            $table->bigInteger('car_family_parts_id')->unsigned()->nullable()->comment('Parentesco a CarFamilyParts');
            $table->foreign('car_family_parts_id')->references('id')->on('car_family_parts')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('car_parts');
    }
}
