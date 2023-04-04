<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Skill;
use Faker\Generator as Faker;
use App\Models\UserSkill;


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
        // return [
        //     'user_id' => User::inRandomOrder()->first()->id,
        //     'skill_id' => Skill::inRandomOrder()->first()->id,
        //     'rating' => $this->faker->numberBetween(1, 5),
        // ];
    }
}
