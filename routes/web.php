<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;


Route::controller(NewsController::class)->group(function() {
    Route::get('admin/news/create', 'add');
});



Route::prefix('admin')->group(function () {

  Route::get('admin/profile/create', [ProfileController::class,'add']);
  Route::get('/admin/profile/edit', [ProfileController::class,'edit']);
});

