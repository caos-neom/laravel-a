<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sobre extends Controller
{
    function about(){
        // echo 'Página Principal';
        return view('página-sobre');
    }

    
}


