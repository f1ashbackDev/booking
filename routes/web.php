<?php

use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/register', [WebController::class, 'register'])->name('registerView');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [WebController::class, 'login'])->name('loginView');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/service', [\App\Http\Controllers\ServicesController::class, 'index'])->name('service.index');

Route::middleware('auth')->prefix('user')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('myaccount');
    // Заказы
    Route::get('orders', [OrderController::class, 'index'])->name('order');
    Route::get('order/{service}/create', [OrderController::class, 'create'])->name('order.store');
});

Route::middleware('IsAdminOrManager')->prefix('admin')->group(function (){
    Route::get('/', function (){
        return view('new_admin.layout.admin');
    });
    // Пользователи
    Route::get('users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
    Route::get('users/{user}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('users/{user}/update', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
    // Услуги
    Route::get('service/', [ServicesController::class, 'index'])->name('admin.products.index');
    Route::get('service/create', [ServicesController::class, 'create'])->name('admin.products.create');
    Route::post('service/store', [ServicesController::class, 'store'])->name('admin.products.store');
    Route::get('service/{products}/edit', [ServicesController::class, 'edit'])->name('admin.products.edit');
    Route::get('service/{products}/delete', [ServicesController::class, 'delete'])->name('admin.products.delete');
    Route::post('service/{products}/update', [ServicesController::class, 'update'])->name('admin.products.update');
    // Заказы пользователей
    Route::get('orders', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('orders/{order}',[\App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin.orders.show');
    Route::post('orders/update/{order}', [\App\Http\Controllers\Admin\OrderController::class, 'update'])->name('admin.orders.update');
});
