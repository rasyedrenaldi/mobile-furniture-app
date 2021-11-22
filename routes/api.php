<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', ProductController::class);

// Route::get('/products', [ProductController::class, 'index']) ;
// Route::get('/products/create', [ProductController::class, 'create']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::get('/products/{id}', [ProductController::class, 'show']);
// Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
// Route::put('/products/{id}', [ProductController::class, 'update']);
// Route::delete('/products/{id}', [ProductController::class, 'delete']);
