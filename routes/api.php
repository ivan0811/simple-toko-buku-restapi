<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/book')->group(function () {
    Route::get('/', [BookController::class, 'showBook']);
    Route::get('/{id}', [BookController::class, 'detailBook']);
    Route::get('/', [BookController::class, 'searchBook']);
    Route::post('/', [BookController::class, 'postBook']);    
    Route::patch('/{id}', [BookController::class, 'updateBook']);    
    Route::delete('/{id}', [BookController::class, 'destroyBook']);    
});

Route::prefix('/category')->group(function () {
    Route::get('/', [BookController::class, 'showType']);
    Route::get('/{id}', [BookController::class, 'detailType']);    
    Route::post('/', [BookController::class, 'postType']);    
    Route::patch('/{id}', [BookController::class, 'updateType']);    
    Route::delete('/{id}', [BookController::class, 'destroyType']);    
});
