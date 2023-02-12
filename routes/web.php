<?php

use App\Http\Controllers\PetController;
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
Route::get('/home-admin',[PetController::class, 'index']);
Route::get('/home-admin/create',[PetController::class, 'create']);
Route::post('/home-admin', [PetController::class, 'store']);
Route::get('/home-admin/{id}/update',[PetController::class, 'update']);
Route::patch('/home-admin/{id}',[PetController::class, 'edit']);
Route::delete('/home-admin/{id}',[PetController::class, 'delete']);