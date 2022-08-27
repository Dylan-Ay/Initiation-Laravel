<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Get dans "PostController" la function 'index' sur la route /home le name permet de l'utiliser dans la view

// Home page
Route::get('/home', [PostController::class, 'index'])->name('home');

// Delete post
Route::delete('/posts/delete/{id}', [PostController::class, 'delete'])->name('posts.delete');

// Create post page
Route::get('/posts/create', [PostController::class, 'create' ])->name('posts.create');

// Create post form treatment
Route::post('/posts/create', [PostController::class, 'store' ])->name('posts.store');

// Edit post
Route::get('/posts/edit/{id}', [PostController::class, 'edit' ])->name('posts.edit');

// Update post form treatment
Route::patch('/posts/update/{id}', [PostController::class, 'update'])->name('posts.update');

// Single post page
Route::get('/posts/{id}', [PostController::class, 'show' ])->name('posts.show');

// Contact page
Route::get('/contact', [PostController::class, 'contact' ])->name('contact');


// Route::get('posts', function () {
//     return response()->json([
//         'title' => 'mon super titre',
//         'description' => 'ma super description'
//     ]);
// });

// Route::get('articles', function () {
//     return view('articles');
// });