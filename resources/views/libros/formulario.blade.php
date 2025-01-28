@extends('layout')


@section('title', 'Alta de libro')

@section('content')

    <br />
    @if(session('success'))
        <p style="text-align:center;" class="alert alert-success">{{ session('success') }}</p>
    @endif
    
    <form action="{{ route('libros.almacenar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Título</label>
            <input {{ session('formData') ? 'disabled' : '' }} type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre',session('formData.nombre'))}}" placeholder="Título">
            @error('nombre') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input {{ session('formData') ? 'disabled' : '' }} type="text" name="autor" class="form-control" id="autor" value="{{ old('autor',session('formData.autor'))}}" placeholder="Autor">
            @error('autor') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div class="mb-3">
            <label for="anho" class="form-label">Año</label>
            <input {{ session('formData') ? 'disabled' : '' }} type="text" name="anho" class="form-control" id="anho"  value="{{ old('anho',session('formData.anho'))}}" placeholder="Año">
            @error('anho') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select {{ session('formData') ? 'disabled' : '' }} name="genero" id="genero" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="">Selecciona un género...</option>
                @foreach ($GENEROS as $clave_genero => $texto_genero)

                    @php
                        $selected = old('genero') == $clave_genero || session('formData.genero') == $clave_genero ? 'selected="selected"' : '';
                    @endphp
        
    
        
                    <option value="{{ $clave_genero }}" {{ $selected }}>{{ $texto_genero }}</option>

                @endforeach
            </select>
            @error('genero') <p style="color: red;">{{ $message }}</p> @enderror
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <select {{ session('formData') ? 'disabled' : '' }} name="editorial" id="editorial" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="">Selecciona una editorial...</option>
                @foreach ($EDITORIALES as $clave_editorial => $texto_editorial)
        
                    @php
                        $selected = old('editorial') == $clave_editorial || session('formData.editorial') == $clave_editorial ? 'selected="selected"' : '';
                    @endphp

                    <option value="{{ $clave_editorial }}" {{ $selected }}>{{ $texto_editorial }}</option>

                @endforeach
            </select>
            @error('editorial') <p style="color: red;">{{ $message }}</p> @enderror
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea {{ session('formData') ? 'disabled' : '' }} name="descripcion" class="form-control" id="descripcion" placeholder="Descripción...">{{ old('descripcion',session('formData.descripcion')) }}</textarea>
            @error('descripcion') <p style="color: red;">{{ $message }}</p> @enderror
        </div>


        <button {{ session('formData') ? 'disabled' : '' }} type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection


