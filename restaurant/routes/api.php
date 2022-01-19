<?php

use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\RepasController;
use App\Http\Controllers\RepasIngredientsController;use Illuminate\Http\Request;
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

Route::get('/repas', [RepasController::class, 'index']);
Route::post('/repas/create', [RepasController::class, 'store']);
Route::post('/repas/add', [RepasIngredientsController::class, 'store']);
Route::get('/repas/crees', [RepasController::class, 'repas_crees']);
Route::get('/repas/ingredient/{idRepas}', [RepasIngredientsController::class, 'index']);
Route::get('/ingredients', [IngredientsController::class, 'index']);
