<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Route::get('/user', function () {
//     return view('user.index');
// })->name('user');

//button
Route::get('/user', [UserController::class, 'index'])->name('user'); //login button
Route::get('/login', [UserController::class, 'login'])->name('login'); //login button


//Users
Route::get('/user/list', [UserController::class, 'show'])->name('userlist'); //login button