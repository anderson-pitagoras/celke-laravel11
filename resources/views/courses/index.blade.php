
@extends('layouts.admin')

@section('content')

<h1> Listar Cursos</h1>

<a href="{{ route('courses.show') }}">Visualizar</a>    </br>
<a href="{{ route('courses.create') }}">Cadastrar</a>

@endsection



