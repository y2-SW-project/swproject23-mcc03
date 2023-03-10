<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'user_id' => $this->faker->numberBetween(0, 20),
            // 'skill_id' => $this->faker->numberBetween(0, 20),
            // 'rating' => $this->faker->numberBetween(0, 5)
        ];
    }
}
