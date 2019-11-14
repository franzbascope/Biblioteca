<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create(array('description' => 'Diccionario', 'code' => '001', 'publication_date' => '20190101'));
        Book::create(array('description' => 'Encicopedia', 'code' => '002', 'publication_date' => '20190102'));
    }
}
