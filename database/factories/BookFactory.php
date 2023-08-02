<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'pages' => rand(100,500),
            'summary' => $this->faker->paragraph(),
            'ebook'=> rand(1,2),
            'author_id' => rand(1,10),
            'path_cover' => $this->faker->imageUrl(150, 150),


        ];
    }
}
