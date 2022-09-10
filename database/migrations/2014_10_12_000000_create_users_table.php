<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre de Usuario');
            $table->string('last')->nullable()->comment('Apellido de Usuario');
            $table->string('email')->unique()->comment('Correo electronico');
            $table->timestamp('email_verified_at')->nullable()->comment('Verificacion de correo');
            $table->string('password')->comment('Contraseña');
            $table->enum('type', ['admin','mod','pub','seller','user'])->default('user')->comment('Tipo de Usuario'); // Administrador, Moderador, Publicidad, Vendedor(tienda), Usuario (comprador)
            $table->rememberToken()->comment('Token recordatorio');
            $table->timestamps()->comment('estampas de tiempo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}