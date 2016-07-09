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
            30 => 
            array (
                'id' => 31,
                'name' => 'Get Used New York Jeans',
                'created_at' => '2016-07-03 02:02:33',
                'updated_at' => '2016-07-03 02:02:33',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Game JoyPad usb 2.0',
                'created_at' => '2016-07-03 02:03:56',
                'updated_at' => '2016-07-03 02:03:56',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Super Cleaning Set MCS-01 6 in 1 MediaTech',
                'created_at' => '2016-07-03 02:04:52',
                'updated_at' => '2016-07-03 02:04:52',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Naik Angkot [Caringin - Sadang Serang]',
                'created_at' => '2016-07-03 02:06:22',
                'updated_at' => '2016-07-03 02:06:22',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Naik Angkot [Cimahi - Leuwi Panjang]',
                'created_at' => '2016-07-03 02:06:45',
                'updated_at' => '2016-07-03 02:06:45',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Choice Guava',
                'created_at' => '2016-07-03 02:07:48',
                'updated_at' => '2016-07-03 02:07:48',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Fruit Tea Blackcurrant',
                'created_at' => '2016-07-03 02:08:10',
                'updated_at' => '2016-07-03 02:08:10',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Nasi Ayam Goreng Ampera',
                'created_at' => '2016-07-03 04:23:52',
                'updated_at' => '2016-07-03 04:23:52',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Rinso Liq.A/N PCH800',
                'created_at' => '2016-07-03 17:09:03',
                'updated_at' => '2016-07-03 17:09:03',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Indocafe Coffemix 3 in 1 10S',
                'created_at' => '2016-07-03 17:09:32',
                'updated_at' => '2016-07-03 17:09:32',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Bagus Sikat Baju 20930',
                'created_at' => '2016-07-03 17:09:55',
                'updated_at' => '2016-07-03 17:09:55',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Ayam Goreng + Nasi',
                'created_at' => '2016-07-03 19:26:09',
                'updated_at' => '2016-07-03 19:26:09',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Laundry Bulanan',
                'created_at' => '2016-07-03 20:57:18',
                'updated_at' => '2016-07-03 20:57:18',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Transfer',
                'created_at' => '2016-07-03 21:09:41',
                'updated_at' => '2016-07-03 21:09:41',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Zakat Fitrah',
                'created_at' => '2016-07-05 10:04:27',
                'updated_at' => '2016-07-05 10:04:27',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Mr. Bread Gandum Keju',
                'created_at' => '2016-07-05 10:05:11',
                'updated_at' => '2016-07-05 10:05:11',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Nasi Ayam Goreng Babat',
                'created_at' => '2016-07-05 10:07:25',
                'updated_at' => '2016-07-05 10:07:25',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Siomay',
                'created_at' => '2016-07-06 16:59:00',
                'updated_at' => '2016-07-06 16:59:00',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Indomie Goreng Telor',
                'created_at' => '2016-07-06 17:01:22',
                'updated_at' => '2016-07-06 17:01:22',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Tolak Angin 5s',
                'created_at' => '2016-07-06 17:02:10',
                'updated_at' => '2016-07-06 17:02:10',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Buavita Mango 1L',
                'created_at' => '2016-07-06 17:02:40',
                'updated_at' => '2016-07-06 17:02:40',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Teh Botol Sosro Origin 1L',
                'created_at' => '2016-07-06 19:18:31',
                'updated_at' => '2016-07-06 19:18:31',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Indocafe Coffemix Big',
                'created_at' => '2016-07-07 12:37:21',
                'updated_at' => '2016-07-07 12:37:21',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Swallow SD Khusu',
                'created_at' => '2016-07-07 12:37:56',
                'updated_at' => '2016-07-07 12:37:56',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Nivea R/D Melkic',
                'created_at' => '2016-07-07 12:38:20',
                'updated_at' => '2016-07-07 12:38:20',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Lifebuoy Red White 100ml',
                'created_at' => '2016-07-07 12:38:49',
                'updated_at' => '2016-07-07 12:38:49',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'GreenBell SMMDBS',
                'created_at' => '2016-07-07 12:39:22',
                'updated_at' => '2016-07-07 12:39:22',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Indomie Pop Mie Baso',
                'created_at' => '2016-07-07 12:39:40',
                'updated_at' => '2016-07-07 12:39:40',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Nasi Padang Rendang Telor Dadar',
                'created_at' => '2016-07-07 12:40:17',
                'updated_at' => '2016-07-07 12:40:17',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Nasi Padang Ayam Goreng Tetelan',
                'created_at' => '2016-07-08 13:49:30',
                'updated_at' => '2016-07-08 13:49:30',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Sari Roti - Roti Sobek isi Coklat Keju',
                'created_at' => '2016-07-08 18:39:52',
                'updated_at' => '2016-07-08 18:39:52',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Saos ABC Bangkok',
                'created_at' => '2016-07-08 18:40:23',
                'updated_at' => '2016-07-08 18:40:23',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Nasi Padang Ayam Goreng',
                'created_at' => '2016-07-10 04:09:26',
                'updated_at' => '2016-07-10 04:09:26',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Batagor',
                'created_at' => '2016-07-10 04:09:46',
                'updated_at' => '2016-07-10 04:09:46',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
