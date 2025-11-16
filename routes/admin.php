<?php

use App\Http\Controllers\Backend\Admin\AdminPageController;
use App\Http\Controllers\Backend\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::controller(AdminPageController::class)->group(function () {
        Route::get('/dashboard', 'adminDashboard')->name('admin.dashboard');
    });

    // Product controller
    Route::controller(ProductController::class)->group(function () {
        Route::get('/add/product', 'addProduct')->name('admin.add.product');
    });
});
