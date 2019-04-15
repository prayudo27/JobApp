<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $role_user = new Role();
            $role_user->name = 'employee';
            $role_user->description = 'A user User';
            $role_user->save();

            $role_admin = new Role();
            $role_admin->name = 'admin';
            $role_admin->description = 'A ADmin User';
            $role_admin->save();
        }
    }
}
