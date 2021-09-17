<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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

Route::get('/home', [FrontEndController::class, 'index']);
Route::get('/contact', [FrontEndController::class, 'contact']);
Route::get('/about', [FrontEndController::class, 'about']);
// Route::get('/submissions', [FrontEndController::class, 'submissions']);
Route::get('/policy', [FrontEndController::class, 'policy']);
Route::get('/authorinfo', [FrontEndController::class, 'authorinfo']);
Route::get('/forauthors', [FrontEndController::class, 'forauthors']);
Route::get('/subformat', [FrontEndController::class, 'subformat']);
Route::get('/announcements', [FrontEndController::class, 'announcements']);
Route::get('/articles', [FrontEndController::class, 'articles']);

Route::post('/media', [MediaController::class, 'store'])->name('media.store');




Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/submissions', [ArticleController::class, 'index'])->middleware(['auth'])->name('submissions.index');
Route::get('/submissions/create', [ArticleController::class, 'create'])->middleware(['auth'])->name('submissions.create');
Route::get('/submissions/{id}', [ArticleController::class, 'show'])->middleware(['auth'])->name('submissions.show');
Route::post('/submissions', [ArticleController::class, 'store'])->middleware(['auth'])->name('submissions.store');

Route::get('/announcements', [AnnouncementController::class, 'index'])->middleware(['auth'])->name('announcements.index');
Route::get('/announcements/create', [AnnouncementController::class, 'create'])->middleware(['auth'])->name('announcements.create');
Route::get('/announcements/{id}', [AnnouncementController::class, 'show'])->middleware(['auth'])->name('announcements.show');
Route::put('/announcements/{id}', [AnnouncementController::class, 'update'])->middleware(['auth'])->name('announcements.update');
Route::get('/announcements/{id}/edit', [AnnouncementController::class, 'edit'])->middleware(['auth'])->name('announcements.edit');
Route::post('/announcements', [AnnouncementController::class, 'store'])->middleware(['auth'])->name('announcements.store');

Route::get('/roles', [RoleController::class, 'index'])->middleware(['auth'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create'])->middleware(['auth'])->name('roles.create');
Route::get('/roles/{id}', [RoleController::class, 'show'])->middleware(['auth'])->name('roles.show');
Route::put('/roles/{id}', [RoleController::class, 'update'])->middleware(['auth'])->name('roles.update');
Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->middleware(['auth'])->name('roles.edit');
Route::post('/roles', [RoleController::class, 'store'])->middleware(['auth'])->name('roles.store');

Route::get('/users', [UserController::class, 'index'])->middleware(['auth'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware(['auth'])->name('users.create');
Route::get('/users/{id}', [UserController::class, 'show'])->middleware(['auth'])->name('users.show');
Route::put('/users/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('users.edit');
Route::post('/users', [UserController::class, 'store'])->middleware(['auth'])->name('users.store');

Route::get('/reviews', [ReviewController::class, 'index'])->middleware(['auth'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->middleware(['auth'])->name('reviews.create');
Route::get('/reviews/{id}', [ReviewController::class, 'show'])->middleware(['auth'])->name('reviews.show');
Route::put('/reviews/{id}', [ReviewController::class, 'update'])->middleware(['auth'])->name('reviews.update');
Route::get('/reviews/{id}/edit', [ReviewController::class, 'edit'])->middleware(['auth'])->name('reviews.edit');
Route::get('/reviews/{id}/markAsDone', [ReviewController::class, 'markAsDone'])->middleware(['auth'])->name('reviews.markAsDone');
Route::post('/reviews', [ReviewController::class, 'store'])->middleware(['auth'])->name('reviews.store');

require __DIR__.'/auth.php';