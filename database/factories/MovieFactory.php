<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'title'=>$this->faker->name,
            'description'=>$this->faker->paragraph(),
            'duration'=>$this->faker->randomNumber,
            'release_date'=>$this->faker->date,
            'genre_id'=>Genre::all()->random()->id,
            'created_at'=>$this->faker->date,
            'updated_at'=>$this->faker->date,
        ];
    }
}
