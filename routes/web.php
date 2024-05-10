<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// ArticleController
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::get('/article/detail/{article}', [ArticleController::class, 'show'])->name('article.detail');


