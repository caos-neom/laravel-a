<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controllers
{
    function show(){

        $alunos = [
            // mockup
            (object) ['nome'=>'cleide', 'telefone'=>'34872', 'email'=>'acleidesemca@gmail.com'],
            (object) ['nome'=>'portuligosveidoairo', 'telefone'=>'43324272', 'email'=>'meuspaismeodeiam@gmail.com'],
            (object) ['nome'=>'revirosvaldo', 'telefone'=>'323472', 'email'=>'acmca@gmail.com'],
            
        ];


        return view('aluno',compact('alunos'));
    }

    function($nome, $telefone, $email){
        // aqui você pode adicionar a lógica para salvar os dados do aluno no banco de dados
        // por exemplo:
        // Aluno::create(['nome' => $nome, 'telefone' => $telefone, 'email' => $email]);
        
        //adicione os dados do arry
    }
}
