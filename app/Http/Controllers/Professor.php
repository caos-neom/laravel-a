<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores = [
            // mockup
            (object) ['nome'=>'jubileusonsilva', 'cpf'=> '3102201102'],
            (object) ['nome'=>'portuligosveidoairo', 'cpf'=> '3102201102'],
            (object) ['nome'=>'revirosvaldo', 'cpf'=> '3102201102'],
        ];
        return view('professor',compact('professores'));
    }
}
