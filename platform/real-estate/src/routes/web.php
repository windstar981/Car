<?php

use Illuminate\Support\Facades\Route;
use Tool\RealEstate\Http\Controllers\CostEstimateController;
use Tool\RealEstate\Http\Controllers\ViewDirectionController;
use Tool\RealEstate\Http\Controllers\FengShuiController;
Route::get('/cost-estimate', [CostEstimateController::class, 'index']);

Route::get('/view-direction', [ViewDirectionController::class, 'index']);
Route::get('/fengshui', [FengShuiController::class, 'index']);


