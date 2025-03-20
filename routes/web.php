<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['message' => "Benvenuto su Laravel! Questo è il tuo primo passaggio di dati dinamici alla view!"]);
});
