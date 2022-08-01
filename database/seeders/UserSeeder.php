<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->fixed_add();
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "admin@website.com",
            'password' => Hash::make('password'),
            'type'=> "user",
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

    }

    public function fixed_add(){

        DB::table('users')->insert([
            'name'=>'Administrador',
            'email'=>'admin@turepuestoya.com',
            'password'=> Hash::make('admin'),
            'type'=> "admin",
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);

    }

}
