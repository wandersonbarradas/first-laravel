<?php

use App\Http\Controllers\MunicipioController;
use Illuminate\Support\Facades\Route;

Route::get('/municipios', [MunicipioController::class, "index"]);
Route::get('/municipios/{id}', [MunicipioController::class, "show"]);
Route::post('/municipios', [MunicipioController::class, "store"]);
Route::post('/municipios/{id}', [MunicipioController::class, "update"]);
Route::delete('/municipios/{id}', [MunicipioController::class, "destroy"]);
