<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu/home', [MenuController::class, 'home']);
Route::get('/menu/artikel', [MenuController::class, 'artikel0237']);
Route::get('/menu/kontak', [MenuController::class, 'kontak0237']);
Route::get('/menu', [MenuController::class, 'menu0237']);