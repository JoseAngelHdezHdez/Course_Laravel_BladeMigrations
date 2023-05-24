@extends('layouts.plantilla')

@section('title', 'Cusos'.$curso->name)

@section('content')
    <h1>"Bienvenido al cursos {{$curso->name}};"</h1>
    <a href="{{route('cursos.index')}}">Volver</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editas {{$curso->name}}</a>
    <p><strong>Categoria: {{$curso->category}}</strong></p>
    <p>{{$curso->description}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button>Eliminar</button>
    </form>
@endsection
