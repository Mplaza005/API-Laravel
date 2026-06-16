<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;


//Route::post('register', [RegisterController::class,'store'])->name('api.v1.registrer');

  Route::get('categories', [CategoryController::class,'index'])->name('api.v1.categories.index');
  Route::post('categories', [CategoryController::class,'store'])->name('api.v1.categories.store');
  Route::get('category/{category}', [CategoryController::class,'show'])->name('api.v1.categories.show');
  Route::put('categories/{category}', [CategoryController::class,'update'])->name('api.v1.categories.update');
  Route::delete('categories/{category}', [CategoryController::class,'destroy'])->name('api.v1.categories.delete');


  Route::get('users', [UserController::class,'index'])->name('api.v1.posts.index');

  Route::get('posts', [PostController::class,'index'])->name('api.v1.posts.index');


//Route::apiResource('categories',CategoryController::class)->names('api.v1.categories');
