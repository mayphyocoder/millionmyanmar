<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\AdminActivitiesController;
use App\Http\Controllers\AdminCSRController;
use App\Http\Controllers\AdminTeamsController;
use App\Http\Controllers\CSRController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');







Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('team',[TeamController::class, 'index'])->name('team.index');
Route::get('activities',[ActivitiesController::class,'index'])->name('activities.index');
Route::get('csr',[CSRController::class,'index'])->name('csr.index');

// Backend Contriller //

Route::resource('adminsubscriber', SubscribeController::class);
Route::resource('users',UserController::class);
Route::resource('adminteams',AdminTeamsController::class);
Route::resource('adminactivities',AdminActivitiesController::class);
Route::resource('admincsr',AdminCSRController::class);
