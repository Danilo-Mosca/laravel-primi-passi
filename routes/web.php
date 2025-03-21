<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['message' => "Sei nella Homepage"]);
})->name('home');

Route::get('/service-and-products', function () {
    return view('service-products', ['message' => "Sei nella pagina Servizi e Prodotti"]);
})->name('service-products');

Route::get('/about-us', function () {
    // Esempio con passaggio di variabile:
    $message = "Sei nella pagina Chi siamo";
    return view('about-us', ["message" => $message]);
})->name('about');

Route::get('/contact', function () {
    // Come ultimo esempio al posto dell'array associativo (chiave/valore) utilizzo un altro modo la funzione compact(). Questa funzione come parametri vuole soltanto il nome della variabile in formato stringa, quindi solo "message" tra parentesi:
    $message = 'Sei nella pagina Contatti';
    return view('contacts', compact("message"));
})->name('contacts');

// Rotta di fallback (acchiappatutto) che intercetta tutte le richieste che non sono state matchate
Route::fallback(function(){
    return "<h1>Errore: 404 - Pagina non trovata</h1>";
});

?>