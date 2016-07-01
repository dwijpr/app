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
                'id' => 2,
                'user_id' => 1,
                'item_id' => 2,
                'price' => 4000,
                'datetime' => '2016-07-01 04:31:33',
                'created_at' => '2016-07-01 04:31:41',
                'updated_at' => '2016-07-01 04:31:41',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'item_id' => 4,
                'price' => 10000,
                'datetime' => '2016-07-01 04:48:38',
                'created_at' => '2016-07-01 04:48:46',
                'updated_at' => '2016-07-01 04:48:46',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'item_id' => 2,
                'price' => 5000,
                'datetime' => '2016-07-02 04:23:29',
                'created_at' => '2016-07-02 04:27:47',
                'updated_at' => '2016-07-02 04:27:47',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'item_id' => 5,
                'price' => 11000,
                'datetime' => '2016-07-02 04:31:40',
                'created_at' => '2016-07-02 04:33:27',
                'updated_at' => '2016-07-02 04:33:27',
            ),
            4 => 
            array (
                'id' => 6,
                'user_id' => 1,
                'item_id' => 6,
                'price' => 8100,
                'datetime' => '2016-07-02 04:33:27',
                'created_at' => '2016-07-02 04:34:22',
                'updated_at' => '2016-07-02 04:34:22',
            ),
        ));
        
        
    }
}
