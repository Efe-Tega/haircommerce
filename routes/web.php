<?php

use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});

require __DIR__ . '/admin.php';
