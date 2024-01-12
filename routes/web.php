<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome.todo');

Route::get('/create', function () {
    return view('layout.create');
})->name('create.todo');
Route::get('/edit', function () {
    return view('layout.update');
})->name('update.todo');
