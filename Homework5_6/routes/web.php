<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

Route::domain('admin.localhost')->group(function () {

    Route::get('/', [AdminController::class, "index"])->name('admin.index');
    Route::delete('/posts/{post}', [AdminController::class, "destroy"]);
    Route::get('/posts/{post}/edit', [AdminController::class, "edit"]);
    Route::patch('/posts/{post}', [AdminController::class, 'update']);
    Route::get('/posts/create', [AdminController::class, "create"]);
    Route::post('/posts', [AdminController::class, "store"]);
    Route::delete('/comments/{id}', [AdminController::class, 'destroyComment']);

});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/{id}', [PostController::class, "show"]);


Route::post('/comments', [CommentController::class, "store"]);