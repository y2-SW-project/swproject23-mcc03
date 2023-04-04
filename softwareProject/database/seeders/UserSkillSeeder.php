<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\UserSkill;

class UserSkillSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $skills = Skill::inRandomOrder()->limit(5)->get();
        $faker = \Faker\Factory::create();

        foreach ($users as $user) {
            foreach ($skills as $skill) {
                UserSkill::create([
                    'user_id' => $user->id,
                    'skill_id' => $skill->id,
                    'rating' => $faker->numberBetween(1, 5),
                ]);
            }
        }
    }
}


