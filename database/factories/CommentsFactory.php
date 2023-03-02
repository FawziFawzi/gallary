<?php

namespace Database\Factories;

use App\Models\posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id'=>posts::factory() ,
            'user_id'=>User::factory(),
            'body'=> $this->faker->paragraph(),
        ];
    }
}
