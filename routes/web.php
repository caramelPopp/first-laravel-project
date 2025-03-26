<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; //importa a classe controller principal

Route::get(
    '/', 
    [MainController::class, 'main']
)->name('main');

Route::get(
    '/aboutus', 
    [MainController::class, 'aboutus']
)->name('aboutus');

Route::get(
    '/contact', 
    [MainController::class, 'contact']
)->name('contact'); 

Route::get(
    '/help', 
    [MainController::class, 'help']
)->name('help'); 

Route::get(
    '/congrats', 
    [MainController::class, 'congrats']
)->name('congrats'); 
