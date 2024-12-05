<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BmiController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');


Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');
    Route::resource('user', UserController::class);
    Route::resource('about', AboutController::class);
    Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    Route::delete('/about/{about}', [AboutController::class, 'destroy'])->name('about.destroy');
    Route::get('/about/{about}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/about/{about}', [AboutController::class, 'update'])->name('about.update');


    Route::get('/header', [HeaderController::class, 'index'])->name('header.index');
    Route::get('/header/create', [HeaderController::class, 'create'])->name('header.create');
    Route::post('/header', [HeaderController::class, 'store'])->name('header.store');
    Route::delete('/header/{header}', [HeaderController::class, 'destroy'])->name('header.destroy');
    Route::get('/header/{header}/edit', [HeaderController::class, 'edit'])->name('header.edit');
    Route::put('/header/{header}', [HeaderController::class, 'update'])->name('header.update');


    Route::get('/footer', [FooterController::class, 'index'])->name('footer.index');
    Route::get('/footer/create', [FooterController::class, 'create'])->name('footer.create');
    Route::post('/footer', [FooterController::class, 'store'])->name('footer.store');
    Route::delete('/footer/{footer}', [FooterController::class, 'destroy'])->name('footer.destroy');
    Route::get('/footer/{footer}/edit', [FooterController::class, 'edit'])->name('footer.edit');
    Route::put('/footer/{footer}', [FooterController::class, 'update'])->name('footer.update');
});

Route::view('/treck-anywhere', 'treck-anywhere')->name('treck-anywhere');
Route::view('/meal-prep', 'meal-prep')->name('meal-prep');
Route::view('/bmi-calculator', 'bmi-calculator')->name('bmi-calculator');
Route::view('/mealplanner', 'mealplanner')->name('mealplanner');
Route::view('/execise', 'exercise')->name('exercise');
Route::view('/health', 'health')->name('health');
