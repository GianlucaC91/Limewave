<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// PublicController
Route::get('/', [PublicController::class, "homepage"])->name("homepage");
