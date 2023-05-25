<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AduanController;

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

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::prefix('admin')->group(function () {
        Route::get('/users', function () {
            dd(auth()->user()->name);
        });
        Route::resource('aduan', AduanController::class);
    });
});

Route::get('/', function () {
    return view('welcome');
});