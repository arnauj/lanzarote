<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    const GENEROS = [
         'FA' => 'Fantasía'
        ,'RM' => 'Realismo mágico'
        ,'CF' => 'Ciencia ficción'
        ,'NC' => 'Novela clásica'
        ,'FS' => 'Ficción social'
        ,'SP' => 'Suspenso'
        ,'RO' => 'Romántico'
        ,'TE' => 'Terror'
        ,'TR' => 'Tragedia'
        ,'FF' => 'Ficción filosófica'
        ,'HT' => 'Histórico'
        ,'RL' => 'Religión'
        ,'AV' => 'Aventura'
        ,'PS' => 'Psicológico'
        ,'FG' => 'Ficción gótica'
        ,'EP' => 'Épico'
        ,'PE' => 'Poesía épica'
        ,'MM' => 'Memorias'
        ,'PA' => 'Post-apocalíptico'
        ,'LA' => 'Literatura argentina'
        ,'FC' => 'Ficción surrealista'
    ];


}
