<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;


Route::controller(NewsController::class)->group(function() {
    Route::get('admin/news/create', 'add')->middleware('auth');
});



Route::prefix('admin')->group(function () {

  Route::get('admin/profile/create', [ProfileController::class,'add']);
  Route::get('/admin/profile/edit', [ProfileController::class,'edit']);
});

Route::middleware(['auth'])->group(function() {
  Route::get('/admin/profile/create' ,[ProfileController::class,'create'])->name('admin.profile.create');
  Route::get('/admin/profile/edit' ,[ProfileController::class,'edit'])->name('admin.profile.edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
