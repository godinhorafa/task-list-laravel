<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'name' => 'Ella'
    ]);
});

Route::get('/xx', function () {
return 'Hello, world!';
})->name('hello');
//name atribui o nome para a rota

//redirecionamento
Route::get('/hallo', function () {
//    return redirect(('/hello'));
return redirect()->route('hello');
});

//adicionando partes dinamicas para as rotas. nesse caso, o nome.
Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

//fallback define um retorno para rotas não existentes no projeto.
Route::fallback(function () {
    return 'Still got somewhere!';
});