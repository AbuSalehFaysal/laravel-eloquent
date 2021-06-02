<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', [StudentController::class, 'fetchStudents']);
Route::get('add-post', [PostController::class, 'addPost']);
Route::post('/create-post', [PostController::class, 'createPost'])->name('post.create');
Route::get('/posts', [PostController::class, 'getPost']);
Route::get('/post/{id}', [PostController::class, 'getPostById']);
Route::get('/delete-post/{id}', [PostController::class, 'deletePost']);
Route::get('/edit-post/{id}', [PostController::class, 'editPost']);
Route::post('update-post', [PostController::class, 'updatePost'])->name('post.updated');
Route::get('/add-user', [UserController::class, 'insertRecord']);
Route::get('/get-phone/{id}', [UserController::class, 'fetchPhoneByUser']);