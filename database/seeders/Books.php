<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['book_name' => 'Sümerler', 'isbn' => '167-347-378-472', 'language' => 'Türkçe', 'page_number' => 245, 'writer_id' => 1, 'category_id' => 1, 'publisher_id' => 1 ],
            ['book_name' => 'Inferno', 'isbn' => '378-1-676-044', 'language' => 'İngilizce', 'page_number' => 318, 'writer_id' => 3, 'category_id' => 3, 'publisher_id' => 2 ],
            ['book_name' => 'Ejderha Dövmeli Kız', 'isbn' => '046-0-467-344', 'language' => 'Türkçe', 'page_number' => 100, 'writer_id' => 4, 'category_id' => 4, 'publisher_id' => 3 ],
            ['book_name' => 'Black', 'isbn' => '3767-3447-767-4472', 'language' => 'İngilizce', 'page_number' => 400, 'writer_id' => 5, 'category_id' => 4, 'publisher_id' => 3 ],
            ['book_name' => 'Melekler ve Şeytanlar', 'isbn' => '467-7977-9787-4678', 'language' => 'Türkçe', 'page_number' => 346, 'writer_id' => 3, 'category_id' => 5, 'publisher_id' => 4 ],
            ['book_name' => 'Cin Ali', 'isbn' => '3787-786737-677-4678', 'language' => 'Türkçe', 'page_number' => 278, 'writer_id' => 1, 'category_id' => 5, 'publisher_id' => 5 ],
            ['book_name' => 'İlahi Komedya', 'isbn' => '77-37867-7-3786', 'language' => 'İtalyanca', 'page_number' => 900, 'writer_id' => 6, 'category_id' => 1, 'publisher_id' => 3 ],
            ['book_name' => 'Matematik', 'isbn' => '766-33747-37-1', 'language' => 'Türkçe', 'page_number' => 246, 'writer_id' => 2, 'category_id' => 6, 'publisher_id' => 5 ],
            ['book_name' => 'Fizik', 'isbn' => '3786-867-79-7977', 'language' => 'Türkçe', 'page_number' => 340, 'writer_id' => 2, 'category_id' => 6, 'publisher_id' => 2 ],
            ['book_name' => 'Türk Tarihi', 'isbn' => '7977-77-377-797', 'language' => 'Türkçe', 'page_number' => 513, 'writer_id' => 2, 'category_id' => 1, 'publisher_id' => 1 ],
        ]);
    }
}
