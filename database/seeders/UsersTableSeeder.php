<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'soporte',
                'email' => 'pdigitalgroup@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ACJOTKrFd8E70tuPEAbU2OxlytAA.J56qDPxRNxhKD1eCel/iRtuS',
                'prioridad' => 100,
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Juan Bautista Josses Corrales',
                'email' => 'guitarjosses@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uB61/ebdqlEYVaVQ/pnjfeSI1oFjh/RZYPa.u0k3EZwfZGTy66qDG',
                'prioridad' => 100,
                'remember_token' => NULL,
                'created_at' => '2022-03-29 04:10:48',
                'updated_at' => '2022-03-29 04:10:48',
            ),
        ));
        
        
    }
}