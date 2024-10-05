<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;


Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');

});



Route::middleware(['auth'])->group(function() {
    Route::get('/admin/profile/create', [ProfileController::class, 'add'])->name('admin.profile.create'); // フォームを表示する
    Route::post('/admin/profile/create', [ProfileController::class, 'create']); // データを保存する
    
    Route::get('/admin/profile/edit', [ProfileController::class, 'edit'])->name('admin.profile.edit'); // 編集フォームを表示する
    Route::post('/admin/profile/edit', [ProfileController::class, 'update']); // データを更新する
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
