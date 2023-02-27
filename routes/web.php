<?php

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

Route::get('/', function () {
    return view('landing');
});
Route::get('/admin-login',function(){
    return view('auth.login-admin');
});
Route::get('/signup-adopter',function(){
    return view('auth.signup-adopter');
});
Route::get('/login-adopter',function(){
    return view('auth.login-adopter');
});
Route::get('/forgot-password',function(){
    return view('auth.forgot-password');
});
Route::get('/home',[PetController::class, 'adopt']);
Route::get('/home-admin',[PetController::class, 'index'])->middleware('is_admin');
Route::get('/home-admin/create',[PetController::class, 'create'])->middleware('is_admin');
Route::post('/home-admin', [PetController::class, 'store'])->middleware('is_admin');
Route::get('/home-admin/{id}/update',[PetController::class, 'update'])->middleware('is_admin');
Route::patch('/home-admin/{id}',[PetController::class, 'edit'])->middleware('is_admin');
Route::delete('/home-admin/{id}',[PetController::class, 'delete'])->middleware('is_admin');