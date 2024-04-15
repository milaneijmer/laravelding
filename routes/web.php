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
    return view('index');
});

Route::get('/tickets', [\App\Http\Controllers\ticketsController::class, 'index'])->name('tickets');
route::post("/tickets/verstuur", [\App\Http\Controllers\bestellingenController::class, 'store'])->name('bestellingen.store');

Route::get('/attracties', [\App\Http\Controllers\AttractiesController::class, 'index'])->name('attracties');

route::get("/tijden", function(){
    return view("tijden");
});

route::get("/contact", [\App\Http\Controllers\contactController::class, 'index'])->name('contact');

// route om contact formulier te posten naar de database
route::post("/contact/verstuur", [\App\Http\Controllers\contactController::class, 'store'])->name('contact.store');
