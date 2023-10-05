<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class. 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', function()
    {
        return view("dashboard");
    })->middleware('auth')->name('dashboard');

    Route::get('/page1', function()
    {
        return view('page1');
    })->middleware('auth')->name('page1');

    Route::get('/page2', function()
    {
        return view('page2');
    })->middleware('auth')->name('page2');

    Route::get('/page3', function()
    {
        return view('page3');
    })->middleware('auth')->name('page3');
});