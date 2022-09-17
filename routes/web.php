<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('/logout',[UserController::class ,'logout'])->name('user.logout');
Route::get('/',[UserController::class,'index'])->name('user.login')->middleware('guest');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/signup',[UserController::class,'create'])->name('user.signup')->middleware('guest');
Route::post('/signup', [UserController::class , 'store'])->name('user.save');

//
// Route::middleware(["auth"])->group( function(){
    // inndex page
    Route::get('/dashboard',[DashboardController::class,'index'])->name("dashboard");
    Route::get('/dashboard/tabular',[DashboardController::class,'showTabularReports'])->name("tabular");
    Route::get('/dashboard/recents',[DashboardController::class,'showTabularRecents'])->name("recents");
    Route::get('/dashboard/productDetails',[DashboardController::class,'showProductDetails'])->name("productDetails");
    Route::get('/dashboard/customers',[DashboardController::class,'showCustomers'])->name("customers");
    // reports page
    Route::get('/dashboard/participant', [DashboardController::class , 'participant'])->name('participant');




// });
