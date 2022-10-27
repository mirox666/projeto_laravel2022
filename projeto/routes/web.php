<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("usuario/{id}",function($id){
    return"Você está na página usuário o valor passado é {$id}";
});

route::get("cliente",function(){
    $resultado = [
        "nome"=>"Zarapateia Osivalda",
        "endereco"=>"Morro do jacarezinho",
        "CPF"=> "666.999.666.33"
    ];

    dd($resultado);// esse método significa dump and die.
});

route::get("teste",function(Request $requisicao){
    $resposta = $requisicao->url();

    dd($resposta);
});

Route::get("funcionario",[\App\Http\Controllers\FuncionarioController::class,"mostrarDados"]);

Route::get("dadosFuncionario",[\App\Http\Controllers\FuncionarioController::class,"infoFuncionario"]);

Route::get("funcionarioView",[FuncionarioController::class,"show"]);


