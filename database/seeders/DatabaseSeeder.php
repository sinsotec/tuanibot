<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create();
        $this->call([UserSeeder::class,]);
        $this->call(UsersTableSeeder::class);
        $this->call(CuestionariosTableSeeder::class);
        $this->call(PreguntasTableSeeder::class);
        $this->call(ConclusionesTableSeeder::class);
    }
}
