<?php

use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BookController::class, 'index']) -> name("books.index");
Route::get('/{id}/show', [BookController::class, 'show'])-> name("books.show");
Route::get('/create', [BookController::class, 'create'])-> name("books.create");
Route::post('/create', [BookController::class, 'store'])-> name("books.store");
