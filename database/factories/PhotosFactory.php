<?php

namespace Database\Factories;

use App\Models\photo_tags;
use App\Models\photoTags;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\photos>
 */
class PhotosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->word(),
            'thumbnail' => $this->faker->sentence(),
            'user_id'=>User::factory(),
            'photo_tags_id'=>photoTags::factory()->create(),
        ];
    }
}
