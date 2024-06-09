<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->sentence(), /**Genera una oracion */
            
            'habilitated'=> false,
            'content'=> $this->faker->text(700), /**Genera un parrafo con 300 caracteres */
            'iduser'=> $this->faker->numberBetween(1,20), /**Genera un numero aleatorio entre 1 y 10 */
            


        ];
    }
}
