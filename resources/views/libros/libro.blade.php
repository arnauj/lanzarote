@extends('layout')


@section('title', 'Listado de libros')

@section('content')
<div class="table-responsive">
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
                <div>
                    <a href="/libros/{{ $libro->id }}" class="btn btn-primary"><i class="bi bi-search"></i></a>
                    <a href="/libros/actualizar/{{ $libro->id }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                    <a href="/libros/eliminar/{{ $libro->id }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </div>

            </td>
            <td style="">{{ $libro->nombre }}</td>
            <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $EDITORIALES[$libro->editorial] }}</td> 
            <td>{{ $libro->autor }}</td> 
            <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $libro->descripcion }}</td> 
            <td>{{ $libro->anho }}</td> 
            <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $GENEROS[$libro->genero] }}</td> 
    </tr>

    @endforeach

    </table>
    {{ $libros->links() }}
</div>
    <a href="/libros/nuevo" class="btn btn-success"><i class="bi bi-plus"></i> Nuevo libro</a>


@endsection