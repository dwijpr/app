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
        ));
        
        
    }
}
