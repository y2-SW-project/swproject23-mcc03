<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = 1;
        $user->name = "mcc";
        $user->email = "mcc@gmail.com";
        $user->description = "hello this is my description";
        $user->profile_img;
        $user->password = bcrypt("12345678");
        $user->save();

        User::factory()->times(20)->create();



    }
}
