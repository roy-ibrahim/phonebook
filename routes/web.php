<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'showAll'])->name('main');

Route::post('/save',[ContactController::class, 'save'])->name('save');

Route::get('/create', function(){
    return view('create');
})->name('create');

Route::delete('/delete/{contact}', [ContactController::class, 'destroy'])->name('delete');