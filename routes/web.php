<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PetController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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



Route::get('/', function()
{
    return view('landing');
});

Route::get('/middle', function()
{
    return view('pets.middle');
})->middleware('user_log');

Route::get('/home-admin', [PetController::class, 'index'])->middleware('is_admin');
Route::get('/home', [PetController::class, 'adopt'])->middleware('user_log');

Route::get('/home-admin/create', [PetController::class, 'create'])->middleware('is_admin');

Route::post('/home-admin', [PetController::class, 'store'])->middleware('is_admin');

Route::patch('/home-admin/{id}/edit', [PetController::class, 'edit'])->middleware('is_admin');

Route::get('/home-admin/{id}', [PetController::class, 'update'])->middleware('is_admin');

Route::delete('/home-admin/{id}', [PetController::class, 'delete'])->middleware('is_admin');