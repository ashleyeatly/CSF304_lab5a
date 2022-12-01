<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;
use App\Models\Person;
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

Route::get('/', [HomeController::class,'index'])
    ->name('admin');

Route::middleware(['auth'])->group(function(){
    Route::view('/admin','admin')->name('admin');
});

Route::get('/people', [PersonController::class,'index'])
    ->name('people.index')
->middleware('auth');

Route::get('/people/create', [PersonController::class, 'create'])
    ->name('people.create')
    ->middleware('auth');

Route::post('/people', [PersonController::class, 'store'])
    ->name('people.store')
    ->middleware('auth');

Route::get('/people/{person}',[PersonController::class,'show'])
    ->name('people.show')
    ->middleware('auth');

Route::delete('/people/{person}',[PersonController::class,'destroy'])
    ->name('people.destroy')
    ->middleware('auth');

Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
