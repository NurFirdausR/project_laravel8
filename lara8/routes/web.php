<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
//     return view('home');
// });
Route::get('/',[HomeController::class,'routeIndex']);


Route::get('/register',[AuthController::class,'req'])->name('register.req');
Route::post('/welcome',[AuthController::class,'registerSubmit'])->name('welcome.submit');

Route::get('/form',[UserController::class, 'send']);
Route::view('login', 'form');
// Route::view("register", 'register');



// Route::view('/layout', 'partial/ind');
Route::get('/layout', function () {
    return view('table.table');
});
Route::get('/table-data', function () {
    return view('table.table-data');
});