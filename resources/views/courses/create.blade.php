@extends('layouts.admin')

@section('content')

    <h1>Cadastrar curso</h1>
    <a href="{{ route('courses.index') }} ">Listar</a></br>
    <a href="{{ route('courses.show') }} ">Visualizar</a></br>

    @if (@session('success'))
        <p style="color: #082">
            {{ session('success') }}
        </p>

    @endif


    <form action="{{ route('courses.store') }}" method="POST">
       @csrf
       @method('POST')
       <label for="">Nome:</label>
       <input type="text" name="name" placeholder="Nome do curso" value="{{ old('name') }}" required>
       </br></br>

       <button type="submit">Cadastrar</button>

    </form>

@endsection
