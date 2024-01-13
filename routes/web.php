<?php

use App\Http\Controllers\TodoController;
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


Route::get('/', [TodoController::class, 'index'])->name('welcome.todo');

Route::get('/create', function () {
    return view('layout.create');
})->name('create.todo');

Route::get('/edit', [TodoController::class, 'edit'])->name('edit.todo');

Route::post('/store', [TodoController::class, 'store'])->name('store.todo');
Route::get('/delete/{id}', [TodoController::class, 'destroy'])->name('destroy.todo');
