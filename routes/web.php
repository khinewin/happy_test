<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'welcome'])->name("/");

Route::get('/data-deletion-instruction', [HomeController::class, 'dataDeletion']);

Route::get('/show/post/{id}/{hash_ran?}', [HomeController::class, 'showPost'])->name('post.show');
Route::get('/share/{post_id?}/{hash_id?}/{post_img?}/{share_name?}',[HomeController::class, 'saveForShare']);


Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route("/");
})->name('logout');

Route::group(['prefix'=>'admin'], function(){
   
    
    
    Route::get('/login',[
        AuthController::class, 'getLogin'
    ])->name('login');
});

Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function(){
    Route::get('/register',[
        AuthController::class, 'getRegister'
    ])->name('register');
});


Route::group(['prefix'=>'auth'], function(){



   // Route::get('google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
   // Route::get('google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.login.callback');

    Route::get('facebook', [AuthController::class, 'redirectToFacebook'])->name('facebook.login');
    Route::get('facebook/callback', [AuthController::class, 'handleFacebookCallback'])->name('facebook.login.callback');

});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [AdminController::class, 'getDashboard'])->name('dashboard');

    Route::group(['prefix'=>'posts'], function(){
       Route::get('/new',[AdminController::class, 'newPosts'])->name('posts.new');
       Route::get('/', [AdminController::class, 'Posts'])->name('posts');
       Route::get('/template/edit/{id}', [AdminController::class, 'editPostTemplate'])->name('posts.template.edit');
       Route::get('/edit/{id}', [AdminController::class, 'editPost'])->name('posts.edit');
    });
});

