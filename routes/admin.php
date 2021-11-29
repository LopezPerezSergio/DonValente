<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

Route::get('',[HomeController::class,'index'])->name('admin.home');

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('customers', CustomerController::class)->names('admin.customers');

Route::resource('products', ProductController::class)->names('admin.products');

Route::resource('users', UserController::class)->names('admin.users');