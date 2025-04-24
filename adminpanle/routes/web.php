<?php

use App\Http\Controllers\AdminpanleController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

//admin controllers
Route::get("/",[AdminpanleController::class,"index"])->name('dashboard.index');
Route::get("/form",[AdminpanleController::class,"create"])->name('form.create');
Route::post("/form",[AdminpanleController::class,"store"])->name('form.store');
Route::get('/table',[AdminpanleController::class,"show"])->name('table.show');
Route::delete('table/{id}',[AdminpanleController::class,"destroy"])->name('table.destroy');
Route::post('/table/bulkdelete', [AdminpanleController::class, 'bulkDelete'])->name('bulkDelete');
Route::get('/edit/{id}',[AdminpanleController::class,"edit"])->name('table.edit');
Route::put('/edit/{id}',[AdminpanleController::class,"update"])->name('table.update');
Route::get('/profile',[AdminpanleController::class,"profile"])->name('profile');


// logins Controller
Route::get('/login',[LoginController::class,"login"])->name('login');
Route::post('/login',[LoginController::class,"loginshow"])->name('login.show');
Route::get('/logout',[LoginController::class,"logout"])->name('logout');
Route::get('/emailverify',[LoginController::class,"emailverify"])->name('emailverify');
Route::post('/emailverify',[LoginController::class,"emailverifysend"])->name('emailverifysend');
Route::get('/resetpassword',[LoginController::class,"resetpassword"])->name('resetpassword');
Route::post('/resetpassword',[LoginController::class,"resetpasswordsend"])->name('resetpasswordsend');
Route::post('/changepassword',[LoginController::class,"changepassword"])->name('changepassword');

