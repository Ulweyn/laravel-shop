<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'price' => rand(200,1500),
            'in_stock' => 1,
            'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad alias amet consequuntur cum eligendi facilis laborum laudantium molestias odit omnis praesentium quibusdam quisquam quos similique, sit suscipit veniam voluptatum."
        ];
    }
}
