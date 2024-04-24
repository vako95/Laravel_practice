<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MartinController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[PostController::class,'index'])->name('index');
Route::get('/index/create',[PostController::class,'create'])->name('index.create');
Route::post('/index',[PostController::class,'store'])->name('index.store');
Route::get('/index/{post}',[PostController::class,'show'])->name('index.show');
Route::get('/index/{post}/edit',[PostController::class,'edit'])->name('post.edit');
Route::patch('/index/{post}',[PostController::class,'update'])->name('index.update');
Route::delete('/index/{post}',[PostController::class,'destroy'])->name('index.delete');



Route::get('index/update',[PostController::class,'update']);
Route::get('index/delete',[PostController::class,'delete']);

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/main',[MainController::class,'index'])->name('main');
Route::get('/contacts',[ContactController::class,'index'])->name('contact');



// TESTSTSTSTSTSTSTSTT

// Route::get('/martin/create',[MartinController::class,'create'])->name('martin.create');
// Route::post('/martin',[MartinController::class,'store'])->name('martin.store');
// Route::get('/martin',[MartinController::class,'index'])->name('martin.index');
// Route::get('/martin/{martin}',[MartinController::class,'show'])->name('martin.show');
Route::get('/martin',[PostController::class,'index'])->name('martin.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
