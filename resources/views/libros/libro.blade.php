@extends('layout')


@section('title', 'Listado de libros')

@section('content')

    <table  class="table">
        <tr>
            <td>#</td>
            <td>nombre</td>
            <td>editorial</td>
            <td>autor</td> 
            <td>descripcion</td> 
            <td>anho</td> 
            <td>genero</td> 
        </tr>

    
    @foreach ($libros as $libro)
        

    <tr>
            <td>
                <div style="display:block;width:135px">
                    <a href="/libros/{{ $libro->id }}" class="btn btn-primary"><i class="bi bi-search"></i></a>
                    <a href="/libros/actualizar/{{ $libro->id }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                    <a href="/libros/eliminar/{{ $libro->id }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </div>

            </td>
            <td>{{ $libro->nombre }}</td>
            <td>{{ $libro->editorial }}</td>
            <td>{{ $libro->autor }}</td> 
            <td>{{ $libro->descripcion }}</td> 
            <td>{{ $libro->anho }}</td> 
            <td>{{ $GENEROS[$libro->genero] }}</td> 
    </tr>

    @endforeach

    </table>

    <a href="/libros/nuevo" class="btn btn-success"><i class="bi bi-plus"></i> Nuevo libro</a>


@endsection