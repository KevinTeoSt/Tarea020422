<?php

namespace Database\Seeders;

use App\Models\ModelCategoria;
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
        ModelCategoria::factory(1000)->create();
    }
}
