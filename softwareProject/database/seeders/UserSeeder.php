<?php

namespace Database\Seeders;

use App\Models\Role;
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

        // gets admin role from the table. will attach this role to a user
        $role_admin = Role::where('name', 'admin')->first();

        // gets user role from the table. will attach this role to a user
        $role_climber = Role::where('name', 'climber')->first();

        $admin = new User();
        $admin->id = 1;
        $admin->name = "mcc";
        $admin->email = "mcc@gmail.com";
        $admin->description = "I am an admin, I should be able to do everything!";
        $admin->profile_img;
        $admin->password = bcrypt("12345678");
        $admin->save();

        // attach the admin role to the user that was created above.
        $admin->roles()->attach($role_admin);

        $climber = new User();
        $climber->id = 2;
        $climber->name = "Climber";
        $climber->email = "climb@gmail.com";
        $climber->description = "I am a user with the role climber, my functionality should be restricted.";
        $climber->profile_img;
        $climber->password = bcrypt("12345678");
        $climber->save();
        
        // attach the climber role to the user that was created above.
        $climber->roles()->attach($role_climber);


        User::factory()->times(20)->create();

    }
}
