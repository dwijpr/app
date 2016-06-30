<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sample',
                'created_at' => '2016-06-30 05:26:28',
                'updated_at' => '2016-06-30 05:26:47',
                'deleted_at' => '2016-06-30 05:26:47',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Naik Angkot [Cipatik - Tegal Lega]',
                'created_at' => '2016-07-01 04:30:00',
                'updated_at' => '2016-07-01 04:30:39',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Hapus ini',
                'created_at' => '2016-07-01 04:30:48',
                'updated_at' => '2016-07-01 04:31:01',
                'deleted_at' => '2016-07-01 04:31:01',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gorengan',
                'created_at' => '2016-07-01 04:30:55',
                'updated_at' => '2016-07-01 04:30:55',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
