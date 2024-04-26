<?php

use App\Http\Controllers\AuthController;
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

// Auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
 
// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
 
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/accomodaties', [\App\Http\Controllers\accomodatiesController::class, 'index'])->name('accomodaties');
route::post("/accomodaties/verstuur", [\App\Http\Controllers\accomodatiesOrdersController::class, 'store'])->name('accomodaties.store');