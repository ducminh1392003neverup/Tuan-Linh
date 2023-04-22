<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Uploadcontroller;
use App\Http\Services\UploadService;

Route::prefix('admin')->group(function(){

    Route::get('main', [MainController::class, 'index'])->name('admin');

    Route::prefix('menus')->group(function(){
        Route::get('add', [MenuController::class, 'create']);
        Route::post('add', [MenuController::class, 'store']);
        Route::get('list', [MenuController::class, 'index']);
        Route::get('edit/{menu}', [MenuController::class, 'show']);
        Route::post('edit/{menu}', [MenuController::class, 'update']);
        Route::get('destroy/{menu}', [MenuController::class, 'destroy']);
    });

    Route::prefix('products')->group(function(){
        Route::get('add', [ProductController::class, 'create']);
        Route::post('add', [ProductController::class, 'store']);
        Route::get('list', [ProductController::class, 'index']);
    });

    Route::post('upload/services', [UploadController::class, 'store']);

});
