<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            [
                'id' => 1,
                'type_id' => '2', 
                'title' => 'Nisekoi: False Love, Vol. 2', 
                'author' => 'Naoshi Komi', 
                'publisher' => 'Gramedia'
            ],
            [
                'id' => 2,
                'type_id' => '5', 
                'title' => 'Sistem Toko Buku menggunakan Laravel', 
                'author' => 'Argya Aulia Fauzandika', 
                'publisher' => 'Gramedia'
            ],
            [
                'id' => 3,
                'type_id' => '5', 
                'title' => 'Kecerdasan Buatan', 
                'author' => 'Argya Aulia Fauzandika', 
                'publisher' => 'Gramedia'
            ],
            [
                'id' => 4,
                'type_id' => '5', 
                'title' => 'Pintar Flutter 5 menit', 
                'author' => 'Argya Aulia Fauzandika', 
                'publisher' => 'Gramedia'
            ],
            [
                'id' => 6,
                'type_id' => '5', 
                'title' => 'Belajar Scraping memakai PHP', 
                'author' => 'Ivan Faathirza', 
                'publisher' => 'Gramedia'
            ],
            [
                'id' => 7,
                'type_id' => '1', 
                'title' => "Sword Art Online Platinum Collector's Edition", 
                'author' => 'Reki Kawahara', 
                'publisher' => 'Gramedia'
            ],
            [
                'id' => 8,
                'type_id' => '3', 
                'title' => "Buku Ensiklopedi Akhir Zaman", 
                'author' => 'Muhammad Ahmad Al-Mubayyadh', 
                'publisher' => 'Granada Mediatama'
            ],
            [
                'id' => 9,
                'type_id' => '3', 
                'title' => "ENSIKLOPEDIA ASTRONOMI GALAKSI", 
                'author' => 'Muhammad Ahmad Al-Mubayyadh', 
                'publisher' => 'JAKARTA ERLANGGA'
            ],
            [
                'id' => 10,
                'type_id' => '3', 
                'title' => "Orang-orang biasa", 
                'author' => 'Andrea Hirata', 
                'publisher' => 'Bentang Pustaka'
            ],
        ]);
    }
}
