<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/posts/{post}', [HomeController::class, 'show'])->name('posts.show');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('posts', PostController::class)->only(['index', 'create', 'store']);
    Route::resource('posts', PostController::class)->only(['edit', 'update', 'destroy'])->middleware('can:update-post');
    Route::resource('users', UserController::class)->except('show')->middleware('can:admin');
});
