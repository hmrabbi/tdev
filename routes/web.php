<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[UserController::class,'index']);
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[UserController::class,'redirect']);

Route::post('/user_create',[UserController::class,'user_create']);

Route::get('/auth_delete/{id}',[UserController::class,'auth_delete']);

Route::get('/auth_update/{id}',[UserController::class,'auth_update']);

Route::post('/update/{id}',[UserController::class,'update']);

Route::get('/admin_show',[AdminController::class,'admin_show']);

