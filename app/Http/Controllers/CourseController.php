<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Carregar View
    public function index(){
        return view('courses.index');
    }

     // Visualizar os cursos
     public function show(){
        return view('courses.show');
    }

     // criar no DB
     public function create(){
        return view('courses.create');
    }

     // Receber os dadsos do formulário
     public function store(){
        dd('Cadastrar o curso do Banco de Dados');
    }
     // Carregar o formulário para editar o curso
     public function edit(){
        return view('courses.edit');
    }

     // Edita / Atualiza cursos no DB
     public function update(){
        dd('Cadastrar o curso do Banco de Dados');
    }

     // Exclui o cursos no DB
     public function destroy(){
        dd("Excluir o curso do Banco de Dados");
    }
}
