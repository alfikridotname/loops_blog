<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition()
    {
        $title = $this->faker->sentence;

        return [
            'user_id'   => rand(1, 5),
            'title'     => $title,
            'slug'      => Str::slug($title),
            'content'   => $this->faker->paragraph,
        ];
    }
}
