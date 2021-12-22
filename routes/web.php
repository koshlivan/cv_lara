<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


//Route::get('/', function () {
//    return view('app');
//});

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/logout', function () {
    return view('main');
})->name('logout');


Route::post('/register', [App\Http\Controllers\Registre::class, 'createUser'])->name('new');

Route::post('/login', [App\Http\Controllers\Auth::class, 'getIn'])->name('get_in');

Route::post('/edit', [App\Http\Controllers\Editor::class, 'edition'])->name('editor');
