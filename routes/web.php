<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RevisorController;

// PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// UserController
Route::get("/profile", [UserController::class, "profile"])->name("profile");
Route::get("/profile/{user}", [UserController::class, "userProfile"])->name("user.profile");

// RevisorController
Route::get("/dashboard/revisor", [RevisorController::class,"dashboard"])->name("revisor.dashboard")->middleware("isRevisor");
Route::patch("/accept/article/{article}", [RevisorController::class,"acceptArticle"])->name("revisor.accept")->middleware("isRevisor");
Route::patch("/reject/article/{article}", [RevisorController::class,"rejectArticle"])->name("revisor.reject")->middleware("isRevisor");
// Work with us
Route::get("/revisor/form", [RevisorController::class, "revisorForm"])->name('revisor.form')->middleware('auth');
Route::post("/revisor/send", [RevisorController::class, "sendEmail"])->name('send.email');

// CategoryController
Route::get("/categoria/{category:name}", [CategoryController::class, "categoryShow"])->name("categoryShow");

// ArticleController
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::get('/article/detail/{article:title}', [ArticleController::class, 'show'])->name('article.detail');

// Test
Route::get("/search/announcement", [ArticleController::class,"searchArticles"])->name("article.search");
