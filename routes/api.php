<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users;
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
//users API
Route::get('users',[Users::class,'showAll']);
Route::get('user/{id}', [Users::class, 'show']); 
Route::put('user/{id}', [Users::class, 'update']);
Route::delete('user/{id}', [Users::class, 'destroy']); 
Route::post('user', [Users::class, 'store']); 
Route::put('user/{id}', [Users::class, 'activateAccount']);
Route::put('user/{id}', [Users::class, 'desactivateAccount']);

//offers API
Route::get('offers',[Offers::class,'showAll']);
Route::get('offer/{id}', [Offers::class, 'show']); 
Route::put('offer/{id}', [Offers::class, 'update']);
Route::delete('offer/{id}', [Offers::class, 'destroy']); 
Route::post('offer', [Offers::class, 'store']); 
