<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Main page';
});

Route::get('/hello', function () {
return 'Hello, world!';
});

//adicionando partes dinamicas para as rotas. nesse caso, o nome.
Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});