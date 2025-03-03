<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sobre-mi', function () {
    return view('about');
})->name('about');

Route::get('/experiencia', function () {
    return view('experience');
})->name('experience');

Route::get('/habilidades', function () {
    return view('skills');
})->name('skills');

Route::get('/contacto', [ContactController::class, 'show'])->name('contact');
Route::post('/contacto', [ContactController::class, 'send'])->name('contact.send');
