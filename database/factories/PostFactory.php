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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 5)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // menggunakan implode
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(4, 14))) . '</p>',

            //menggunakan map
            // 'body' => collect($this->faker->paragraphs(mt_rand(4, 14)))->map(function ($p) {
            //     return "<p>$p</p>";
            // }),

            // Menggunakan function baru dari php terbaru
            'body' => collect($this->faker->paragraphs(mt_rand(4, 14)))->map(fn ($p) => "<p>$p</p>")->implode(''),

            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 4)
        ];
    }
}
