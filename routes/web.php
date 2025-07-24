<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    //la slash =root , detta radice o punto di partenza (homepage)
    //la calback , funzione aninima che viene chiamata appena l utente è in /
    //view è una funzione 
    //url e uri
    //url è un indirizzo  www.ansa.it/notizie/top.html
    //uri è il percorso locale  /notizie/top.html
    //dominio +uri =url

});
/// http://127.0.0.1:8000/ciccio    vedro  ciccio
Route::get('/ciccio', function (){
    return 'ciccio';
});


Route::get('/array', function (){

    $array=['francesco', 'antonio'];
    return $array[1];
});

Route::get('/topolino', function (){

    //ritorno la vista topolino che si chiama topolino.blade.php e
    //grazie all autodiscover laravel sa dove è la vista topolino
    // mmetter l uri come il nome della vista è per comodita ma potrei fare /12332 e mi fa vedere la vista che è topolino.blade.php  poiche return view topolino
    return view('topolino');
});