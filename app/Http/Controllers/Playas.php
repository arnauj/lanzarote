<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Playas extends Controller
{
    //

    function playas_de_arena(Request $request,$id)
    {
        $datos = $request->all();

        return $request->all();

    }

    function procesar_datos()
    {


        return "Existo";
    }


    function form_procesar_datos()
    {


        return view('formulario_playas');
    }
}
