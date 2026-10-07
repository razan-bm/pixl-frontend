<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_id' => Profile::factory(),
            'parent_id' => null,
            'content' => $this->faker->realText(200 ),
            
        ];
    }

    public function reply(Post $parentPost) {
        return $this->state(state: [
            'parent_id' => $parentPost->id,
            'profile_id' => $this->faker->realText(200)
         ]);
    }
}
