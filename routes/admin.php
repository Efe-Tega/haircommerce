<?php

use App\Http\Controllers\Backend\Admin\AdminPageController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->controller(AdminPageController::class)->group(function () {
    Route::get('/dashboard', 'adminDashboard')->name('admin.dashboard');
});
