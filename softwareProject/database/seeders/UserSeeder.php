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
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->id = 1;
        $admin->name = "mcc";
        $admin->email = "mcc@gmail.com";
        $admin->description = "I am an admin, I should be able to do everything!";
        $admin->profile_img = 'admin.png';
        $admin->password = bcrypt("12345678");
        $admin->save();

        // attach the admin role to the user that was created above.
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->id = 2;
        $user->name = "user";
        $user->email = "climb@gmail.com";
        $user->description = "I am a user with the role user, my functionality should be restricted.";
        $user->profile_img = 'placeholder_fn.png';
        $user->password = bcrypt("12345678");
        $user->save();
        
        // attach the user role to the user that was created above.
        $user->roles()->attach($role_user);


        User::factory()->times(20)->create();

    }
}
