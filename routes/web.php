<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;


Route::prefix('admin')->group(function () {

  Route::get('/admin/profile/create', [ProfileController::class,'add']);
  Route::get('/admin/profile/edit', [ProfileController::class,'edit']);
});

