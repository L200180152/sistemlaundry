<?php

use App\Http\Controllers\viewController;
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

// Route::get('/', function () {
//     return view('user.landingpage');
// });

Route::get('/', [viewController::class, 'landingpage']);
Route::get('/login', [viewController::class, 'login']);
Route::get('/register', [viewController::class, 'register']);
Route::get('/dashboard', [viewController::class, 'dashboard']);
