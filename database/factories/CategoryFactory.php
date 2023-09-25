<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       $catName = $this->faker->colorName();
        return [
            
            'name' => $catName,
            'slug' => $catName,
            'image' => $this->faker->imageUrl(),
           
        ];
    }
}
