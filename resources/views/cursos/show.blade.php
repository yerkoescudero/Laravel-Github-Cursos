@extends('layouts.plantilla')

@section('title','Curso ' . $curso)

{{-- o asi
@section('title')
home
@endsection --}}

@section('content')
    <h1>Bienvenido al curso: {{$curso}}</h1>
    
    {{-- <h1>Bienvenido al curso: <?php echo $curso; ?></h1> --}}
@endsection




