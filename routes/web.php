<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryTypesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WidgetsController;
use App\Http\Controllers\CommentsController;




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




Route::get('/', [indexController::class, 'findAll_blogpost'] )->name('index');

Route::get('article/{id}', [ArticleController::class, 'InnerJoinGet'])->name('article');

Route::get('add', [PostController::class, 'add']); //add post

Route::get('add', [CategoryTypesController::class, 'addCategory']); //add Categories

Route::post('addcomment', [CommentsController::class, 'addComments']); //add comment

Route::get('/article/{id}', [CommentsController::class, 'showComment']); 


Route::get('post', function(){
    return view('blog.post');
})->name('post');

Route::get('category', function(){
    return view('blog.category');
})->name('category');

Route::get('about', function(){
    return view('blog.about');
})->name('about');

Route::get('contact', function(){
    return view('blog.contact');
})->name('contact');

Route::get('message', function(){
    return view('blog.message');
})->name('message');

