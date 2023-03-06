<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // inserting values into one particular field
        $skill = new Skill();
        $skill->description ='slab';
        $skill->save();

        $skill = new Skill();
        $skill->description ='endurance';
        $skill->save();

        $skill = new Skill();
        $skill->description ='technique';
        $skill->save();

        $skill = new Skill();
        $skill->description ='dyno';
        $skill->save();

        $skill = new Skill();
        $skill->description ='finger strength';
        $skill->save();
    }
}
