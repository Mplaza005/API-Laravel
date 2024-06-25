<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\CategoryController;


Route::get('/prueba', function () {
    return 'prueba';
});


 Route::post('register', [RegisterController::class,'store'])->name('api.v1.registrer');

// Route::get('categories', [CategoryController::class,'index'])->name('api.v1.categories.index');
// Route::post('categories', [CategoryController::class,'store'])->name('api.v1.categories.store');
// Route::get('categories/{category}', [CategoryController::class,'show'])->name('api.v1.categories.show');
// Route::put('categories/{category}', [CategoryController::class,'update'])->name('api.v1.categories.update');
// Route::delete('categories/{category}', [CategoryController::class,'destroy'])->name('api.v1.categories.delete');


//Route::apiResource('categories',CategoryController::class)->names('api.v1.categories');