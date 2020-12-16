<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Writers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('writers')->insert([
            ['writer_name' => 'Ahmet Can'],
            ['writer_name' => 'Adem Can'],
            ['writer_name' => 'Dan Brown'],
            ['writer_name' => 'Stieg Larsson'],
            ['writer_name' => 'Ted Dekker'],
        ]);
    }
}
