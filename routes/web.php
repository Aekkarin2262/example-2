<?php
use App\Http\Controllers\Usercontroller;
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
Route::get('/',[UserController::class,'index'])->name('users');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users/insert',[UserController::class,'insert'])->name('users.insert');
Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
Route::post('/users/update',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{id}',[UserController::class,'delete'])->name('users.delete');
