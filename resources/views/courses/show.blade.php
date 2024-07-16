@extends('layouts.admin')

@section('content')
    <h1> Show Curso</h1>

    <a href="{{ route('courses.index') }}">Listar</a></br>
    <a href="{{ route('courses.edit') }}">Editar</a>
@endsection

