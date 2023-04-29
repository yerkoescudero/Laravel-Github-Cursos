@extends('layouts.plantilla')

@section('title', 'Cursos')

{{-- o asi
@section('title')
home
@endsection --}}

@section('content')
    <h1>bienvenido a la pagina cursos</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $var)
            {{-- {{$var->name}} --}}
            <li><a href="{{route('cursos.show',$var->id)}}">{{$var->name}}</a></li>
        @endforeach
    </ul>

    {{$cursos->links()}}

    

@endsection


