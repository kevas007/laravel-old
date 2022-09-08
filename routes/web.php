<?php

use App\Http\Controllers\LivreController;
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

Route::get('livres', [LivreController::class, 'index']);
Route::get('livres/create', [LivreController::class, 'create']);
Route::post('livres/store', [LivreController::class, 'store']);
