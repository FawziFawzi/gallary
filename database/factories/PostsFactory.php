<?php

namespace Database\Factories;

use App\Models\postTags;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_tags_id'=>postTags::factory()->create(),
            'user_id'=>User::factory(),
            'title'=> $this->faker->sentence(),
            'post_slug'=> $this->faker->unique()->slug(),
            'excerpt'=> $this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
            'post_thumbnail'=>$this->faker->sentence(),
        ];
    }
}
