<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//testing blade
Route::get('/praktikum-laravel', function () {
    return view('praktikum2.index');
});

//events
Route::get('events/{location}/{name}', [
    App\Http\Controllers\EventsController::class,
    'show'
]);

Route::get('events', [App\Http\Controllers\EventsController::class, 'index']);

//flash
Route::get('events/validate', [
    App\Http\Controllers\EventsController::class,
    'showValidateForm'
])->middleware('auth')->name('validateform.event');

Route::post('events/validate', [
    App\Http\Controllers\EventsController::class,
    'validateForm'
])->middleware('auth')->name('validate.event');


require __DIR__.'/auth.php';
