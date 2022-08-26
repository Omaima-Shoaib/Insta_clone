<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ProfileController;
use App\HTTP\Controllers\FollowerController;
use App\HTTP\Controllers\FollowingController;
use App\HTTP\Controllers\PeopleOnInstagramController;
use App\Http\Controllers\GoogleAuthController;



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

Route::get('/users',[ProfileController::class,'index'])->name('users.index')->middleware('auth');//profile page
Route::get('/users/create',[ProfileController::class,'create'])->name('users.create');
Route::get('/users/{id}',[ProfileController::class,'show'])->name('users.show');
// Route::get('/users/{id}',[ProfileController::class,'showfollowers'])->name('users.showfollowers');

Route::post('/users',[ProfileController::class,'store'])->name('users.store');
Route::get('/users/edit',[ProfileController::class,'edit'])->name('users.edit');
Route::put('/users/update',[ProfileController::class,'update'])->name('users.update');
Route::delete('/users/{id}',[ProfileController::class,'destroy'])->name('users.destroy');
// Route::get('/users/followers',[ProfileController::class,'followers'])->name('users.followers');


Route::get('/followersdetails',[FollowerController::class,'followers'])->name('followersdetails.followers');

Route::get('/followingdetails',[FollowingController::class,'following'])->name('followingdetails.following');

Route::get('/peopleoninstagram',[PeopleOnInstagramController::class,'peopleoninstagram'])->name('peopleoninstagram.peopleoninstagram');

 



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth' , 'verified'])->name('dashboard');


//send mail in queue
// Route::get('/sendmail', [Controller::class , 'sendMails']);

// Route::get('/mail', [RegisteredUserNotification::class , 'toMail']);

//google socialite
Route::get('auth/google', [GoogleAuthController::class , 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class , 'callbackGoogle']);


require __DIR__.'/auth.php';
