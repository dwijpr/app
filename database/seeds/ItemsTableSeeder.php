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
            4 => 
            array (
                'id' => 5,
                'name' => 'Coca Cola 1500ml',
                'created_at' => '2016-07-02 04:33:27',
                'updated_at' => '2016-07-02 04:33:27',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Sozzis Sosis Sapi 3s',
                'created_at' => '2016-07-02 04:34:22',
                'updated_at' => '2016-07-02 04:34:22',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Pop mie goreng spesial',
                'created_at' => '2016-07-02 06:18:55',
                'updated_at' => '2016-07-02 06:18:55',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Indomie noodle ayam/pedas',
                'created_at' => '2016-07-02 06:24:53',
                'updated_at' => '2016-07-02 06:24:53',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Marlboro Red',
                'created_at' => '2016-07-02 06:46:22',
                'updated_at' => '2016-07-02 06:46:22',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Nasi Sayur Ayam Goreng',
                'created_at' => '2016-07-02 06:49:39',
                'updated_at' => '2016-07-02 06:49:39',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'mantap',
                'created_at' => '2016-07-02 17:42:56',
                'updated_at' => '2016-07-02 17:42:56',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'jos',
                'created_at' => '2016-07-02 17:44:15',
                'updated_at' => '2016-07-02 17:44:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
