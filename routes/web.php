<?php

use App\Http\Controllers\NbaController;
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
//     return view('welcome');
// });


Route::get('/',[NbaController::class,'index'])->name('index');
Route::get('/export',[NbaController::class,'export'])->name('export');
Route::get('/{id}',[NbaController::class,'get'])->name('view');
Route::post('/filter',[NbaController::class,'filter'])->name('filter');