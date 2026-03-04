<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function home(){
        // echo 'Página Principal';
        return view('página-home');
    }

    
}


