<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
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

Route::get('country-state-city', [CountryStateCityController::class, 'index']);
Route::post('get-states-by-country', [CountryStateCityController::class, 'getState']);
Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);

Route::get('/create-profile', [ProfileController::class, 'showContacts'])->name('profile');
Route::post('/save-profile',[ProfileController::class, 'SaveProfile'])->name('save-profile');