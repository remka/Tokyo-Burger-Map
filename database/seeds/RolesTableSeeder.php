<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Admin',
                'description' => 'User is an admin',
                'created_at' => '2016-11-11 16:47:36',
                'updated_at' => '2016-11-11 16:47:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'staff',
                'display_name' => 'Staff',
                'description' => 'User is a staff member',
                'created_at' => '2016-11-11 16:47:36',
                'updated_at' => '2016-11-11 16:47:36',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'default',
                'display_name' => 'Default',
                'description' => 'User is a default user',
                'created_at' => '2016-11-11 16:47:36',
                'updated_at' => '2016-11-11 16:47:36',
            ),
        ));
        
        
    }
}
