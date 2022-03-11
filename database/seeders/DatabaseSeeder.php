<?php

namespace Database\Seeders;

use App\Models\Alumnos;
use App\Models\Categorias;
use App\Models\ModelCategoria;
use App\Models\User;
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
        User::factory(5)->create();
        Categorias::factory(20)->create();
        Alumnos::factory(20)->create();

    }
}
