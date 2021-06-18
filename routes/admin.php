<?php


use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [IndexController::class, 'index'])/* ->middleware('can:admin.index') */->name('admin.index');
Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');
