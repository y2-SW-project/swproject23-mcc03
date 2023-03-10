<?php

namespace Database\Seeders;

use App\Models\UserSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_skill = new UserSkill();
        $user_skill->user_id = 1;
        $user_skill->skill_id = 1;
        $user_skill->rating = 5;
        $user_skill->save();

        $user_skill = new UserSkill();
        $user_skill->user_id = 1;
        $user_skill->skill_id = 2;
        $user_skill->rating = 3;
        $user_skill->save();

        $user_skill = new UserSkill();
        $user_skill->user_id = 1;
        $user_skill->skill_id = 3;
        $user_skill->rating = 2;
        $user_skill->save();
    }
}
