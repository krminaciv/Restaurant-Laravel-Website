<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [Controller::class, 'index']);

Route::get('/about', [Controller::class, 'about']);
Route::get('/menu', [Controller::class, 'menu']);
Route::get('/reservation', [Controller::class, 'reservation']);
Route::get('/blog', [Controller::class, 'blog']);
Route::get('/blog/{id}', [Controller::class, 'singleBlog']);

//reservation
Route::post('/reservation', [Controller::class, 'storeReservation']);
//comment
Route::post('/blog/{id}', [Controller::class, 'storeComment']);


//users
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/authenticate', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');

Route::put('/dashboard', [UserController::class, 'editAdmin'])->middleware('auth');

Route::get('/dashboard/reservations', [UserController::class, 'showReservations'])->middleware('auth');
Route::delete('/dashboard/reservations/{id}', [UserController::class, 'deleteReservation']);

Route::get('/dashboard/comments/', [UserController::class, 'showComments']);
Route::delete('/dashboard/comments/{id}', [UserController::class, 'deleteComment']);

Route::get('/dashboard/addAdmin', [UserController::class, 'showAddAdmin'])->middleware('auth');
Route::post('/dashboard/addAdmin', [UserController::class, 'storeAdmin'])->middleware('auth');

Route::get('/dashboard/menu', [UserController::class, 'showMenu'])->middleware('auth');
Route::post('/dashboard/menu', [UserController::class, 'storeMenu'])->middleware('auth');

Route::get('/dashboard/blog', [UserController::class, 'showBlog'])->middleware('auth');
Route::post('/dashboard/blog', [UserController::class, 'storeBlog'])->middleware('auth');













