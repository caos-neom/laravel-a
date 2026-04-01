<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{

    function listar(){
$produtos = [
    "produto1" => ["id" => 1, "nome" => "computador", "preco" => 2000],
    "produto2" => ["id" => 2, "nome" => "monitor", "preco" => 800],
    "produto3" => ["id" => 3, "nome" => "teclado mecânico", "preco" => 250],
    "produto4" => ["id" => 4, "nome" => "mouse gamer", "preco" => 150],
    "produto5" => ["id" => 5, "nome" => "headset", "preco" => 300],
    "produto6" => ["id" => 6, "nome" => "memória ram 16gb", "preco" => 450],
    "produto7" => ["id" => 7, "nome" => "ssd 1tb", "preco" => 400],
    "produto8" => ["id" => 8, "nome" => "placa de vídeo", "preco" => 1800],
    "produto9" => ["id" => 9, "nome" => "processador", "preco" => 1200],
    "produto10" => ["id" => 10, "nome" => "placa mãe", "preco" => 900],
    "produto11" => ["id" => 11, "nome" => "gabinete", "preco" => 350],
    "produto12" => ["id" => 12, "nome" => "fonte 600w", "preco" => 400],
    "produto13" => ["id" => 13, "nome" => "webcam hd", "preco" => 200],
    "produto14" => ["id" => 14, "nome" => "microfone usb", "preco" => 380],
    "produto15" => ["id" => 15, "nome" => "cadeira gamer", "preco" => 1100],
    "produto16" => ["id" => 16, "nome" => "mesa de escritório", "preco" => 600],
    "produto17" => ["id" => 17, "nome" => "caixa de som bluetooth", "preco" => 180],
    "produto18" => ["id" => 18, "nome" => "hd externo 2tb", "preco" => 450],
    "produto19" => ["id" => 19, "nome" => "roteador wi-fi 6", "preco" => 550],
    "produto20" => ["id" => 20, "nome" => "impressora multifuncional", "preco" => 850],
    "produto21" => ["id" => 21, "nome" => "suporte articulado", "preco" => 220],
];

return view('estoque',["produtos"=>$produtos])

    }

}