<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParkirController;
use Illuminate\Support\Facades\Auth;
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
})->name('home');

Route::get('/exit', function () {
    return view('exit');
})->name('exit');

Route::get('/exit-success', function () {
    return view('exit-success');
})->name('exit-success');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'generateAll']);
    Route::get('/admin/export-report', [AdminController::class, 'exportReport']);

Route::get('/admins', [AdminController::class, 'generateReport']);
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::post('/parkir', [ParkirController::class, 'park']);
Route::post('/exits', [ParkirController::class, 'exit']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
