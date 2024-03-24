<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cadastro;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/cadastrar',function(Request $request) {
    Cadastro::create([
        'nome'=>$request->nome,
        'sobrenome'=>$request->sobrenome,
        'email'=>$request->email,
        'senha'=>$request->senha,
    ]);

    echo "Cadastrado com sucesso";
});
