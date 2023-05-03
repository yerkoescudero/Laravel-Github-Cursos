@extends('layouts.plantilla')

@section('title','Curso ' . $curso->name)

{{-- o asi
@section('title')
home
@endsection --}}

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar curso</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>

    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    {{-- <h1>Bienvenido al curso: <?php echo $curso; ?></h1> --}}
@endsection




