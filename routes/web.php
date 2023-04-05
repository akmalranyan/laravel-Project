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

// Route::get('/', function () {
//     return view('landing');
// });
// Route::get('/admin-login',function(){
//     return view('auth.login-admin');
// });
// Route::get('/signup-adopter', function(){
//     return view('auth.signup-adopter');
// });
// Route::get('/login-adopter',function(){
//     return view('auth.login-adopter');
// });
// Route::post('/login', [AuthenticationController::class, 'loginadopt']);
// Route::post('/login-admin', [PetController::class, 'index'], [AuthenticationController::class, 'login']);
// Route::post('/register', [PetController::class, 'adopt'], [AuthenticationController::class, 'register']);


// Route::get('/forgot-password',function(){
//     return view('auth.forgot-password');
// });
// // Route::post('/home-admin', [AuthenticationController::class, 'login'])->middleware('is_admin');
// Route::get('/home',[PetController::class, 'adopt'])->middleware('auth:sanctum');
// Route::get('/home-admin',[PetController::class, 'index'])->middleware('is_admin', 'auth:sanctum');


// Route::get('/home-admin/create',[PetController::class, 'create'])->middleware('is_admin');
// Route::post('/home-admin', [PetController::class, 'store'])->middleware('is_admin');
// Route::get('/home-admin/{id}/update',[PetController::class, 'update'])->middleware('is_admin');
// Route::patch('/home-admin/{id}',[PetController::class, 'edit'])->middleware('is_admin');
// Route::delete('/home-admin/{id}',[PetController::class, 'delete'])->middleware('is_admin');


Route::get('/', function()
{
    return view('landing');
});

Route::get('/middle', function()
{
    return view('pets.middle');
});

Route::get('/home-admin', [PetController::class, 'index']);
Route::get('/home', [PetController::class, 'adopt']);

Route::get('/home-admin/create', [PetController::class, 'create'])->middleware('is_admin');

Route::post('/home-admin', [PetController::class, 'store'])->middleware('is_admin');

Route::patch('/home-admin/{id}/edit', [PetController::class, 'edit'])->middleware('is_admin');

Route::get('/home-admin/{id}', [PetController::class, 'update'])->middleware('is_admin');

Route::delete('/home-admin/{id}', [PetController::class, 'delete'])->middleware('is_admin');