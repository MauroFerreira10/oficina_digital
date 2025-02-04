<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ServicoController;

Route::get('/servicos', [ServicoController::class, 'listar']);
Route::post('/servicos', [ServicoController::class, 'criar'])->middleware('auth:sanctum');
Route::delete('/conta/cancelar', [AuthController::class, 'deletarConta'])->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']);





Route::middleware('auth:sanctum')->group(function () {

    Route::post('/veiculos/{id}/atualizar-estado', [VeiculoController::class, 'atualizarEstado']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
