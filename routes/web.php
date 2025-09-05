<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
route::view('/signup', 'auth.register')->name('signup');
route::view('/login', 'auth.login')->name('login');
route::view('/addTask', 'home');
Route::get('/taskEdit/{id}/edit',[TaskController::class, 'edit'])->name('taskEdit');
route::put('/taskUpdate/{id}',[TaskController::class, 'update'])->name('TaskUpdate');
route::delete('/taskDelete/delete/{id}', [TaskController::class, 'destroy'])->name('TaskDelete');
Route::post('/addTask', [TaskController::class, 'store']);
Route::post('/registerAccount', [AuthController::class, 'register'])->name('regAcc');
Route::post('/loginAccount', [AuthController::class, 'login']) -> name('loginAcc');

Route::view('/error', 'auth.error');
Route::get('/TaskShow', [TaskController::class, 'index']) -> middleware('checkLogin');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');
Route::get('/example', function () {
    return view('example');
});
