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


    function almacenar(Request $request)
    {

        /*
titulo
autor
anho
genero
editorial
descripcion
        */

        $validacion_genero = '';
        foreach(Libro::GENEROS as $codigo_genero => $texto_genero)
        {
            $validacion_genero .= $codigo_genero .',';
        }

        $validacion_genero = substr($validacion_genero,0,-1);
        
        $validatedData = $request->validate([
            'nombre'         => 'required|string|max:255',
            'autor'          => 'required|string|max:255',
            'anho'           => 'required|integer',
            'genero'         => 'required|in:'.$validacion_genero,
            'editorial'      => 'required',
            'descripcion'    => 'required|string'
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string'   => 'Debe ser de tipo cadena de texto.',
            'nombre.max'      => 'Máximo 255 caracteres',

            'nombre.max'      => 'Máximo 255 caracteres',



            'autor.required' => 'El autor es obligatorio.',
            'autor.string'   => 'Debe ser de tipo cadena de texto.',
            'autor.max'      => 'Máximo 255 caracteres',

            'anho.required' => 'El año es obligatorio.',
            'anho.integer'  => 'Debe ser de tipo entero.',

            'genero.required'      => 'El género es obligatorio.',
            'editorial.required'   => 'la editorial es obligatoria.',
            'descripcion.required'   => 'La descripción es obligatoria.',


        ]);
    
        



        $libro = new Libro();

        $libro->nombre      = $request->nombre;
        $libro->autor       = $request->autor;
        $libro->descripcion = $request->descripcion;
        $libro->editorial   = $request->editorial;
        $libro->anho        = $request->anho;
        $libro->genero      = $request->genero;

        $libro->save();


        return redirect()->route('libros.alta')->with([
                 'success'  => 'Libro insertado correctamente.'
                ,'formData' => $validatedData
            ]
        );

    }

}
