@extends('layouts.plantilla')

@section('title', 'Creacion Cursos')

{{-- o asi
@section('title')
home
@endsection --}}

@section('content')
    <h1>En esta pagina se podra crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre: <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Descripcion: <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>

        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
            <label>
                Categoria: <br>
                <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        <br>  

        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
