<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StringcheckingController;
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
//     return view('welcome');
// });


Route::get('/', [StringcheckingController::class, 'index']);
Route::post('/checking', [StringcheckingController::class, 'checking'])->name('checking');