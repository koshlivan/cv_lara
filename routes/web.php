<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/admin', function () {
    return view('login');
})->name('admin');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/', [App\Http\Controllers\Filler::class, 'getValues'])->name('main');

Route::get('/edit', [App\Http\Controllers\Filler::class, 'getValues'])->name('edit');

Route::get('/logout', [App\Http\Controllers\Authoriz::class, 'logOut'])->name('logout');

Route::post('/register', [App\Http\Controllers\Registre::class, 'createUser'])->name('new');

Route::post('/login', [App\Http\Controllers\Authoriz::class, 'getIn'])->name('get_in');

Route::post('/admin', [App\Http\Controllers\Authoriz::class, 'getIn'])->name('get_in');

Route::post('/edit', [App\Http\Controllers\Editor::class, 'edition'])->name('editor');
