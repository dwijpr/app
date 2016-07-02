<?php

use Illuminate\Database\Seeder;

class PaysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pays')->delete();
        
        \DB::table('pays')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'item_id' => 2,
                'price' => 4000,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 1,
                'created_at' => '2016-07-02 20:49:17',
                'updated_at' => '2016-07-02 20:49:17',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'item_id' => 2,
                'price' => 4000,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 2,
                'created_at' => '2016-07-02 20:49:31',
                'updated_at' => '2016-07-02 20:51:21',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'item_id' => 4,
                'price' => 5000,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 3,
                'created_at' => '2016-07-02 20:49:43',
                'updated_at' => '2016-07-02 20:51:21',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'item_id' => 5,
                'price' => 11000,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 4,
                'created_at' => '2016-07-02 20:54:50',
                'updated_at' => '2016-07-02 20:54:50',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'item_id' => 6,
                'price' => 8100,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 5,
                'created_at' => '2016-07-02 20:55:23',
                'updated_at' => '2016-07-02 20:55:23',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'item_id' => 7,
                'price' => 4300,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 6,
                'created_at' => '2016-07-02 20:55:42',
                'updated_at' => '2016-07-02 20:55:42',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'item_id' => 8,
                'price' => 4950,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 7,
                'created_at' => '2016-07-02 20:56:20',
                'updated_at' => '2016-07-02 20:56:20',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'item_id' => 13,
                'price' => 4000,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 8,
                'created_at' => '2016-07-02 20:56:58',
                'updated_at' => '2016-07-02 20:56:58',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 1,
                'item_id' => 14,
                'price' => 4000,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 9,
                'created_at' => '2016-07-02 20:57:50',
                'updated_at' => '2016-07-02 20:57:50',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 1,
                'item_id' => 9,
                'price' => 20000,
                'datetime' => '2016-06-20 00:00:00',
                'order' => 10,
                'created_at' => '2016-07-02 20:58:34',
                'updated_at' => '2016-07-02 20:58:34',
            ),
        ));
        
        
    }
}
