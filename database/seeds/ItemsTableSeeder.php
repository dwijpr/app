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
            64 => 
            array (
                'id' => 65,
                'name' => 'KLIKPAY ID',
                'created_at' => '2016-07-10 11:18:27',
                'updated_at' => '2016-07-10 11:18:27',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'ACE-PA-HOUSEHOLD GUARD JAKARTA ID',
                'created_at' => '2016-07-10 11:19:09',
                'updated_at' => '2016-07-10 11:19:09',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Premi BCA Kredit Life',
                'created_at' => '2016-07-10 11:19:33',
                'updated_at' => '2016-07-10 11:19:33',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Bea Meterai Lunas',
                'created_at' => '2016-07-10 11:19:51',
                'updated_at' => '2016-07-10 11:19:51',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Annual Membership Fee - Flash',
                'created_at' => '2016-07-10 11:20:34',
                'updated_at' => '2016-07-10 11:20:34',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Annual Membership Fee - Visa',
                'created_at' => '2016-07-10 11:20:45',
                'updated_at' => '2016-07-10 11:20:45',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Sunlight Sachet Sedang',
                'created_at' => '2016-07-10 18:13:33',
                'updated_at' => '2016-07-10 18:13:33',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Dove Shampoo Total Damage',
                'created_at' => '2016-07-10 18:13:58',
                'updated_at' => '2016-07-10 18:13:58',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Hansaplast 1/20 M',
                'created_at' => '2016-07-10 18:14:23',
                'updated_at' => '2016-07-10 18:14:23',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Counterpain 15gr',
                'created_at' => '2016-07-10 18:14:44',
                'updated_at' => '2016-07-10 18:14:44',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Betadine Solution',
                'created_at' => '2016-07-10 18:15:06',
                'updated_at' => '2016-07-10 18:15:06',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Bayar Kos Belakang Terminal Leuwi Panjang',
                'created_at' => '2016-07-10 18:15:50',
                'updated_at' => '2016-07-10 18:15:50',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Nescafe Smvlte',
                'created_at' => '2016-07-11 19:06:28',
                'updated_at' => '2016-07-11 19:06:28',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Sosro Teh Botol Original 45',
                'created_at' => '2016-07-11 19:06:57',
                'updated_at' => '2016-07-11 19:06:57',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Naik Angkot [Kalapa - Cibaduyut]',
                'created_at' => '2016-07-12 19:18:50',
                'updated_at' => '2016-07-12 19:18:50',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'L&L Water Bottle 730',
                'created_at' => '2016-07-12 19:20:08',
                'updated_at' => '2016-07-12 19:20:08',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Cilok',
                'created_at' => '2016-07-12 19:20:18',
                'updated_at' => '2016-07-12 19:20:18',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Makan Siang Lebih',
                'created_at' => '2016-07-14 03:35:55',
                'updated_at' => '2016-07-14 03:35:55',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Korek Gas',
                'created_at' => '2016-07-15 04:14:36',
                'updated_at' => '2016-07-15 04:14:36',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Other',
                'created_at' => '2016-07-15 04:15:18',
                'updated_at' => '2016-07-15 04:15:18',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Nasi Padang Cincang Telor Dadar',
                'created_at' => '2016-07-15 04:16:12',
                'updated_at' => '2016-07-15 04:16:12',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Nasi Sayur Teri Ayam',
                'created_at' => '2016-07-16 14:32:42',
                'updated_at' => '2016-07-16 14:32:42',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Ayam Goreng Pedas',
                'created_at' => '2016-07-17 19:51:45',
                'updated_at' => '2016-07-17 19:51:45',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Usus Goreng',
                'created_at' => '2016-07-17 19:52:04',
                'updated_at' => '2016-07-17 19:52:04',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => '2 Blibis Saus Cabe 135gr',
                'created_at' => '2016-07-17 19:52:48',
                'updated_at' => '2016-07-17 19:52:48',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Teh Gelas',
                'created_at' => '2016-07-18 18:39:01',
                'updated_at' => '2016-07-18 18:39:01',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Chitato Sapi Panggang 15gr',
                'created_at' => '2016-07-19 19:13:41',
                'updated_at' => '2016-07-19 19:13:41',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Ale Ale',
                'created_at' => '2016-07-21 02:34:44',
                'updated_at' => '2016-07-21 02:34:44',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Baso Babat',
                'created_at' => '2016-07-23 03:39:17',
                'updated_at' => '2016-07-23 03:39:17',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Happy Tos Tortilla Chips',
                'created_at' => '2016-07-23 12:21:54',
                'updated_at' => '2016-07-23 12:21:54',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Indocafe Coffemix 10s',
                'created_at' => '2016-07-23 12:22:19',
                'updated_at' => '2016-07-23 12:22:19',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Ayam Goreng Original',
                'created_at' => '2016-07-23 19:22:22',
                'updated_at' => '2016-07-23 19:22:22',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Nasi Padang Rendang Cincang',
                'created_at' => '2016-07-24 18:34:59',
                'updated_at' => '2016-07-24 18:34:59',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Charger Hape',
                'created_at' => '2016-07-29 03:09:24',
                'updated_at' => '2016-07-29 03:09:24',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Tri 10GB Download Package',
                'created_at' => '2016-07-30 03:36:14',
                'updated_at' => '2016-07-30 03:36:14',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Ale Ale Sirsak',
                'created_at' => '2016-07-30 03:37:25',
                'updated_at' => '2016-07-30 03:37:25',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Chitato SP PGG',
                'created_at' => '2016-07-30 03:42:07',
                'updated_at' => '2016-07-30 03:42:07',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Naik Angkot [Cijerah - Ciwastra]',
                'created_at' => '2016-08-01 03:30:27',
                'updated_at' => '2016-08-01 03:30:27',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Happy Tos Corn Chips',
                'created_at' => '2016-08-01 03:40:14',
                'updated_at' => '2016-08-01 03:40:14',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Axe Deodorant SPR SCR 150',
                'created_at' => '2016-08-01 03:41:11',
                'updated_at' => '2016-08-01 03:41:11',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Lifebuoy Mild Care 110',
                'created_at' => '2016-08-01 03:41:47',
                'updated_at' => '2016-08-01 03:41:47',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Pepsodent White 75gr',
                'created_at' => '2016-08-01 03:42:11',
                'updated_at' => '2016-08-01 03:42:11',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Pocari Sweat 350ml',
                'created_at' => '2016-08-01 03:45:05',
                'updated_at' => '2016-08-01 03:45:05',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Cricket Solid Mini',
                'created_at' => '2016-08-01 03:46:05',
                'updated_at' => '2016-08-01 03:46:05',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Tira Jeans',
                'created_at' => '2016-08-01 03:46:53',
                'updated_at' => '2016-08-01 03:46:53',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Jkh BSC KT KGRU JDK6',
                'created_at' => '2016-08-01 03:47:35',
                'updated_at' => '2016-08-01 03:47:35',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Super - T Shirt',
                'created_at' => '2016-08-01 03:48:32',
                'updated_at' => '2016-08-01 03:48:32',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Sony Earphone MDR E9LP',
                'created_at' => '2016-08-01 03:50:48',
                'updated_at' => '2016-08-01 03:50:48',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Ergobelt Multipurpose Activity Belt',
                'created_at' => '2016-08-01 03:51:44',
                'updated_at' => '2016-08-01 03:51:44',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Sarung Gajah Duduk Shafira',
                'created_at' => '2016-08-01 03:52:14',
                'updated_at' => '2016-08-01 03:52:14',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Tiket Kereta Bandung - Gambir',
                'created_at' => '2016-08-01 03:54:58',
                'updated_at' => '2016-08-01 03:54:58',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Tiket Kereta Gambir - Bandung',
                'created_at' => '2016-08-01 03:55:30',
                'updated_at' => '2016-08-01 03:55:30',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
