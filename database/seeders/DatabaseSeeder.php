<?php

namespace Database\Seeders;

use App\Models\usuarios;
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
        // User::factory(10)->create();

        // $this->call(autoresSeeder::class);
        // $this->call(usuariosSeeder::class);
         $this->call(EmpresasSeeder::class);
        // $this->call(RepresentantesSeeder::class);
        //$this->call(cecionariosSeeder::class);

    }
}
