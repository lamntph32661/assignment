<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'image'=>$this->faker->paragraph,
            'price'=>$this->faker->randomFloat(8,2,100),
            'discount'=>$this->faker->randomFloat(8,2,100),
            'quantity'=>$this->faker->randomNumber(),
            'description'=>$this->faker->paragraph,
            'category_id'=>Category::all()->random()->id,
        ];
    }
}
