<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    $prenom = "Undefined";
    return view('bonjour', ['prenom' => $prenom]);
});
Route::get('/bonjour/{parametre}', function ($parametre) {

    $prenom = $parametre;
    return view('bonjour', ['prenom' => $prenom]);
});

Route::get('/bonjour/{parametre1}/{parametre2}', function ($parametre1, $parametre2) {

    $prenom = $parametre1;
    $humeur = $parametre2;
    return view('bonjour', ['prenom' => $prenom, 'humeur' => $humeur]);
});
