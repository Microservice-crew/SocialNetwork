<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\auth\RegisteredUserController;
use App\Models\Post;



use App\Http\Controllers\AvisController;
use App\Http\Controllers\ReactionController;



use App\Http\Controllers\EventController;


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReclamationController;
//Comment controller
use App\Http\Controllers\CommentsEventController;


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


Route::resource('articles',App\Http\Controllers\ArticleController::class);
Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('Article.index');
Route::get('/articles/create', [App\Http\Controllers\ArticleController::class, 'create']);
Route::post('/articles/create', [App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
Route::put('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'update'])->name('articles.update');
Route::get('/articles/{article}/edit', [App\Http\Controllers\ArticleController::class, 'edit'])->name('articles.edit');
Route::delete('/articles/{article}', [App\Http\Controllers\ArticleController::class, 'destroy'])->name('articles.destroy');


//Route::get('/groupsuser', [App\Http\Controllers\GroupController::class, 'indexx'])->name('Group.frontGroup');
Route::get('/avis', [AvisController::class, 'index'])->name('avis.index');
Route::get('/avis/create', [AvisController::class, 'create'])->name('avis.create');
Route::post('/avis', [AvisController::class, 'store'])->name('avis.store');
Route::get('/avis/{avis}', [AvisController::class, 'show'])->name('avis.show');
Route::get('/avis/{avis}/edit', [AvisController::class, 'edit'])->name('avis.edit');
Route::put('/avis/{avis}', [AvisController::class, 'update'])->name('avis.update');
Route::delete('/avis/{avis}', [AvisController::class, 'destroy'])->name('avis.destroy');


Route::post('/avis/react/{avis}', [ReactionController::class, 'react'])->name('react');
Route::get('/reactions', [ReactionController::class, 'index'])->name('reactions.index');
Route::delete('/reactions/{reactions}', [ReactionController::class, 'destroy'])->name('reactions.destroy');


Route::get('/usergroup', [App\Http\Controllers\GroupController::class, 'indexx'])->name('usergroup');
//Route::get('/userarticle', [App\Http\Controllers\ArticleController::class, 'indexx'])->name('userarticle');
Route::get('/uarticles/{groupId}', [App\Http\Controllers\ArticleController::class, 'showByGroup'])->name('articles.showByGroup');
Route::get('/articles/{id}/pdf', [App\Http\Controllers\ArticleController::class, 'generatePdf'])->name('articles.pdf');





Route::resource("posts", PostController::class);
// route for event controller
Route::resource("events", App\Http\Controllers\EventController::class);



Route::get('/', 'App\Http\Controllers\PostController@index')->middleware('auth')->name('home');









Route::put('/', 'App\Http\Controllers\PostController@update')->name('home');


Route::get('/{post}/edit', 'App\Http\Controllers\PostController@edit')->name('update');


Route::post('/posts/{post}/commentaires', [CommentaireController::class, 'store'])->name('commentaires.store');




Route::put('/commentaires/{commentaire}', 'App\Http\Controllers\CommentaireController@update')->name('commentaires.update');

Route::get('/{commentaire}/editt', 'App\Http\Controllers\CommentaireController@edit')->name('updateCommentaire');

Route::delete('/commentairess/{commentaire}', 'App\Http\Controllers\CommentaireController@destroy')->name('commentaire.destroy');



Route::get('/', 'App\Http\Controllers\PostController@showziedPage')->middleware('auth')->name('home');

//Route::get('/{post}/update', 'App\Http\Controllers\PostController@editt')->name('home');
//Route::delete('/{post}', 'App\Http\Controllers\PostController@destroy')->name('home');
//  Route::get('/', 'App\Http\Controllers\PostController@create')->middleware('auth');
//Route::get('/', 'App\Http\Controllers\PostController@index')->name('home');


Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
//Events
Route::get('/Event', 'App\Http\Controllers\EventController@index')->name('events');


Route::get('/events/create', 'App\Http\Controllers\EventController@create')->middleware('auth')->name('createEvent');
Route::post('/Event/create', 'App\Http\Controllers\EventController@storeEvent')->middleware('auth')->name('storeEvent');
//edit

Route::get('/events/{event}/edit',  [App\Http\Controllers\EventController::class, 'edit'])->middleware('auth')->name('events.edit');
//put methode
Route::put('/events/{event}', [App\Http\Controllers\EventController::class, 'update'])->middleware('auth')->name('events.update');

Route::delete('/events/{event}', 'App\Http\Controllers\EventController@deleteEvent')->middleware('auth')->name('deleteEvent');
Route::get('/eventsDetail/{event}', 'App\Http\Controllers\EventController@eventDetail')->name('events.detail');
Route::post('/comments/create', [App\Http\Controllers\CommentsEventController::class, 'store'])->middleware('auth')->name('comment.create');
Route::prefix('comments')->group(function () {
    Route::put('/comments/{comment}', [App\Http\Controllers\CommentsEventController::class, 'update'])->middleware('auth')->name('comment.update');
    Route::delete('/comments/{comment}', [App\Http\Controllers\CommentsEventController::class, 'destroy'])->middleware('auth')->name('comment.destroy');

});

Route::get('/calendar', [App\Http\Controllers\EventController::class, 'calendar'])->name('calendar.index');
Route::get('/events',[App\Http\Controllers\EventController::class, 'getEvents'])->name('calendar.events');
Route::get('/dashboardAdmin/Event', 'App\Http\Controllers\EventController@admin')->middleware('admin')->name('events');

// web.php
Route::get('/dashboardAdmin/userList', 'App\Http\Controllers\ProfileController@admin')->middleware('admin')->name('users');

Route::post('/edit-user-role/{userId}', 'App\Http\Controllers\ProfileController@updateRole')->middleware('admin')->name('updateRole');




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
})->middleware('admin');


Route::get('/dashboardAdmin/listReclamation', function () {
    return view('layouts/listReclamationAdmin');
});

Route::get('/dashboardAdmin/listReclamation', [App\Http\Controllers\ReponseReclamationController::class, 'index'])->middleware('admin')->name('reclamation.listReclamationAdmin');
Route::post('/reclamation/{reclamation}/reply', [App\Http\Controllers\ReponseReclamationController::class, 'store'])->middleware('admin')->name('reclamation.reply');
Route::get('/dashboardAdmin/pie', [App\Http\Controllers\ChartController::class, 'pieChart'])->middleware('admin');
Route::delete('/replies/{reply}', [App\Http\Controllers\ReponseReclamationController::class, 'destroy'])->name('deleteReply');



Route::get('/table', function () {
    return view('Group/table');
})->middleware('admin');


Route::get('/form', function () {
    return view('Admin/form');
})->middleware('admin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/editprofil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/editprofil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/editprofil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
