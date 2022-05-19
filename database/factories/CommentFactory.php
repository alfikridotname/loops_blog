<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'post_id'   => rand(1, 5),
            'name'      => $this->faker->name,
            'email'     => $this->faker->unique()->safeEmail,
            'website'   => $this->faker->url,
            'comment'   => $this->faker->paragraph,
        ];
    }
}
