<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function mostrarDados(){
        return "estou na classe FuncionarioController";
    }
    public function infoFuncionario(){
        $info = [
            "nome"=>"Zarapeipei Lascaditas",
            "idade"=> 25,
            "salario"=>"600"
        ];
        dd($info);
    }
    public function show(){
        return view("usuario",[
            "nome"=>"Lavemele Lavaiela",
            "salario"=>6000
        ]);
    }
}
