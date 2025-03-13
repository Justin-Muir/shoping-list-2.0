<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateListController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/lists', [CreateListController::class,'index']);
Route::prefix('/list')->group(function(){
    Route::Post('/create', [CreateListController::class,'store']);
});