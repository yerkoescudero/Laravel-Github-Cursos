@extends('layouts.plantilla')

@section('title', 'Edicion de curso'. $curso->name)

{{-- o asi
@section('title')
home
@endsection --}}

@section('content')
    <h1>En esta pagina se podras editar un curso</h1>
    <form action="{{route('cursos.update',$curso)}}" method="post">

        @csrf
        @method('put')

        <label>
            Nombre: <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Descripcion: <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
            <label>
                Categoria: <br>
                <input type="text" name="categoria" value="{{old('name', $curso->categoria)}}">
        </label>

        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>  
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
