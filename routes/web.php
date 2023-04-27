<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index'] )->name('contacts.index');

Route::post('/contacts', [\App\Http\Controllers\ContactController::class, 'store'] )->name('contacts.store');



Route::get('/contacts/create', [\App\Http\Controllers\ContactController::class, 'create'])->name('contacts.create');

Route::get('/contacts/{id}', [\App\Http\Controllers\ContactController::class, 'show'])->name('contacts.show');

Route::put('/contacts/{contact}', [\App\Http\Controllers\ContactController::class, 'update'])->name('contacts.update');

Route::delete('/contacts/{id}', [\App\Http\Controllers\ContactController::class, 'destroy'])->name('contacts.destroy');

Route::get('/contacts/{contact}/edit', [\App\Http\Controllers\ContactController::class, 'edit'])->name('contacts.edit');

//Route::get('/contacts/{id}/edit',[\App\Http\Controllers\ContactController::class, 'edit'])->name('contacts.edit');
