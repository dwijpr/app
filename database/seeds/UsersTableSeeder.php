<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dwi Prabowo',
                'email' => 'dwijpr@gmail.com',
                'password' => '$2y$10$SHGdCvpP6ioSYfdIeWOyJe439XUP3ZvoHUvsrS50MssER6BN/DoBO',
                'remember_token' => NULL,
                'created_at' => '2016-06-30 05:26:01',
                'updated_at' => '2016-06-30 05:26:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Owl Prestige',
                'email' => 'owlpre@gmail.com',
                'password' => '$2y$10$MWtGkuAMnuroTgrMBOan0u9ksnwqyEYs5yXWonK0n6Eyhf8XzmcBC',
                'remember_token' => NULL,
                'created_at' => '2016-06-30 05:26:02',
                'updated_at' => '2016-06-30 05:26:02',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
