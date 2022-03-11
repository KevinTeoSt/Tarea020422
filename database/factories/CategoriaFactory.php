<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Description'=>$this->faker->randomElements($array = array ('Nuevo','Repitente','Retirado', 'Graduado'), $count = 1),
        ];
    }
}
