<?php

use App\Http\Controllers\Admin\AliedController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\MotorizadoController;
use App\Http\Controllers\Admin\PedidoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [IndexController::class, 'index'])/* ->middleware('can:admin.index') */->name('admin.index');
Route::resource('users', UserController::class)/* ->only(['index','edit','update']) */->names('admin.users');
Route::resource('alieds', AliedController::class)/* ->only(['index','edit','update']) */->names('admin.alieds');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('motorizados', MotorizadoController::class)->names('admin.motorizados');
Route::get('active', [MotorizadoController::class,'active'])->name('admin.motorizados.active');
Route::get('inactive', [MotorizadoController::class,'inactive'])->name('admin.motorizados.inactive');
Route::get('concluidos', [PedidoController::class,'concluidos'])->name('admin.pedidos.concluidos');
Route::get('proceso', [PedidoController::class,'proceso'])->name('admin.pedidos.proceso');
Route::get('espera', [PedidoController::class,'espera'])->name('admin.pedidos.espera');
