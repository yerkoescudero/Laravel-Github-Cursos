@extends('layouts.plantilla')

@section('title', 'Contactanos')

{{-- o asi
@section('title')
home
@endsection --}}

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST">

        @csrf

        <label for="nombre">
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>

        <label for="correo">
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>

        <label for="mensaje">
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>

        <button type="submit">Enviar mensaje</button>
    </form>
@endsection
