<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Libro;

class LibroController extends Controller
{
    

    function alta_libro()
    {

        $libro = new Libro();


        $libro->nombre = 'El señor de los anillos';
        $libro->autor = 'Tolkien';
        $libro->descripcion = 'Enanos y orcos';
        $libro->editorial = 'Anaya';

        $libro->save();


    }

    function mostrar_libro($id)
    {

        $libro = Libro::find($id);

        return $libro;


    }


    function listado()
    {

        $libros = Libro::paginate(7);

        $GENEROS     = Libro::GENEROS;
        $EDITORIALES = Libro::EDITORIALES;


        return view('libros.libro',compact('libros','GENEROS','EDITORIALES'));
    }


    function alta()
    {
        $GENEROS     = Libro::GENEROS;
        $EDITORIALES = Libro::EDITORIALES;
        
        return view('libros.formulario',compact('GENEROS','EDITORIALES'));
    }

}
