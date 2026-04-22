<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //
    function index(){
        return view('aluno.index');
    }

    function add(Request $dados){
        // \App\Models\AlunoModel()::create($dados->all());
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        $alunos = new \App\Models\AlunoModel();
 

        return view('aluno.index',['success' => 'cadastrado' , 'alunos' => $alunos::all()]);
    }

    function remove(){}

    function edit() {} 
    
    function list() {}    

}
