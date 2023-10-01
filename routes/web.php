<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReclamationController;

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



Route::resource('reclamations',App\Http\Controllers\ReclamationController::class);
Route::get('/reclamations', [App\Http\Controllers\ReclamationController::class, 'index'])->name('reclamation.index');
Route::get('/reclamations/create', [App\Http\Controllers\ReclamationController::class, 'create'])->name('reclamations.create');
Route::post('/reclamations/create', [App\Http\Controllers\ReclamationController::class, 'store']);
Route::get('/reclamations/{reclamation}/edit',  [App\Http\Controllers\ReclamationController::class, 'edit'])->name('reclamations.edit');




Route::resource("posts", PostController::class);




Route::get('/', function () {
    return view('home');
});

Route::get('/{post}/update', 'App\Http\Controllers\PostController@editt');


Route::get('/', 'App\Http\Controllers\PostController@showziedPage');


Route::delete('/{post}', 'App\Http\Controllers\PostController@destroy');


Route::get('/chat', function () {
    return view('chat');
});


Route::get('/amis', function () {
    return view('amis');
});


Route::get('/groupe', function () {
    return view('groupe');
});



Route::get('/setting', function () {
    return view('setting');
});


Route::get('/profil', function () {
    return view('profil');
});



Route::get('/request', function () {
    return view('request');
});


Route::get('/notification', function () {
    return view('notification');
});


Route::get('/editprofil', function () {
    return view('editprofil');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
