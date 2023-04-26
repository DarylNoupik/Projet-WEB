<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EventsController;

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

Route::get('test', function () {
    return view('test_connexion_db');
});

// Route pour la page d'accueil 

Route::get('/', function () {
    return view('welcome');
});

// Route pour la page de contact
Route::get('/contact', [ContactController::class,'index'])->name('contact');
//Route pour les activites 
Route::get('/activities', [EventsController::class,'index'])->name('events');
//Route pour les produits
Route::get('/products', [ProductsController::class,'index'])->name('products');