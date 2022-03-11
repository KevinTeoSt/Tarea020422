<?php

namespace Database\Seeders;


use App\Models\Alumnos;
use Illuminate\Database\Seeder;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumnos::factory(20)->create();
    }
}
