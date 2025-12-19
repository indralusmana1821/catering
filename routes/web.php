<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontendController::class, 'home']);
Route::get('/menu', [FrontendController::class, 'menu']);
Route::get('/kontak', [FrontendController::class, 'kontak']);
