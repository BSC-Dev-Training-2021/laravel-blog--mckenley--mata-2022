<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryTypesController;
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




Route::get('/', [indexController::class, 'findAll'] )->name('index');

Route::get('article/{id}', [ArticleController::class, 'findId'])->name('article');

Route::get('post', [CategoryTypesController::class, 'findAll'])->name('post');

Route::get('about', function(){
    return view('blog.about');
})->name('about');

Route::get('contact', function(){
    return view('blog.contact');
})->name('contact');

Route::get('message', function(){
    return view('blog.message');
})->name('message');

