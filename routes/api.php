<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetoController;

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

Route::get('/projetos', [ProjetoController::class, 'index']);
Route::get('/projetos/{id_projeto}', [ProjetoController::class, 'show']);
Route::post('/projetos', [ProjetoController::class, 'store']);
Route::put('/projetos/{id_projeto}', [ProjetoController::class, 'update']);
Route::delete('/projetos/{id_projeto}', [ProjetoController::class, 'destroy']);
