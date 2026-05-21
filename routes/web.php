<?php

use Illuminate\Support\Facades\Route;

// Rota da Home
Route::get('/', function () {
    return view('welcome');
});

// Rota d'A Banca (O Conselho)
Route::get('/a-banca', function () {
    return view('a-banca');
});

// Rota das Áreas de Atuação
Route::get('/expertises', function () {
    return view('expertises');
});

// Rota de Contato
Route::get('/contato', function () {
    return view('contato');
});