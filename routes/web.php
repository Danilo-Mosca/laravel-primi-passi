<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['message' => "Sei nella Homepage"]);
})->name('home');

Route::get('/service-and-products', function () {
    return view('service-products', ['message' => "Sei nella pagina Servizi e Prodotti"]);
})->name('service-products');

Route::get('/about-us', function () {
    return view('about-us', ["message" => "Sei nella pagina Chi siamo"]);
})->name('about');

Route::get('/contact', function () {
    return view('contacts', ['message' => 'Sei nella pagina Contatti']);
})->name('contacts');

// Rotta di fallback (acchiappatutto) che intercetta tutte le richieste che non sono state matchate
Route::fallback(function(){
    return "<h1>Errore: 404 - Pagina non trovata</h1>";
});

?>