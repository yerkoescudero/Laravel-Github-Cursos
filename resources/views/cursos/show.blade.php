@extends('layouts.plantilla')

@section('title','Curso ' . $curso->name)

{{-- o asi
@section('title')
home
@endsection --}}

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>

    <p>{{$curso->descripcion}}</p>

    {{-- <h1>Bienvenido al curso: <?php echo $curso; ?></h1> --}}
@endsection




