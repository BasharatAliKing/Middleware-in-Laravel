<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/loginMatch',[UserController::class,'loginMatch'])->name('loginMatch');
Route::get('/register',[UserController::class,'register'])->name('register.view');
Route::post('/registersubmit',[UserController::class,'registersubmit'])->name('register');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
 //Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware(ValidUser::class);
// Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('isValidUser');

//  Route::middleware('isValidUser:guest')->group(function (){
//    // Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->withoutMiddleware('isValidUser');
//     Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->withoutMiddleware('isValidUser:admin');
//  });
// Route::get('/admin',[UserController::class,'admin'])->name('admin')->middleware('isValidUser:admin');
 Route::get('/admin',[UserController::class,'admin'])->name('admin')->middleware('isValidUser:admin');
 Route::get('/dashbaord',[UserController::class,'dashboard'])->name('dashboard')->middleware('isValidUser:guest');