<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\projeck>
 */
class projeckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => fake()->sentence(2),
            "user_id" => mt_rand(1,5),
            "kategori_id" => mt_rand(1,3),
            "slug" => fake()->sentence(2),
            "excerpt" => fake()->paragraph(mt_rand(5,10)),
            "body" => "<p>" . implode("</p><p>",fake()->paragraphs(mt_rand(10,20)) ) . "</p>"
        ];
    }
}
