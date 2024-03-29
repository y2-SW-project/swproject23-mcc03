<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
        $this->call(SkillSeeder::class);
        $this->call(UserSkillSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ForumPostSeeder::class);
    }
}
