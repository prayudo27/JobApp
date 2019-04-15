<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $role_user = Role::where('name', 'employee')->first();
            $role_admin = Role::where('name', 'admin')->first();

            $user = new User();
            $user->name = 'User Name';
            $user->email = 'employee@example.com';
            $user->password = bcrypt('secret');
            $user->save();
            $user->roles()->attach($role_user);

            $admin = new User();
            $admin->name = 'Admin Name';
            $admin->email = 'admin@example.com';
            $admin->password = bcrypt('secret');
            $admin->save();
            $admin->roles()->attach($role_admin);
        }
    }
}
