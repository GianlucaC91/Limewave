<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

// PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// CategoryController
Route::get("/categoria/{category:name}", [CategoryController::class, "categoryShow"])->name("categoryShow");

// ArticleController
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::get('/article/detail/{article:title}', [ArticleController::class, 'show'])->name('article.detail');


