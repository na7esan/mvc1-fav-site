<?php

use App\Http\Controllers\FavoriteSiteController;
use Illuminate\Support\Facades\Route;

Route::get('favorite-sites/create', [FavoriteSiteController::class, 'create']);
Route::post('favorite-sites', [FavoriteSiteController::class, 'store']);
Route::get('favorite-sites', [FavoriteSiteController::class, 'index']);
