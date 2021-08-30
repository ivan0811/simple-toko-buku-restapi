<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeBook;

class TypeBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeBook::insert([
            [
                'id' => 1,
                'name' => 'Novel'
            ],
            [
                'id' => 2,
                'name' => 'Komik'
            ],
            [
                'id' => 3,
                'name' => 'Ensiklopedi'
            ],
            [
                'id' => 4,
                'name' => 'Fiksi'
            ],
            [
                'id' => 5,
                'name' => 'Komputer'
            ]
        ]);
    }
}
