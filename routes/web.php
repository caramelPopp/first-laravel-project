<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; //importa a classe controller principal

Route::get(
    '/', 
    [MainController::class, 'main']
)->name('main'); //utiliza a função 'main' do controller

Route::get(
    '/', 
    [MainController::class, 'aboutus']
)->name('aboutus');

Route::get(
    '/', 
    [MainController::class, 'contact']
)->name('contact'); 

Route::get(
    '/', 
    [MainController::class, 'help']
)->name('help'); 

Route::get(
    '/', 
    [MainController::class, 'congrats']
)->name('congrats'); 
