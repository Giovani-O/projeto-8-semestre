<?php

use App\Http\Controllers\RecipesController;
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


Route::controller(RecipesController::class)->group(function () {
    Route::post('/recipes', 'store');
});

Route::controller(RecipesController::class)->group(function () {
    Route::get('/recipes', 'index');
});


Route::controller(RecipesController::class)->group(function () {
    Route::post('/recipes/delete', [RecipesController::class, 'deleteById']);
});

Route::controller(RecipesController::class)->group(function() {
    Route::post('/recipes/getbyid', [RecipesController::class, 'getById']);
});

Route::controller(RecipesCOntroller::class)->group(function() {
    Route::post('recipes/getbyname', [RecipesController::class, 'getByName']);
});

Route::controller(RecipesCOntroller::class)->group(function() {
    Route::get('recipes/getall', [RecipesController::class, 'getAll']);
});
