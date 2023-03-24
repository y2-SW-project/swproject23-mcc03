<?php

namespace Database\Seeders;

use App\Models\ForumPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForumPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // amount of times it creates fake data
        ForumPost::factory()->times(20)->create();
    }
}
