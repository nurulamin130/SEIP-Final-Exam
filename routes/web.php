<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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

    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/blog',[HomeController::class,'blog'])->name('blog');

    Route::get('/category',[HomeController::class,'category'])->name('category');
    Route::get('/contact',[HomeController::class,'contact'])->name('contact');
    //Route::get('/single/post',[HomeController::class,'singlePost'])->name('single');
    Route::get('/single',[HomeController::class,'single'])->name('single');
    Route::get('/search/result',[HomeController::class,'searchResult'])->name('search-result');




    //For data show
    //=============================================================
    Route::get('/blog/details/{id}',[HomeController::class,'blogDetails'])->name('blog.details');
    //====================================================================





Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

        //for dashboard
        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');



        //for user
        Route::get('/add/user',[UserController::class,'addUser'])->name('add-user');
        Route::get('/view/user',[UserController::class,'viewUser'])->name('view-user');
        Route::post('/store',[UserController::class,'store'])->name('store');
        Route::get('/edit/user/{id}',[UserController::class,'edit'])->name('edit-user');
        Route::post('/update/user',[UserController::class,'update'])->name('update-user');
        Route::post('/delete/user',[UserController::class,'deleteInfo'])->name('delete-user');




        //for categories resources  Controller

        Route::resources(['categories' => CategoryController::class]);

        //for blogs resources  Controller
        Route::resources(['blogs' => BlogController::class]);


    });
