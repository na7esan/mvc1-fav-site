<?php

use App\Http\Controllers\FavoriteSiteController;
use Illuminate\Support\Facades\Route;

Route::get('favorite-sites/create', [FavoriteSiteController::class, 'create']);
