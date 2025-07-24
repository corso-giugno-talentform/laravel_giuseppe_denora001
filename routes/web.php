<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    

});

Route::get('/progetti', function (){
    return view('progetti');
});
Route::get('/contatti', function (){
    return view('contatti');
});


