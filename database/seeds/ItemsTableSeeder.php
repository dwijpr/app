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
            12 => 
            array (
                'id' => 13,
                'name' => 'Sari Roti - Sandwich Coklat',
                'created_at' => '2016-07-02 20:56:58',
                'updated_at' => '2016-07-02 20:56:58',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Sari Roti - Sandwich Srikaya',
                'created_at' => '2016-07-02 20:57:50',
                'updated_at' => '2016-07-02 20:57:50',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Laundry',
                'created_at' => '2016-07-02 21:15:52',
                'updated_at' => '2016-07-02 21:15:52',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Baso Siomay',
                'created_at' => '2016-07-02 21:27:41',
                'updated_at' => '2016-07-02 21:27:41',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Regal Marie 125gr',
                'created_at' => '2016-07-02 21:28:43',
                'updated_at' => '2016-07-02 21:28:43',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bango Kecap Manis 135gr',
                'created_at' => '2016-07-02 21:29:19',
                'updated_at' => '2016-07-02 21:29:19',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Ayam Goreng - Usus, Original, Pedas',
                'created_at' => '2016-07-02 21:33:00',
                'updated_at' => '2016-07-02 21:33:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Indofood Sambal Extra Hot 140gr',
                'created_at' => '2016-07-02 21:34:03',
                'updated_at' => '2016-07-02 21:34:03',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Baso Batagor',
                'created_at' => '2016-07-02 21:35:05',
                'updated_at' => '2016-07-02 21:35:05',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Indocafe Coffemix Pack 5',
                'created_at' => '2016-07-02 21:35:40',
                'updated_at' => '2016-07-02 21:35:40',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Mie Sedaap Cup Goreng',
                'created_at' => '2016-07-02 21:36:38',
                'updated_at' => '2016-07-02 21:36:38',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Nasi Sayur Telor Dadar',
                'created_at' => '2016-07-02 21:37:07',
                'updated_at' => '2016-07-02 21:37:07',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Indomaret Wafer Stick Chocolate 500gr',
                'created_at' => '2016-07-02 21:38:00',
                'updated_at' => '2016-07-02 21:38:00',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Nasi Sayur Ayam Kecap',
                'created_at' => '2016-07-02 21:38:34',
                'updated_at' => '2016-07-02 21:38:34',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Lifebuoy BS White 100ml',
                'created_at' => '2016-07-02 21:48:11',
                'updated_at' => '2016-07-02 21:48:11',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'You C1000 Orange 140ml',
                'created_at' => '2016-07-02 21:50:50',
                'updated_at' => '2016-07-02 21:50:50',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Kratingdaeng 150ml',
                'created_at' => '2016-07-02 21:54:16',
                'updated_at' => '2016-07-02 21:54:16',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Gojek Ride',
                'created_at' => '2016-07-02 21:55:23',
                'updated_at' => '2016-07-02 21:55:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
