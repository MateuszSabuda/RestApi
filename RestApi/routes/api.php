<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/sabuda/305401/people',[PeopleController::class,'index']);
Route::get('/sabuda/305401/people/{people}', [PeopleController::class, 'show']);
Route::delete('/sabuda/305401/people/{people}',[PeopleController::class, 'delete']);
Route::post('/sabuda/305401/people/{people}',[PeopleController::class, 'store']);
Route::put('/sabuda/305401/people/{people}',[PeopleController::class, 'update']);
