<?php

use App\Http\Controllers\PageController;
use Platon\Facades\Route;

Route::register('page', [PageController::class, 'show']);
