<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;


Route::controller(NewsController::class)->group(function() {
    Route::get('admin/news/create', 'add');
});