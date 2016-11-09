<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $permissions = [
        [
          'name' => 'role-list',
          'display_name' => 'Display Role Listing',
          'description' => 'see listing Of Roles'
        ],
        [
          'name' => 'role-create',
          'display_name' => 'Create Role',
          'description' => 'create New Role'
        ],
        [
          'name' => 'role-edit',
          'display_name' => 'Edit Role',
          'description' => 'edit roles'
        ],
        [
          'name' => 'role-delete',
          'display_name' => 'Delete Role',
          'description' => 'delete roles'
        ],
        [
          'name' => 'resto-list',
          'display_name' => 'Display Restaurant Listing',
          'description' => 'see listing of restaurants'
        ],
        [
          'name' => 'resto-create',
          'display_name' => 'Create Restaurant',
          'description' => 'create new restaurant'
        ],
        [
          'name' => 'resto-edit',
          'display_name' => 'Edit Restaurant',
          'description' => 'edit restaurants'
        ],
        [
          'name' => 'resto-delete',
          'display_name' => 'Delete Restaurant',
          'description' => 'delete restaurants'
        ]
      ];

      foreach ($permissions as $key => $permission) {
        Permission::create($permission);
      }
      
    }
}
