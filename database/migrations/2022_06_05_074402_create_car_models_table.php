<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id()->comment('Identificador Unico');
            $table->string('name',150)->unique()->comment('Nombre');
            $table->text('description')->nullable()->comment('Descripcion de Modelo de carro');
            $table->integer('counter')->default('0')->comment('Contador de Ratings');
            $table->boolean('active')->default('1')->comment('0=Desactivado, 1=Activo');
            $table->text('image')->comment('Imagen de Modelo');
            $table->bigInteger('car_brands_id')->unsigned()->nullable()->comment('Parentesco con CarBrands');
            $table->foreign('car_brands_id')->references('id')->on('car_brands')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('car_models');
    }
}
