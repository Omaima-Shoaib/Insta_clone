<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SavedPostController;
use GuzzleHttp\Middleware;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth' , 'verified'])->name('dashboard');



Route ::get('/posts',[PostController::class,'index'])->name('posts.index')->middleware(['auth']);
Route ::get('/posts/create',[PostController::class,'create'])->name('posts.create')->middleware(['auth']);
//->middleware(['auth'])

Route ::post('/posts',[PostController::class,'store'])->name('posts.store')->middleware(['auth']);
// Route ::post('/posts',[PostController::class,'store'])->name('posts.store');
Route ::get('/posts/{id}',[PostController::class,'show'])->where('id','[0-9]+')->name('posts.show')->middleware(['auth']);


// Route ::post('/savedposts',[SavedPostController::class,'store'])->name('savedposts.store');
Route ::get('/savedposts',[SavedPostController::class,'index'])->name('savedposts.index')->middleware(['auth']);
Route ::post('/savedposts',[SavedPostController::class,'update'])->name('savedposts.update')->middleware(['auth']);
Route ::delete('/savedposts/{id}',[SavedPostController::class,'destroy'])->where('id','[0-9]+') ->name('savedposts.destroy')->middleware(['auth']);



Route ::post('/comment',[CommentsController::class,'store'])->name('comments.store')->middleware(['auth']);

require __DIR__.'/auth.php';
