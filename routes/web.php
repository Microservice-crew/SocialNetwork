<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\auth\RegisteredUserController;



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




Route::resource('groups',App\Http\Controllers\GroupController::class);
Route::get('/groups', [App\Http\Controllers\GroupController::class, 'index'])->name('Group.index');
Route::get('/groups/create', [App\Http\Controllers\GroupController::class, 'create']);
Route::post('/groups/create', [App\Http\Controllers\GroupController::class, 'store'])->name('groups.store');
Route::put('/groups/{group}', [App\Http\Controllers\GroupController::class, 'update'])->name('groups.update');
Route::get('/groups/{group}/edit', [App\Http\Controllers\GroupController::class, 'edit'])->name('groups.edit');
Route::delete('/groups/{group}', [App\Http\Controllers\GroupController::class, 'destroy'])->name('groups.destroy');












Route::resource("posts", PostController::class);



Route::get('/', 'App\Http\Controllers\PostController@index')->middleware('auth')->name('home');









Route::put('/', 'App\Http\Controllers\PostController@update')->name('home');
     





Route::get('/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('update');











Route::get('/', 'App\Http\Controllers\PostController@showziedPage')->middleware('auth')->name('home');

//Route::get('/{post}/update', 'App\Http\Controllers\PostController@editt')->name('home');
//Route::delete('/{post}', 'App\Http\Controllers\PostController@destroy')->name('home');
//  Route::get('/', 'App\Http\Controllers\PostController@create')->middleware('auth');
//Route::get('/', 'App\Http\Controllers\PostController@index')->name('home');


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');



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



Route::get('/dashboardAdmin', function () {
    return view('layouts/dashboardAdmin');
});



Route::get('/table', function () {
    return view('Admin/table');
});



Route::get('/form', function () {
    return view('Admin/form');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/editprofil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/editprofil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/editprofil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
