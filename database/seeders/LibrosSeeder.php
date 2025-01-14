<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libros')->insert([
            'nombre' => 'Harry Potter',
            'editorial' => 'Anaya',
            'autor' => 'JK Rowling',
            'descripcion' => 'La piedra filosofal',
        ]);
    }
}
