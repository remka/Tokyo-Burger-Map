<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'see listing of roles',
                'created_at' => '2016-11-11 16:47:14',
                'updated_at' => '2016-11-11 16:47:14',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'create new role',
                'created_at' => '2016-11-11 16:47:14',
                'updated_at' => '2016-11-11 16:47:14',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'edit roles',
                'created_at' => '2016-11-11 16:47:14',
                'updated_at' => '2016-11-11 16:47:14',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'delete roles',
                'created_at' => '2016-11-11 16:47:14',
                'updated_at' => '2016-11-11 16:47:14',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'resto-list',
                'display_name' => 'Display Restaurant Listing',
                'description' => 'see listing of restaurants',
                'created_at' => '2016-11-11 16:47:14',
                'updated_at' => '2016-11-11 16:47:14',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'resto-create',
                'display_name' => 'Create Restaurant',
                'description' => 'create new restaurant',
                'created_at' => '2016-11-11 16:47:14',
                'updated_at' => '2016-11-11 16:47:14',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'resto-edit',
                'display_name' => 'Edit Restaurant',
                'description' => 'edit restaurants',
                'created_at' => '2016-11-11 16:47:14',
                'updated_at' => '2016-11-11 16:47:14',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'resto-delete',
                'display_name' => 'Delete Restaurant',
                'description' => 'delete restaurants',
                'created_at' => '2016-11-11 16:47:14',
                'updated_at' => '2016-11-11 16:47:14',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'see-admin',
                'display_name' => 'See administration',
                'description' => 'User can see the admin section',
                'created_at' => '2016-11-11 16:50:02',
                'updated_at' => '2016-11-11 16:50:02',
            ),
        ));


    }
}
