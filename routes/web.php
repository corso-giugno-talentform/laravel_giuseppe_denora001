<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'homepage'])->name('homepage');


Route::get('/progetti', [PageController::class, 'projects'])->name('projects');

Route::get('/progetti/{slug}', [PageController::class, 'project'])->name('project');



Route::get('/contatti', [PageController::class,'contact'])
->name('contacts');

