<?php
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

// USER AUTHENTICATION
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::middleware('auth:api')->post('logout', [UserController::class, 'logout']);
Route::middleware('auth:sanctum')->get('user',function (Request $request){
    return response()->json($request->user());
});