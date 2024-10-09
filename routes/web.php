<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;


Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
    Route::get('news', 'index')->name('news.index');
    Route::get('news/edit','edit')->name('news.edit');
    Route::post('news/edit','update')->name('news.update');
    Route::get('news/delete','delete')->name('news.delete');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/admin/profile/create', [ProfileController::class, 'add'])->name('admin.profile.create'); 
    Route::post('/admin/profile/create', [ProfileController::class, 'create']); 
    
    Route::get('/admin/profile/edit/', [ProfileController::class, 'edit'])->name('admin.profile.edit'); 
    Route::post('/admin/profile/update/', [ProfileController::class, 'update'])->name('admin.profile.update'); 
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
