<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// meilisearch
Route::get('/list-posts', [PostController::class, 'listPosts'])->name('list-posts');
Route::get('/add-posts', [PostController::class, 'addPost'])->name('add-posts');
Route::post('/store-posts', [PostController::class, 'storePost'])->name('store-posts');
Route::delete('/delete-posts/{id}', [PostController::class, 'deletePost'])->name('delete-posts');



// algolia
Route::get('/list', [StudentController::class, 'getList'])->name('list');
Route::get('/list-scout', [StudentController::class, 'searchScout'])->name('list-scout');
Route::get('/add-student', [StudentController::class, 'addStudent'])->name('add-student');
Route::post('/store-student', [StudentController::class, 'storeStudent'])->name('store-student');
Route::delete('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('delete-student');

