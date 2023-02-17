<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// Route User
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[HomeController::class, 'userHome'])->name("home");
});
// Route company
Route::middleware(['auth','user-role:company'])->group(function()
{
    Route::get("/company/home",[HomeController::class, 'companyHome'])->name("company.home");
});
// Route Admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/dashboard",[App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get("/listUsers",[App\Http\Controllers\Admin\DashboardController::class, 'listUsers']);
    Route::get("/createUser",[App\Http\Controllers\Admin\DashboardController::class, 'createUser']);
    Route::get("/listOffers",[App\Http\Controllers\Admin\DashboardController::class, 'listOffers']);

});
