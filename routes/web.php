<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;


Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');

});



Route::prefix('admin')->group(function () {

  Route::get('admin/profile/create', [ProfileController::class,'add']);
  Route::get('/admin/profile/edit', [ProfileController::class,'edit']);
});

Route::middleware(['auth'])->group(function() {
  Route::get('/admin/profile/create' ,[ProfileController::class,'create'])->name('admin.profile.create');
  Route::get('/admin/profile/edit' ,[ProfileController::class,'edit'])->name('admin.profile.edit');
  
  Route::post('admin/profile/create',[ProfileController::class, 'create']);
  Route::post('admin/profile/edit',[ProfileController::class, 'update']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
