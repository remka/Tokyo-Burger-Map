<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $roles = [
        [
          'name' => 'admin',
          'display_name' => 'Admin',
          'description' => 'User is an admin'
        ],
        [
          'name' => 'staff',
          'display_name' => 'Staff',
          'description' => 'User is a staff member'
        ],
        [
          'name' => 'default',
          'display_name' => 'Default',
          'description' => 'User is a default user'
        ]
      ];

      foreach ($roles as $key => $role) {
        Role::create($role);
      }

    }
}
