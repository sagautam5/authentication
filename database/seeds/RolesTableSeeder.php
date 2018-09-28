<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin User

        $role = new Role;
        $role->name = 'admin';
        $role->save();

        // General User

        $role = new Role;
        $role->name = 'guest';
        $role->save();
    }
}
