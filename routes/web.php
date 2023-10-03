<?php

use App\Http\Controllers\NewsController;
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
    return view('welcome');
});
Route::get('/info', function () {
    echo 'info';
});
Route::get('/register', function () {
    echo 'register';
});
Route::get('/news', [NewsController::class, 'show']);
Route::get('/news/create', [NewsController::class, 'create']);
Route::resource('/news/create/new', NewsController::class);

