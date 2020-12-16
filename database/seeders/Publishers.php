<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Publishers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            ['publisher_name' => 'A Yayınları'],
            ['publisher_name' => 'B Yayınları'],
            ['publisher_name' => 'C Yayınları'],
            ['publisher_name' => 'D Yayınları'],
            ['publisher_name' => 'E Yayınları'],
        ]);
    }
}
