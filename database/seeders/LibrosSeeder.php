<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


#use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $libro = new Libro();

        $libro->nombre = ''
        ....
        $libro->save();
        */

        DB::table('libros')->insert([[
                'nombre'    => 'Harry Potter y la piedra filosofal',
                'editorial' => 'Anaya',
                'autor'     => 'JK Rowling',
                'descripcion' => 'La piedra filosofal',
                'anho'       => '2001',
                'genero'     => 'FA'
            ],
            [
                'nombre'    => 'El señor de los anillos',
                'editorial' => 'Minotauro',
                'autor'     => 'J.R.R. Tolkien',
                'descripcion' => 'La comunidad del anillo',
                'anho'       => '1954',
                'genero'     => 'FA'
            ],
            [
                'nombre'    => 'Cien años de soledad',
                'editorial' => 'Sudamericana',
                'autor'     => 'Gabriel García Márquez',
                'descripcion' => 'Una saga familiar en Macondo',
                'anho'       => '1967',
                'genero'     => 'RM'
            ],
            [
                'nombre'    => '1984',
                'editorial' => 'Secker & Warburg',
                'autor'     => 'George Orwell',
                'descripcion' => 'Una distopía totalitaria',
                'anho'       => '1949',
                'genero'     => 'CF'
            ],
            [
                'nombre'    => 'Don Quijote de la Mancha',
                'editorial' => 'Planeta',
                'autor'     => 'Miguel de Cervantes',
                'descripcion' => 'Las AVs de un caballero loco',
                'anho'       => '1605',
                'genero'     => 'NC'
            ],
            [
                'nombre'    => 'Matar a un ruiseñor',
                'editorial' => 'J.B. Lippincott & Co.',
                'autor'     => 'Harper Lee',
                'descripcion' => 'Un juicio en el sur de Estados Unidos',
                'anho'       => '1960',
                'genero'     => 'FS'
            ],
            [
                'nombre'    => 'La sombra del viento',
                'editorial' => 'Planeta',
                'autor'     => 'Carlos Ruiz Zafón',
                'descripcion' => 'Un misterio literario en la Barcelona de posguerra',
                'anho'       => '2001',
                'genero'     => 'SP'
            ],
            [
                'nombre'    => 'El código Da Vinci',
                'editorial' => 'Planeta',
                'autor'     => 'Dan Brown',
                'descripcion' => 'Un thriller de misterio y arte',
                'anho'       => '2003',
                'genero'     => 'SP'
            ],
            [
                'nombre'    => 'Orgullo y prejuicio',
                'editorial' => 'Penguin Classics',
                'autor'     => 'Jane Austen',
                'descripcion' => 'La relación entre Elizabeth Bennet y Darcy',
                'anho'       => '1813',
                'genero'     => 'RO'
            ],
            [
                'nombre'    => 'Frankenstein',
                'editorial' => 'Lackington, Hughes, Harding, Mavor & Jones',
                'autor'     => 'Mary Shelley',
                'descripcion' => 'El monstruo creado por un científico loco',
                'anho'       => '1818',
                'genero'     => 'TE'
            ],
            [
                'nombre'    => 'El gran Gatsby',
                'editorial' => 'Charles Scribner\'s Sons',
                'autor'     => 'F. Scott Fitzgerald',
                'descripcion' => 'Un estudio sobre el sueño americano',
                'anho'       => '1925',
                'genero'     => 'TR'
            ],
            [
                'nombre'    => 'El alquimista',
                'editorial' => 'HarperOne',
                'autor'     => 'Paulo Coelho',
                'descripcion' => 'Una historia sobre la búsqueda de los sueños',
                'anho'       => '1988',
                'genero'     => 'FF'
            ],
            [
                'nombre'    => 'Los pilares de la tierra',
                'editorial' => 'Plaza & Janés',
                'autor'     => 'Ken Follett',
                'descripcion' => 'Una historia épica en la Edad Media',
                'anho'       => '1989',
                'genero'     => 'HT'
            ],
            [
                'nombre'    => 'La cabaña',
                'editorial' => 'Grupo Nelson',
                'autor'     => 'William P. Young',
                'descripcion' => 'La reflexión de un hombre tras una TR',
                'anho'       => '2007',
                'genero'     => 'RL'
            ],
            [
                'nombre'    => 'El principito',
                'editorial' => 'Reynal & Hitchcock',
                'autor'     => 'Antoine de Saint-Exupéry',
                'descripcion' => 'Una fábula sobre la importancia de lo esencial',
                'anho'       => '1943',
                'genero'     => 'FA'
            ],
            [
                'nombre'    => 'La isla del tesoro',
                'editorial' => 'Cassell & Co.',
                'autor'     => 'Robert Louis Stevenson',
                'descripcion' => 'La AV de un joven en busca de un tesoro',
                'anho'       => '1883',
                'genero'     => 'AV'
            ],
            [
                'nombre'    => 'Crimen y castigo',
                'editorial' => 'The Russian Messenger',
                'autor'     => 'Fiódor Dostoyevski',
                'descripcion' => 'El dilema moral de un joven estudiante',
                'anho'       => '1866',
                'genero'     => 'PS'
            ],
            [
                'nombre'    => 'El retrato de Dorian Gray',
                'editorial' => 'Ward, Lock & Co.',
                'autor'     => 'Oscar Wilde',
                'descripcion' => 'La historia de un hombre que no envejece',
                'anho'       => '1890',
                'genero'     => 'FG'
            ],
            [
                'nombre'    => 'La odisea',
                'editorial' => 'Varios',
                'autor'     => 'Homero',
                'descripcion' => 'Las AVs de Ulises en su regreso a casa',
                'anho'       => '100',
                'genero'     => 'EP'
            ],
            [
                'nombre'    => 'El nombre de la rosa',
                'editorial' => 'Ediciones Planeta',
                'autor'     => 'Umberto Eco',
                'descripcion' => 'Un asesinato en un monasterio medieval',
                'anho'       => '1980',
                'genero'     => 'HT'
            ],
            [
                'nombre'    => 'Los juegos del hambre',
                'editorial' => 'Scholastic Press',
                'autor'     => 'Suzanne Collins',
                'descripcion' => 'Un reality mortal en un futuro distópico',
                'anho'       => '2008',
                'genero'     => 'CF'
            ],
            [
                'nombre'    => 'El Hobbit',
                'editorial' => 'George Allen & Unwin',
                'autor'     => 'J.R.R. Tolkien',
                'descripcion' => 'La AV de Bilbo Bolsón',
                'anho'       => '1937',
                'genero'     => 'FA'
            ],
            [
                'nombre'    => 'El lobo estepario',
                'editorial' => 'S. Fischer Verlag',
                'autor'     => 'Hermann Hesse',
                'descripcion' => 'Un hombre dividido entre dos mundos',
                'anho'       => '1927',
                'genero'     => 'PS'
            ],
            [
                'nombre'    => 'La divina comedia',
                'editorial' => 'Varios',
                'autor'     => 'Dante Alighieri',
                'descripcion' => 'Un viaje a través del Infierno, el Purgatorio y el Paraíso',
                'anho'       => '1320',
                'genero'     => 'PE'
            ],
            [
                'nombre'    => 'El diario de Ana Frank',
                'editorial' => 'Contact Publishing',
                'autor'     => 'Ana Frank',
                'descripcion' => 'El testimonio de una niña judía en la Segunda Guerra Mundial',
                'anho'       => '1947',
                'genero'     => 'MM'
            ],
            [
                'nombre'    => 'La carretera',
                'editorial' => 'Knopf',
                'autor'     => 'Cormac McCarthy',
                'descripcion' => 'Un padre y su hijo en un mundo PA',
                'anho'       => '2006',
                'genero'     => 'PA'
            ],
            [
                'nombre'    => 'Rayuela',
                'editorial' => 'Editorial Sudamericana',
                'autor'     => 'Julio Cortázar',
                'descripcion' => 'Una novela que puede leerse en distintos órdenes',
                'anho'       => '1963',
                'genero'     => 'LA'
            ],
            [
                'nombre'    => 'La metamorfosis',
                'editorial' => 'Kurt Wolff Verlag',
                'autor'     => 'Franz Kafka',
                'descripcion' => 'Un hombre se convierte en insecto',
                'anho'       => '1915',
                'genero'     => 'FC'
            ] 
        ]        
        );
    }
}
