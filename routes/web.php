<?php

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

Route::get('/', function () {
    $a = Person::all();
    dump($a);
    echo '</br>';
    echo 'just give users';
    // equivalent select * from users
    $b = Person::find(1)->toSql();
    echo $b;
    echo '</br>';
    $b = Person::all();
    echo $b;
    return "we are here";
    // return view('welcome');
});

Route::get('/people', [PersonController::class,'index'])
    ->name('people.index');

Route::get('/people/create', [PersonController::class, 'create'])
    ->name('people.create');

Route::post('/people', [PersonController::class, 'store'])
    ->name('people.store');

Route::get('/people/{id}',[PersonController::class,'show'])
    ->name('people.show');

Route::delete('/people/{id}',[PersonController::class,'destroy'])
    ->name('people.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
