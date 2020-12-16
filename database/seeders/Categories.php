<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name' => 'Tarih'],
            ['category_name' => 'Bilim Kurgu'],
            ['category_name' => 'Cinayet'],
            ['category_name' => 'Polisiye'],
            ['category_name' => 'Felsefi'],
        ]);
    }
}
