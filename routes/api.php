<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\EmpresaController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/empresa/{id}', [EmpresaController::class,'show']);
Route::get('/empresa', [EmpresaController::class,'index']);
Route::post('/empresa', [EmpresaController::class,'store']);
Route::put('/empresa/{id}', [EmpresaController::class,'update']);
Route::delete('/empresa/{id}', [EmpresaController::class,'destroy']);
