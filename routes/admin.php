<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PDFController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SendController;
use App\Http\Controllers\Admin\UserController;

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

Route::get('',[HomeController::class,'index'])->name('admin.home');

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('customers', CustomerController::class)->names('admin.customers');

Route::resource('products', ProductController::class)->names('admin.products');

Route::resource('sends', SendController::class)->names('admin.sends');

Route::resource('users', UserController::class)->names('admin.users');

Route::get('report-customers', [PDFController::class,'PDFClientes'])->name('admin.pdf.customers');

Route::get('report-users', [PDFController::class,'PDFUsuarios'])->name('admin.pdf.users');

Route::get('report-categories', [PDFController::class,'PDFCategorias'])->name('admin.pdf.categories');

Route::get('report-products', [PDFController::class,'PDFProductos'])->name('admin.pdf.products');