<?php

namespace Database\Seeders;

use App\Models\ModelCategoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelCategoria::factory(1000)->create();
    }
}
