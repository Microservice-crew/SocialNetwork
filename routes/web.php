<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\auth\RegisteredUserController;
use App\Http\Controllers\PostController;

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




// La route-ressource => Les routes "post.*"
Route::resource("posts", PostController::class);
// route for event controller
Route::resource("events", EventController::class);



Route::get('/', 'App\Http\Controllers\PostController@index')->middleware('auth')->name('home');









Route::put('/', 'App\Http\Controllers\PostController@update')->name('home');






Route::get('/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('update');











Route::get('/', 'App\Http\Controllers\PostController@showziedPage')->middleware('auth')->name('home');

//Route::get('/{post}/update', 'App\Http\Controllers\PostController@editt')->name('home');
//Route::delete('/{post}', 'App\Http\Controllers\PostController@destroy')->name('home');
//  Route::get('/', 'App\Http\Controllers\PostController@create')->middleware('auth');
//Route::get('/', 'App\Http\Controllers\PostController@index')->name('home');


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/events/create', 'App\Http\Controllers\EventController@create')->middleware('auth')->name('createEvent');
Route::post('/events', 'App\Http\Controllers\EventController@store')->middleware('auth')->name('storeEvent');
Route::get('/chat', function () {
    return view('chat');
});


Route::get('/amis', function () {
    return view('amis');
});


Route::get('/groupe', function () {
    return view('groupe');
});

Route::get('/blog', function () {
    return view('blog');
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

Route::get('/Event', 'App\Http\Controllers\EventController@index')->name('events');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/editprofil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/editprofil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/editprofil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
