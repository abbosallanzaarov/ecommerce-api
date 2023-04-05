<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Auth
Route::post('/login', [AuthController::class , 'login']);
Route::post('/register', [AuthController::class , 'register']);


Route::apiResources([
    'categories' => CategoryController::class,
    'products'   => ProductController::class,
    'categories.products'=> CategoryProductController::class,
]);
