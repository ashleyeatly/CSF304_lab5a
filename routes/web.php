<?php

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

Route::get('/people', [\App\Http\Controllers\PersonController::class,'index'])->name('people.index');
Route::get('/people/{id}',[\App\Http\Controllers\PersonController::class,'show'])->name('people.show');


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
