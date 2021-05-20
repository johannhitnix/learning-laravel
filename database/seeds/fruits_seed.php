<?php

use Illuminate\Database\Seeder;

class fruits_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 21; $i++) { 
            DB::table('fruits')->insert(array(
                'st_Name' => "apple #$i",
                'st_Description' => "An apple#$i is an edible fruit produced by an apple tree",
                'ft_Price' => (float)$i,
                'dt_Date' => date('Y-m-d')
            ));
        }
        $this->command->info('fruits table has been filled');
    }
}
